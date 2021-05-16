<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutSectionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $request->validate([
            'about_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
        ]);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('about_image')){

            // Get image file
            $about_image = $request->file('about_image');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $about_image_name =  time().'-'.$about_image->getClientOriginalName();

            // Upload image
            $about_image->move($folder, $about_image_name);

            // Set input
            $input['about_image']= $about_image_name;

        } else {
            // Set input
            $input['about_image']= null;
        }


        // Record to database
        AboutSection::firstOrCreate([
            'language_id' => getLanguage()->id,
            'about_image' => $input['about_image'],
            'video_link' => $input['video_link']
        ]);

        return redirect()->route('about.index')
            ->with('success', 'content.created_successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'about_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
        ]);


        // Get model
        $about_section = AboutSection::find($id);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('about_image')){

            // Get image file
            $about_image = $request->file('about_image');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $about_image_name =  time().'-'.$about_image->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$about_section->about_image));

            // Upload image
            $about_image->move($folder, $about_image_name);

            // Set input
            $input['about_image'] = $about_image_name;

        }

        // Update model
        AboutSection::find($id)->update($input);

        return redirect()->route('about.index')
            ->with('success', 'content.updated_successfully');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\WhyChooseSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WhyChooseSectionController extends Controller
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
            'title' => 'required',
            'why_choose_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
            'why_choose_image_2' => 'mimes:svg,png,jpeg,jpg|max:2048',
        ]);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('why_choose_image')){

        // Get image file
        $why_choose_image = $request->file('why_choose_image');

        // Folder path
        $folder ='uploads/img/why_choose/';

        // Make image name
        $why_choose_image_name =  time().'-'.$why_choose_image->getClientOriginalName();

        // Upload image
        $why_choose_image->move($folder, $why_choose_image_name);

        // Set input
        $input['why_choose_image']= $why_choose_image_name;

    } else {
        // Set input
        $input['why_choose_image']= null;
    }

        if($request->hasFile('why_choose_image_2')){

            // Get image file
            $why_choose_image_2 = $request->file('why_choose_image_2');

            // Folder path
            $folder ='uploads/img/why_choose/';

            // Make image name
            $why_choose_image_2_name =  time().'-'.$why_choose_image_2->getClientOriginalName();

            // Upload image
            $why_choose_image_2->move($folder, $why_choose_image_2_name);

            // Set input
            $input['why_choose_image_2'] = $why_choose_image_2_name;

        } else {
            // Set input
            $input['why_choose_image_2']= null;
        }


        // Record to database
        WhyChooseSection::firstOrCreate([
            'language_id' => getLanguage()->id,
            'top_title' => $input['top_title'],
            'title' => $input['title'],
            'why_choose_image' => $input['why_choose_image'],
            'why_choose_image_2' => $input['why_choose_image_2']
        ]);

        return redirect()->route('why-choose.create')
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
            'title' => 'required',
            'why_choose_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
            'why_choose_image_2' => 'mimes:svg,png,jpeg,jpg|max:2048',
        ]);


        // Get model
        $why_choose_section = WhyChooseSection::find($id);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('why_choose_image')){

            // Get image file
            $why_choose_image = $request->file('why_choose_image');

            // Folder path
            $folder ='uploads/img/why_choose/';

            // Make image name
            $why_choose_image_name =  time().'-'.$why_choose_image->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$why_choose_section->why_choose_image));

            // Upload image
            $why_choose_image->move($folder, $why_choose_image_name);

            // Set input
            $input['why_choose_image'] = $why_choose_image_name;

        }

        if($request->hasFile('why_choose_image_2')){

            // Get image file
            $why_choose_image_2 = $request->file('why_choose_image_2');

            // Folder path
            $folder ='uploads/img/why_choose/';

            // Make image name
            $why_choose_image_2_name =  time().'-'.$why_choose_image_2->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$why_choose_section->why_choose_image_2));

            // Upload image
            $why_choose_image_2->move($folder, $why_choose_image_2_name);

            // Set input
            $input['why_choose_image_2'] = $why_choose_image_2_name;

        }

        // Update model
        WhyChooseSection::find($id)->update($input);

        return redirect()->route('why-choose.create')
            ->with('success', 'content.updated_successfully');
    }
}

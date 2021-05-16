<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutCompanyController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retrieving a model
        $language = getLanguage();
        $about_company = AboutCompany::where('language_id', $language->id)->first();

        return view('admin.about_company.company.create', compact('about_company'));
    }

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
            'desc' => 'required',
            'about_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
            'about_image_2' => 'mimes:svg,png,jpeg,jpg|max:2048',
            'about_image_3' => 'mimes:svg,png,jpeg,jpg|max:2048',
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

        if($request->hasFile('about_image_2')){

            // Get image file
            $about_image_2 = $request->file('about_image_2');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $about_image_2_name =  time().'-'.$about_image_2->getClientOriginalName();

            // Upload image
            $about_image_2->move($folder, $about_image_2_name);

            // Set input
            $input['about_image_2']= $about_image_2_name;

        } else {
            // Set input
            $input['about_image_2']= null;
        }

        if($request->hasFile('about_image_3')){

            // Get image file
            $about_image_3 = $request->file('about_image_3');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $about_image_3_name =  time().'-'.$about_image_3->getClientOriginalName();

            // Upload image
            $about_image_3->move($folder, $about_image_3_name);

            // Set input
            $input['about_image_3']= $about_image_3_name;

        } else {
            // Set input
            $input['about_image_3']= null;
        }


        // Record to database
        AboutCompany::firstOrCreate([
            'language_id' => getLanguage()->id,
            'top_title' => $input['top_title'],
            'title' => $input['title'],
            'desc' => $input['desc'],
            'experience' => $input['experience'],
            'experience_desc' => $input['experience_desc'],
            'video_link' => $input['video_link'],
            'about_image' => $input['about_image'],
            'about_image_2' => $input['about_image_2'],
            'about_image_3' => $input['about_image_3']
        ]);

        return redirect()->route('about-company.create')
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
            'desc' => 'required',
            'about_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
            'about_image_2' => 'mimes:svg,png,jpeg,jpg|max:2048',
            'about_image_3' => 'mimes:svg,png,jpeg,jpg|max:2048',
        ]);

        // Get model
        $about_company = AboutCompany::findOrFail($id);

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
            File::delete(public_path($folder.$about_company->about_image));

            // Upload image
            $about_image->move($folder, $about_image_name);

            // Set input
            $input['about_image'] = $about_image_name;

        }

        if($request->hasFile('about_image_2')){

            // Get image file
            $about_image_2 = $request->file('about_image_2');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $about_image_2_name =  time().'-'.$about_image_2->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$about_company->about_image_2));

            // Upload image
            $about_image_2->move($folder, $about_image_2_name);

            // Set input
            $input['about_image_2'] = $about_image_2_name;

        }

        if($request->hasFile('about_image_3')){

            // Get image file
            $about_image_3 = $request->file('about_image_3');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $about_image_3_name =  time().'-'.$about_image_3->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$about_company->about_image_3));

            // Upload image
            $about_image_3->move($folder, $about_image_3_name);

            // Set input
            $input['about_image_3'] = $about_image_3_name;

        }

        // Update model
        AboutCompany::find($id)->update($input);

        return redirect()->route('about-company.create')
            ->with('success', 'content.updated_successfully');
    }

}

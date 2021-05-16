<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ContactSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactSectionController extends Controller
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
            'contact_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
        ]);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('contact_image')){

            // Get image file
            $contact_image = $request->file('contact_image');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $contact_image_name =  time().'-'.$contact_image->getClientOriginalName();

            // Upload image
            $contact_image->move($folder, $contact_image_name);

            // Set input
            $input['contact_image']= $contact_image_name;

        } else {
            // Set input
            $input['contact_image']= null;
        }


        // Record to database
        ContactSection::firstOrCreate([
            'language_id' => getLanguage()->id,
            'top_title' => $input['top_title'],
            'title' => $input['title'],
            'desc' => $input['desc'],
            'map_iframe' => $input['map_iframe'],
            'contact_image' => $input['contact_image']
        ]);

        return redirect()->route('contact.create')
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
            'contact_image' => 'mimes:svg,png,jpeg,jpg|max:2048',
        ]);

        // Get model
        $contact_section = ContactSection::find($id);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('contact_image')){

            // Get image file
            $contact_image = $request->file('contact_image');

            // Folder path
            $folder ='uploads/img/general/';

            // Make image name
            $contact_image_name =  time().'-'.$contact_image->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$contact_section->contact_image));

            // Upload image
            $contact_image->move($folder, $contact_image_name);

            // Set input
            $input['contact_image'] = $contact_image_name;

        }

        // Update model
        ContactSection::find($id)->update($input);

        return redirect()->route('contact.create')
            ->with('success', 'content.updated_successfully');
    }

}


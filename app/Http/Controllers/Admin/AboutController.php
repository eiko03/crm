<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\AboutSection;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieving models
        $language = getLanguage();
        $abouts = About::where('language_id', $language->id)->orderBy('id', 'desc')->get();
        $about_section = AboutSection::where('language_id', $language->id)->first();

        return view('admin.about.index', compact('abouts', 'about_section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'tab_name' => 'required',
            'order' => 'required|integer',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        About::create(
            [
                'language_id' => getLanguage()->id,
                'top_title' => $input['top_title'],
                'title' => $input['title'],
                'desc' => Purifier::clean($input['desc']),
                'tab_name' => $input['tab_name'],
                'order' => $input['order']
            ]
        );

        return redirect()->route('about.index')
            ->with('success', 'content.created_successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Retrieving models
        $about = About::findOrFail($id);

        return view('admin.about.edit', compact( 'about'));
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
            'tab_name' => 'required',
            'order' => 'required|integer',
        ]);

        // Get All Request
        $input = $request->all();

        // XSSCleaner Cleaner
        $input['desc'] = Purifier::clean($input['desc']);

        // Update to database
        About::find($id)->update($input);

        return redirect()->route('about.index')
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Retrieve a model
        $about = About::find($id);

        // Delete record
        $about->delete();

        return redirect()->route('about.index')
            ->with('success','content.deleted_successfully');
    }
}

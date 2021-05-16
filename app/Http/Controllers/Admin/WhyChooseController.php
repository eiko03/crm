<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\WhyChoose;
use App\Models\Admin\WhyChooseSection;
use Illuminate\Http\Request;

class WhyChooseController extends Controller
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
        $why_chooses = WhyChoose::where('language_id', $language->id)->orderBy('id', 'desc')->get();
        $why_choose_section = WhyChooseSection::where('language_id', $language->id)->first();

        return view('admin.about_company.why_choose.create', compact('why_chooses', 'why_choose_section'));
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
            'order' => 'required|integer',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        WhyChoose::create([
            'language_id' => getLanguage()->id,
            'icon' => $input['icon'],
            'title' => $input['title'],
            'desc' => $input['desc'],
            'order' => $input['order']
        ]);

        return redirect()->route('why-choose.create')
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
        $why_choose = WhyChoose::findOrFail($id);

        return view('admin.about_company.why_choose.edit', compact('why_choose'));
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
            'order' => 'required|integer',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        WhyChoose::find($id)->update($input);

        return redirect()->route('why-choose.create')
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
        $why_choose = WhyChoose::find($id);

        // Delete record
        $why_choose->delete();

        return redirect()->route('why-choose.create')
            ->with('success', 'content.deleted_successfully');
    }
}

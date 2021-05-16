<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\IndustrySection;
use Illuminate\Http\Request;

class IndustrySectionController extends Controller
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
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        IndustrySection::firstOrCreate([
            'language_id' => getLanguage()->id,
            'top_title' => $input['top_title'],
            'title' => $input['title']
        ]);

        return redirect()->route('industry.create')
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
        ]);

        // Get All Request
        $input = $request->all();

        // Update model
        IndustrySection::find($id)->update($input);

        return redirect()->route('industry.create')
            ->with('success', 'content.updated_successfully');
    }

}

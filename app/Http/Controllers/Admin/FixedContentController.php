<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\FixedContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FixedContentController extends Controller
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
        $fixed_content = FixedContent::where('language_id', $language->id)->first();

        return view('admin.banner.fixed_content.create', compact('fixed_content'));
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
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        FixedContent::firstOrCreate([
            'language_id' => getLanguage()->id,
            'title' => $input['title'],
            'desc' => $input['desc'],
            'btn_name_1' => $input['btn_name_1'],
            'btn_link_1' => $input['btn_link_1'],
            'btn_name_2' => $input['btn_name_2'],
            'btn_link_2' => $input['btn_link_2']
        ]);

        return redirect()->route('fixed-content.create')
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
        ]);

        // Get All Request
        $input = $request->all();

        // Update user
        FixedContent::find($id)->update($input);

        return redirect()->route('fixed-content.create')
            ->with('success', 'content.updated_successfully');
    }

}

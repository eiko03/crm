<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Work;
use App\Models\Admin\WorkCategory;
use App\Models\Admin\WorkSection;
use App\Models\Admin\WorkStep;
use App\Models\Admin\WorkItem;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WorkController extends Controller
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
        $works = Work::where('language_id', $language->id)->orderBy('id', 'desc')->get();
        $categories = WorkCategory::where('language_id', $language->id)->get();
        $work_section = WorkSection::where('language_id', $language->id)->first();

        if (count($categories) > 0) {

            return view('admin.work.project.index', compact( 'works', 'categories', 'work_section'));

        } else{

            return redirect()->route('work-category.create')
                ->with('success', 'content.please_create_a_category');

        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retrieving models
        $language = getLanguage();
        $categories = WorkCategory::where('language_id', $language->id)->get();

        return view('admin.work.project.create', compact(  'categories'));

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
            'work_category_id'   =>  'integer|required',
            'title'   =>  'required',
            'desc'   =>  'required',
            'status'   =>  'integer|in:0,1',
            'work_image'   =>  'mimes:svg,png,jpeg,jpg|max:2048'
        ]);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('work_image')){

            // Get image file
            $work_image_file = $request->file('work_image');

            // Folder path
            $folder = 'uploads/img/works/';

            // Make image name
            $work_image_name = time().'-'.$work_image_file->getClientOriginalName();

            // Original size upload file
            $work_image_file->move($folder, $work_image_name);

            // Set input
            $input['work_image']= $work_image_name;

        } else {
            // Set input
            $input['work_image']= null;
        }

        // Find category
        $category = WorkCategory::find($input['work_category_id']);

        // Record to database
        Work::create([
            'language_id' => getLanguage()->id,
            'category_name' => $category->category_name,
            'work_category_id' => $input['work_category_id'],
            'title' => $input['title'],
            'desc' => Purifier::clean($input['desc']),
            'work_image' => $input['work_image'],
            'result' => $input['result'],
            'status' => $input['status']
        ]);

        return redirect()->route('work.index')
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
        $language = getLanguage();
        $work = Work::findOrFail($id);
        $categories = WorkCategory::where('language_id', $language->id)->get();

        return view('admin.work.project.edit', compact('work', 'categories'));
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
        $request->validate([
            'work_category_id'   =>  'integer|required',
            'title'   =>  'required',
            'desc'   =>  'required',
            'status'   =>  'integer|in:0,1',
            'work_image'   =>  'mimes:svg,png,jpeg,jpg|max:2048'
        ]);

        $work = Work::find($id);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('work_image')){

            // Get image file
            $work_image_file = $request->file('work_image');

            // Folder path
            $folder = 'uploads/img/works/';

            // Make image name
            $work_image_name =  time().'-'.$work_image_file->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$work->work_image));

            // Original size upload file
            $work_image_file->move($folder, $work_image_name);

            // Set input
            $input['work_image']= $work_image_name;

        }

        // Find category
        $category = WorkCategory::find($input['work_category_id']);
        $input['category_name'] = $category->category_name;

        // XSS Purifier
        $input['desc'] = Purifier::clean($input['desc']);

        // Update to database
        Work::find($id)->update($input);

        return redirect()->route('work.index')
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_item($id)
    {
        // Retrieving models
        $work_items = WorkItem::where('work_id', $id)->get();

        return view('admin.work.project.item.create', compact( 'work_items', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_item(Request $request)
    {
        // Form validation
        $request->validate([
            'work_id' => 'required',
            'order' => 'required|integer',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        WorkItem::create([
            'work_id' =>  $input['work_id'],
            'icon' => $input['icon'],
            'title' => $input['title'],
            'desc' => $input['desc'],
            'order' => $input['order']
        ]);

        return redirect()->route('work.create_item', $input['work_id'])
            ->with('success', 'content.created_successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_item($work_id, $id)
    {
        // Retrieving models
        $work_item = WorkItem::find($id);

        return view('admin.work.project.item.edit', compact('work_item', 'work_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_item(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'order' => 'required|integer',
        ]);

        // Get All Request
        $input = $request->all();

        // Update user
        WorkItem::find($id)->update($input);

        return redirect()->route('work.create_item', $input['work_id'])
            ->with('success','content.updated_successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_item($id)
    {
        // Retrieve a model
        $work_item = WorkItem::find($id);

        // Delete record
        $work_item->delete();

        return redirect()->route('work.create_item', $work_item->work_id)
            ->with('success','content.deleted_successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_step($id)
    {
        // Retrieving models
        $work_steps = WorkStep::where('work_id', $id)->get();

        return view('admin.work.project.step.create', compact( 'work_steps', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_step(Request $request)
    {
        // Form validation
        $request->validate([
            'work_id' => 'required',
            'order' => 'integer',
            'step_image'   =>  'mimes:svg,png,jpeg,jpg|max:2048'
        ]);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('step_image')){

            // Get image file
            $step_image_file = $request->file('step_image');

            // Folder path
            $folder = 'uploads/img/works/steps/';

            // Make image name
            $step_image_name = time().'-'.$step_image_file->getClientOriginalName();

            // Original size upload file
            $step_image_file->move($folder, $step_image_name);

            // Set input
            $input['step_image']= $step_image_name;

        } else {
            // Set input
            $input['step_image']= null;
        }

        // Record to database
        WorkStep::create([
            'work_id' =>  $input['work_id'],
            'step_image' => $input['step_image'],
            'title' => $input['title'],
            'desc' => $input['desc'],
            'order' => $input['order']
        ]);

        return redirect()->route('work.create_step', $input['work_id'])
            ->with('success', 'content.created_successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_step($work_id, $id)
    {
        // Retrieving models
        $work_step = WorkStep::find($id);

        return view('admin.work.project.step.edit', compact('work_step', 'work_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_step(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'order' => 'integer',
            'step_image'   =>  'mimes:svg,png,jpeg,jpg|max:2048'
        ]);

        $work_step = WorkStep::find($id);

        // Get All Request
        $input = $request->all();

        if($request->hasFile('step_image')){

            // Get image file
            $step_image_file = $request->file('step_image');

            // Folder path
            $folder = 'uploads/img/works/steps/';

            // Make image name
            $step_image_name =  time().'-'.$step_image_file->getClientOriginalName();

            // Delete Image
            File::delete(public_path($folder.$work_step->step_image));

            // Original size upload file
            $step_image_file->move($folder, $step_image_name);

            // Set input
            $input['step_image']= $step_image_name;

        }


        // Update user
        WorkStep::find($id)->update($input);

        return redirect()->route('work.create_step', $input['work_id'])
            ->with('success','content.updated_successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_step($id)
    {
        // Retrieve a model
        $work_step = WorkStep::find($id);

        // Folder path
        $folder = 'uploads/img/works/steps/';

        // Delete Image
        File::delete(public_path($folder.$work_step->step_image));

        // Delete record
        $work_step->delete();

        return redirect()->route('work.create_step', $work_step->work_id)
            ->with('success','content.deleted_successfully');
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
        $work = Work::find($id);
        $work_steps = WorkStep::where('work_id', $id)->get();

        // Folder path
        $folder = 'uploads/img/works/';
        $folder_steps = 'uploads/img/works/steps/';

        if (count($work_steps) > 0) {

            foreach ($work_steps as $work_step) {
                // Delete Image
                File::delete(public_path($folder_steps.$work_step->step_image));
            }
        }

        // Delete Image
        File::delete(public_path($folder.$work->work_image));


        // Delete record
        $work->delete();

        return redirect()->route('work.index')
            ->with('success', 'content.deleted_successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ChapterDatatable;
use App\Http\Controllers\Controller;
use App\Model\Chapter;
use App\Model\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller
{
    public function index(ChapterDatatable $chapter)
    {

        return $chapter->render('admin.chapter.index', ['title' => trans('admin.class-control')]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $board_name = DB::table('boards')->pluck("board_name", "id")->all();
        // echo "<pre>"; print_r($board_name);die;
        return view('admin.chapter.create', compact('board_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'chapter_name' => ['required'],
            'chapter_number' => ['required'],
            'subject_id' => ['required'],
            'class_id' => ['required'],
            'board_id' => ['required'],
        ],
            [
                'chapter_name.required' => __('The Chapter Name field is required.'),
                'chapter_number.required' => __('The Chapter Number field is required.'),
                'subject_id.required' => __('The Subject ID field is required.'),
                'class_id.required' => __('The Class ID field is required.'),
                'board_id.required' => __('The Board ID field is required.'),
            ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'Chapter/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image = "$profileImage";
        }
        Chapter::create([
            'chapter_name' => $request->chapter_name,
            'chapter_number' => $request->chapter_number,
            'subject_id' => $request->subject_id,
            'image' => $image,
        ]);
        return redirect()->back()->with('success', __('Class Add successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        //echo "<pre>"; print_r($chapter);die;
        return view('admin.chapter.edit', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Chapter $chapter)
    {
        $request->validate([
            'chapter_name' => ['required'],
            'chapter_number' => ['required'],
            'subject_id' => ['required'],
            'class_id' => ['required'],
            'board_id' => ['required'],
        ],
            [
                'chapter_name.required' => __('The Chapter Name field is required.'),
                'chapter_number.required' => __('The Chapter Number field is required.'),
                'subject_id.required' => __('The Subject ID field is required.'),
                'class_id.required' => __('The Class ID field is required.'),
                'board_id.required' => __('The Board ID field is required.'),
            ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'Subject/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $chapter->update($input);

        return redirect()->back()->with('success', __('Chapter Add successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $Chapter)
    {
        $Chapter->delete();
        return redirect(aurl('chapter'))->with('success', trans('admin.delete_success'));
    }

    public function destroyAll()
    {
        if (!request('items')) {
            return redirect(aurl('chapter'))->with('error', trans('admin.please_check_record_number'));
        }
        // destroy : it Make the Delete based on the number of request items it received
        Chapter::destroy(request('items'));
        return redirect(aurl('chapter'))->with('success', trans('admin.delete_success'));
    }

    public function getChapterSubjectList(Request $request)
    {
        $class_id = $request->get('class_id');
        $subjectList = Subject::where('class_id', $class_id)->pluck('subject_name', 'id')->toArray();
        //dd($subjectList);
        return view('admin.chapter.get-class-Subject-list', compact('subjectList'));
    }

}

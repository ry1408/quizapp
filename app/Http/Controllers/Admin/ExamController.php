<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExamDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Model\Chapter;
use App\Model\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ExamDatatable $exam)
    {
        return $exam->render('admin.exams.index', ['title' => trans('admin.exam-control')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $board_name = DB::table('boards')->pluck("board_name", "id")->all();

        return view('admin.exams.create', ['title' => trans('admin.new_question'),'board_name'=>$board_name]);
    }

    /**
     * Store a newly created resource in storage.
     * z-
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamRequest $request)
    { 
        $request->validate([
            'title' => ['required'],
            'chapter_id' => ['required'],
            'subject_id' => ['required'],
            'class_id' => ['required'],
            'board_id' => ['required'],
        ],
            [
                'title.required' => __('The Exam Title field is required.'),
                'chapter_id.required' => __('The Chapter ID field is required.'),
                'subject_id.required' => __('The Subject ID field is required.'),
                'class_id.required' => __('The Class ID field is required.'),
                'board_id.required' => __('The Board ID field is required.'),
            ]);
        Exam::create($request->all());
        return redirect(aurl('exam'))->with('success', trans('admin.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return view('admin.exams.view', ['title' => trans('admin.exam_details'), 'exam' => $exam]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('admin.exams.edit', ['title' => trans('admin.edit_exam_page'), 'exam' => $exam]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExamRequest $request, Exam $exam)
    {
        $exam->update($request->all());
        return redirect(aurl('exam'))->with('success', trans('admin.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect(aurl('exam'))->with('success', trans('admin.delete_success'));
    }

    public function destroyAll()
    {
        if (!request('items')) {
            return redirect(aurl('exam'))->with('error', trans('admin.please_check_record_number'));
        }
        // destory : it Make the Delete based on the number of request items it received
        Exam::destroy(request('items'));
        return redirect(aurl('exam'))->with('success', trans('admin.delete_success'));
    }
    public function getChapterList(Request $request)
    {
        $subject_id = $request->get('subject_id');
        $chapterList = Chapter::where('subject_id', $subject_id)->pluck('chapter_name', 'id')->toArray();
        
        return view('admin.exams.get-Chapter-list', compact('chapterList'));
    }

}

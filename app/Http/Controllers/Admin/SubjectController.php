<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SubjectDatatable;
use App\Http\Controllers\Controller;
use App\Model\Classes;
use App\Model\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index(SubjectDatatable $subject)
    {

        return $subject->render('admin.subjects.index', ['title' => trans('admin.class-control')]);
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
        return view('admin.subjects.create', compact('board_name'));
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
            'subject_name' => ['required'],
            'class_id' => ['required'],
            'board_id' => ['required'],
        ],
            [
                'subject_name.required' => __('The Subject Name field is required.'),
                'class_id.required' => __('The Class ID field is required.'),
                'board_id.required' => __('The Board ID field is required.'),
            ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'Subject/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image = "$profileImage";
        }
        Subject::create([
            'class_id' => $request->class_id,
            'subject_name' => $request->subject_name,
            'image' => $image,
        ]);

        return redirect()->back()->with('success', __('Subject Add successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //echo "<pre>"; print_r($subject);die;
        return view('admin.subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'subject_name' => ['required'],
            'class_id' => ['required'],
            'board_id' => ['required'],
        ],
            [
                'subject_name.required' => __('The Subject Name field is required.'),
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

        $subject->update($input);

        return redirect()->back()->with('success', __('Subject Add successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $Subject)
    {
        $Subject->delete();
        return redirect(aurl('subject'))->with('success', trans('admin.delete_success'));
    }

    public function destroyAll()
    {
        if (!request('items')) {
            return redirect(aurl('subject'))->with('error', trans('admin.please_check_record_number'));
        }
        // destroy : it Make the Delete based on the number of request items it received
        Subject::destroy(request('items'));
        return redirect(aurl('subject'))->with('success', trans('admin.delete_success'));
    }

    public function getClassList(Request $request)
    {
        $board_id = $request->get('board_select');
        $classList = Classes::where('board_id', $board_id)->pluck('class_name', 'id')->toArray();
      
        return view('admin.subjects.get-class-list', compact('classList'));
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClassesDatatable;
use App\Http\Controllers\Controller;
use App\Model\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(ClassesDatatable $classes)
    {

        return $classes->render('admin.classes.index', ['title' => trans('admin.class-control')]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.classes.create', ['title' => trans('admin.new_user')]);
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
            'class_name' => ['required'],
            'board_id' => ['required'],
        ],
            [
                'class_name.required' => __('The Class Name field is required.'),
                'board_id.required' => __('The Board ID field is required.'),
            ]);
        if ($image = $request->file('image')) {
            $destinationPath = 'Class/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image = "$profileImage";
        }

        Classes::create([
            'board_id' => $request->board_id,
            'class_name' => $request->class_name,
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
    public function edit(Classes $class)
    {
        //  echo "<pre>"; print_r($classes);die;
        return view('admin.classes.edit', compact('class'));
        // return view('admin.classes.edit', ['title' => trans('admin.edit_admin_page'), 'class' => $classes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classes $classes)
    { 
        $request->validate([
        'class_name' => ['required'],
        'board_id' => ['required'],
    ],
        [
            'class_name.required' => __('The Class Name field is required.'),
            'board_id.required' => __('The Board ID field is required.'),
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'Class/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $classes->update($input);

        return redirect()->back()->with('success', __('Subject Add successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $classes)
    {
        $classes->delete();
        return redirect(aurl('class'))->with('success', trans('admin.delete_success'));
    }

    public function destroyAll()
    {
        if (!request('items')) {
            return redirect(aurl('classes'))->with('error', trans('admin.please_check_record_number'));
        }
        // destroy : it Make the Delete based on the number of request items it received
        Classes::destroy(request('items'));
        return redirect(aurl('class'))->with('success', trans('admin.delete_success'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Board;
use Illuminate\Http\Request;
use App\DataTables\BoardDatatable;


class BoardController extends Controller
{
    public function index(BoardDatatable $board)
    {

        return $board->render('admin.boards.index', ['title' => trans('admin.board-control')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.boards.create', ['title' => trans('admin.new_user')]);
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
            'board_name' => ['required'], 
        ],
        [
            'board_name.required' => __('The Board Name field is required.'),
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'Board/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image= "$profileImage";
        }
        Board::create([
            'board_name' => $request->board_name,
            'image' => $image, 
        ]);
        return redirect()->back()->with('success', __('Board Add successfully!'));
       
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
    public function edit(Board $board)
    {
        //echo "<pre>"; print_r($board);die;
        return view('admin.boards.edit', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Board $board)
    {
        $request->validate([
            'board_name' => ['required'], 
        ],
        [
            'board_name.required' => __('The Board Name field is required.'),
        ]);
        
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'Board/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        $board->update($input);
        return redirect()->back()->with('success', __('Board Add successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        $board->delete();
        return redirect(aurl('board'))->with('success', trans('admin.delete_success'));
    }

    public function destroyAll()
    {
        if (!request('items')) {
            return redirect(aurl('board'))->with('error', trans('admin.please_check_record_number'));
        }
        // destroy : it Make the Delete based on the number of request items it received
        Board::destroy(request('items'));
        return redirect(aurl('board'))->with('success', trans('admin.delete_success'));
    }
}

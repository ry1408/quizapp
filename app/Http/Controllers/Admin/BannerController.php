<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Banner;
use App\DataTables\BannerDatatable;
 

class BannerController extends Controller
{
    public function index(BannerDatatable $banner)
    {

        return $banner->render('admin.banners.index', ['title' => trans('admin.class-control')]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.banners.create', ['title' => trans('admin.new_user')]);
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
            'name' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('banner_image')) {
            $destinationPath = 'Banner/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner_image'] = "$profileImage";
        } 
        //echo "<pre>";print_r($input);die;

        Banner::create($input);

        return redirect()->back()->with('success', __('Banner Add successfully!'));
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
    public function edit(Banner $banner)
    {
        //echo "<pre>"; print_r($subject);die;
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Banner $banner)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required'
        // ]);

        $input = $request->all();

        if ($image = $request->file('banner_image')) {
            $destinationPath = 'Subject/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner_image'] = "$profileImage";
        } else {
            unset($input['banner_image']);
        }

        $banner->update($input);

        return redirect()->back()->with('success', __('Subject Add successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $Banner)
    {
        $Banner->delete();
        return redirect(aurl('banner'))->with('success', trans('admin.delete_success'));
    }

    public function destroyAll()
    {
        if (!request('items')) {
            return redirect(aurl('banner'))->with('error', trans('admin.please_check_record_number'));
        }
        // destroy : it Make the Delete based on the number of request items it received
        Banner::destroy(request('items'));
        return redirect(aurl('banner'))->with('success', trans('admin.delete_success'));
    }
}

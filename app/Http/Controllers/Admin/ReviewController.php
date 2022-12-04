<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ReviewDatatable;
use App\Model\Review;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ReviewDatatable $review)
    {

        return $review->render('admin.reviews.index', ['title' => trans('admin.class-control')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
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
            'name' => ['required'], 
            'position' => ['required'], 
            'number_of_star' => ['required'], 
            'subject' => ['required'], 
            'description' => ['required'],  
        ],
        [
            'board_name.required' => __('The Name field is required.'),
            'position.required' => __('The Position field is required.'),
            'number_of_star.required' => __('The Number of Star field is required.'),
            'subject.required' => __('The Subject field is required.'),
            'description.required' => __('The Description field is required.'),
           
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'Review/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image= "$profileImage";
        }
        Review::create([
            'name' => $request->name,
            'position' => $request->position,
            'number_of_star' => $request->number_of_star,
            'subject' => $request->subject,
            'description' => $request->description,
            'image' => $image, 
        ]);
        return redirect()->back()->with('success', __('Review Add successfully!'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name' => ['required'], 
            'position' => ['required'], 
            'number_of_star' => ['required'], 
            'subject' => ['required'], 
            'description' => ['required'],  
        ],
        [
            'board_name.required' => __('The Name field is required.'),
            'position.required' => __('The Position field is required.'),
            'number_of_star.required' => __('The Number of Star field is required.'),
            'subject.required' => __('The Subject field is required.'),
            'description.required' => __('The Description field is required.'),
           
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'Review/images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $review->update($input);

        return redirect()->back()->with('success', __('Review Update successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect(aurl('review'))->with('success', trans('admin.delete_success'));
    }
}

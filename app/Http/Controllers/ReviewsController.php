<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ReviewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $reviews =  Reviews::orderBy('created_at', 'desc')->get();
        return view('reviews.index', [
            'reviews' => $reviews
        ]);
    }

    public function indexAsc()
    {
        $reviews =  Reviews::orderBy('created_at', 'asc')->get();
        return view('reviews.index', [
            'reviews' => $reviews
        ]);
    }

    public function rateAsc($stars)
    {
        $reviews =  Reviews::where('rate', $stars)->orderBy('created_at', 'asc')->get();
        return view('reviews.index', [
            'reviews' => $reviews
        ]);
    }

    public function rateDesc($stars)
    {
        $reviews =  Reviews::where('rate', $stars)->orderBy('created_at', 'desc')->get();
        return view('reviews.index', [
            'reviews' => $reviews
        ]);
    }


    public function create()
    {
        return view('reviews.new');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'name' => 'bail|required',
            'rate' => 'bail|required',
            'content' => 'bail|required|max:500'
        ]);
        $review = new Reviews;
        if (!empty($request->fileName)) {
            $fileName = uniqid() . '.'. $request->fileName->extension();
            $request->fileName->move(public_path('uploads'), $fileName);
            $review->fileName = $fileName;
        }

        $review->email = $request->email;
        $review->name = $request->name;
        $review->rate = $request->rate;
        $review->content = $request->content;
        $review->save();
        return redirect()->route('reviews.index')->with('success', 'Votre commentaire à bien été transmis');
    }

    public function show($id)
    {
        $reviews =  Reviews::where('id', $id)->get();
        return view('reviews.show', [
            'reviews' => $reviews
        ]);
    }
}

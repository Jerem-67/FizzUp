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
        $reviews =  Reviews::get();
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
            'content' => 'bail|required|max:500'
        ]);
        dump($request->file('fileName'));
        dump($request->fileName->extension());
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
}

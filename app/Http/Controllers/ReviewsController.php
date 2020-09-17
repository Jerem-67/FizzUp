<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\Upload;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ReviewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $reviews =  Reviews::orderBy('created_at', 'desc')->get();
        $files = DB::table('uploads')->get();
        return view('reviews.index', [
            'reviews' => $reviews,
            'files' => $files
        ]);
    }

    public function indexAsc()
    {
        $reviews =  Reviews::orderBy('created_at', 'asc')->get();
        $files = DB::table('uploads')->get();

        return view('reviews.index', [
            'reviews' => $reviews,
            'files' => $files
        ]);
    }

    public function rateAsc($stars)
    {
        $reviews =  Reviews::where('rate', $stars)->orderBy('created_at', 'asc')->get();
        $files = DB::table('uploads')->get();

        return view('reviews.index', [
            'reviews' => $reviews,
            'files' => $files
        ]);
    }

    public function rateDesc($stars)
    {
        $reviews =  Reviews::where('rate', $stars)->orderBy('created_at', 'desc')->get();
        $files = DB::table('uploads')->get();

        return view('reviews.index', [
            'reviews' => $reviews,
            'files' => $files
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

        $review->email = $request->email;
        $review->name = $request->name;
        $review->rate = $request->rate;
        $review->content = $request->content;
        $review->save();

        if (!empty($request->uploads)) {
            foreach ($request->uploads as $fileUp) {
                $upload = new Upload;
                $fileName = uniqid() . '.'. $fileUp->extension();
                $fileUp->move(public_path('uploads'), $fileName);
                $upload->fileName = $fileName;
                $upload->reviews_id = $review->id;
                $upload->save();
            }
        }
        return redirect()->route('reviews.index')->with('success', 'Votre commentaire à bien été transmis');
    }

    public function show($id)
    {
        $reviews =  Reviews::where('id', $id)->get();
        $files = DB::table('uploads')->get();

        return view('reviews.show', [
            'reviews' => $reviews,
            'files' => $files

        ]);
    }
}

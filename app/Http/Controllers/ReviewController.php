<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $review = Review::select('reviews.*')
            ->orderBy('reviews.created_at', 'desc')
            ->paginate(10);
        $rev = DB::table('reviews')
            ->orderBy('reviews.created_at', 'desc')
            ->paginate(10);

        $count = DB::table('reviews')->count();
        if($count==0){
            return redirect()->route('review.create')->with('null', 'Отзывов не написано. Вы можете написать первый!!');

        }else{
            return view('review.index', compact('rev'));

        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $rev = new Review();

        $this->validate(
            $request, [
            'name' => 'required|min:2|max:20',
            'email' => 'required|min:5|max:100',
            'type' => 'required',
            'comment' => 'required|min:15|max:500'
        ]);

        if ($rev) {
            $rev->name = $request->input('name');
            $rev->email = $request->input('email');
            $l = $request->input('type')."  ".$request->input('comment');
            $rev->comment = $l;

            $rev->save();
            return redirect()->route('review.index')->with('success', 'Data Added');

        } else {
            return redirect()->route('review.create')->with('FAIL', 'There are some errors with writing data! Pls contact us');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

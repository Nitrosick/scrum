<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieAddRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.movieList');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_favourites()
    {
        $userID = null;

        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            $userID = Auth::user()->id;
        }

        $favouritesList = Movie::where('user_id', $userID)->paginate(20);

        return view('movies.favourites', [
            'favouritesList' => $favouritesList
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function remove_favourite($id)
    {
        Movie::find($id)->delete();

        return redirect()->route('favourites');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function movie_by_id($id)
    {
        return view('movies.movieItem', [
            'movieID' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\MovieAddRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieAddRequest $request)
    {
        $userID = Auth::user()->id;
        $data = $request->validated();
        $data['user_id'] = $userID;

        Movie::create($data);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

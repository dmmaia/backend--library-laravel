<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index(){
        return Genre::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request){
        Genre::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        return Genre::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
    }
}

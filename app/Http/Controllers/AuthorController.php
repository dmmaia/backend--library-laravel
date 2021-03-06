<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index(){
        return Author::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request){
        Author::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        return Author::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index(){
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request){
        Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        return Book::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
    }
}

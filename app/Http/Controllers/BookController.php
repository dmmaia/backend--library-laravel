<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index(){
        return DB::table('books')
        ->join('authors', 'authors.id', '=', 'books.author_id')
        ->join('publishing_companies', 'publishing_companies.id', '=', 'books.company_id')
        ->join('genres', 'genres.id', '=', 'books.genre_id')
        ->select('books.id','books.title', 'books.year', 'authors.name', 'publishing_companies.company_name','genres.genre_name')
        ->get();
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

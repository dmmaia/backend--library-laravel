<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        $total = Author::all()->count();
        return view('list-authors', compact('authors', 'total'));
    }

    public function store(Request $request){
        $author = new Author;
        $author->name = $request->name;
        $author->birth = $request->birth;
        $author->gender = $request->gender;
        $author->nationality = $request->nationality;
        $author->save();
    }
}

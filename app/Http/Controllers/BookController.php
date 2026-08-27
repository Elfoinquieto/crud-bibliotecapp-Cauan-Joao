<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function listBooks(){
        $books = Auth::user()->books;
        return view('books.index', ['books' => $books]);
    }
}

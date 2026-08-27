<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $latestBooks = Auth::user()->books()->latest()->take(4)->get();

        return view('home', [

            'latestBooks' => $latestBooks
        ]);
    }
}
        
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index(){
        $dbtab = Movie::all();

        return view('welcome', compact('dbtab'));
    }
}

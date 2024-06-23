<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        $title = "MediPlus Website";
        return view('home', compact('title'));
    }
}
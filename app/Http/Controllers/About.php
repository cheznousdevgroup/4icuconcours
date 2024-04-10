<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    //
    public function about1() {
        return view('abouts.about');
    }
}

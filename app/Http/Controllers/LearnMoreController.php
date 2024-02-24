<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnMoreController extends Controller
{
    public function __invoke()
    {
        return view('learnmore');
    }
}

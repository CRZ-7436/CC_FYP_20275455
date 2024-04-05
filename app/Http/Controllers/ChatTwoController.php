<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatTwoController extends Controller
{
    public function index()
    {
        return view('chatbots.chattwo');
    }
}

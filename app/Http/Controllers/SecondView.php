<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondView extends Controller
{
    function call_view() {
        return view('secondview');
    }
}

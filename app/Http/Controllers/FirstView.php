<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstView extends Controller
{
    function call_view() {
        return view('firstview');
    }
}

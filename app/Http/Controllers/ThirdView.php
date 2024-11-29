<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdView extends Controller
{
    function call_view() {
        return view('thirdview');
    }
}

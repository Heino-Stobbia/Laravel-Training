<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function open_Home_page() {
        $homeData = 'Welcome friendly new user';

        return view('Home', ['homeData' => $homeData]);
        
    }
}

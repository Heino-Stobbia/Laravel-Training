<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function open_about_page() {

        $aboutInfo = 'very detailed about us info';

        return view('About', ['aboutInfo' => $aboutInfo]);

        // Invoice::query()->truncate();
        // return view('invoices-create',['data'=>'Cleared table']);
        
    }
}

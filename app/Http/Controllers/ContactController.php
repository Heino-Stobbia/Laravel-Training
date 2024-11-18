<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function open_about_page() {
        return view('Contact');
    }

    public function create_contact_page() {

        $contactInfo = 'Call me on 0123456789';

        return view('Contact', ['data' => $contactInfo]);
    
    }
}

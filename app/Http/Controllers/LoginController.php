<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function open_invoices_view() {

        // $data = Invoice::all(); // Get data from database

        return view('invoices');
    }

    public function create_Login_page() {

        $Username = 'Username';
        $Password = 'Password';


        return view('Login', ['username' => $Username, 'Password' => $Password]);
        
    }
}

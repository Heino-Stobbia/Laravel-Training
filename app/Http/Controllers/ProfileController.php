<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create_invoice(Request $request) {
        $data = $request->all();
        
        Profile::create([
            'Invoice' => $data['Invoice'],
            'Prys' => $data['prys'],
            'Transaction' => $data['transaksie'],
        ]);
    }
}

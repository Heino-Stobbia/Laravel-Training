<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Invoice;
use App\Services\UserService;
use App\Middleware\setQueryString;

class UserController extends Controller
{

    public function index(UserService $UserService) {
        // return response()->json(User::all()->setQueryString());
        // return response()->json(User::all());
        
        // return response()->json(User::paginate(5));
        return response()->json($UserService->getPaginatedUsers());
        // return response()->json(User::paginate(5));
    }

    public function me()
    {
        return Auth::user();
    }

    public function userInvoices()
    {
        // return Auth::user()->invoices;
        return Invoice::all();
    }
}

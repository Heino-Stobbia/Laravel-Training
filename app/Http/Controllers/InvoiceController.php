<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function open_invoices_view() {

        // $data = Invoice::all(); // Get data from database

        return view('invoices');
    }

    public function create_invoices() {
        Invoice::create([
            'title' => 'Heino Stobbia',
        ]);

        $data = Invoice::all();

        return view('invoices-create', ['data' => $data]);

        // Invoice::query()->truncate();
        // return view('invoices-create',['data'=>'Cleared table']);
        
    }
}

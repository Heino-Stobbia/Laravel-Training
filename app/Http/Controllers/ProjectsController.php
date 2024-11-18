<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function open_invoices_view() {

        // $data = Invoice::all(); // Get data from database

        return view('invoices');
    }

    public function create_project_page() {
        $projects1 = 'Laravel Project';
        $projects2 = 'PHP Project';
        $projects3 = 'HTML Project';

        return view('Projects', ['projects1' => $projects1, 'projects2' => $projects2, 'projects3' => $projects3]);
        
    }
}

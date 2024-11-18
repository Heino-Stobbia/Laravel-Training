<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $name = 'Heino Stobbia';
    return view('users', ['name'=>$name]); // Send data to pages by sending it as an array
});

Route:: get('/Invoices', [InvoiceController::class, 'open_invoices_view']); // Better way of opening a view page
Route:: get('/Invoices-create', [InvoiceController::class, 'create_invoices']);

//===========================================================================
// Training
//===========================================================================

Route::get('/Home', [HomeController::class, 'open_home_page']);
Route::get('/About', [AboutController::class, 'open_about_page']);
Route::get('/Contact', [ContactController::class, 'create_contact_page']);
Route::get('/Login', [LoginController::class, 'create_Login_page']);
Route::get('/Projects', [ProjectsController::class, 'create_project_page']);
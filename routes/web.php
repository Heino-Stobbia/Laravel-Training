<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\FirstView; // controller
use App\Http\Controllers\SecondView; // controller
use App\Http\Controllers\ThirdView; // controller
use App\Http\Controllers\ProfileController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
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

Route::get('/FirstView', [FirstView::class, 'call_view']);
Route::get('/SecondView', [SecondView::class, 'call_view']);
Route::get('/ThirdView', [ThirdView::class, 'call_view']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::post('profile', [ProfileController::class, 'create_invoice']);

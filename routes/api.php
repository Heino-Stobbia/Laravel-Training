<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\QueryString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('Login', [AuthController::class, 'login']);

Route::post('Register', [AuthController::class, 'register']);

// Route::get('transaction', [transactionController::class ,'index'])->middleware(QueryString::class);
// Route::get('transaction', [transactionController::class ,'index'])->middleware('auth:sanctum');
// Route::post('transaction', [transactionController::class ,'store']);
// Route::get('transaction/{id}', [transactionController::class ,'getSingleRecord']);
// Route::put('transaction/{transaction}', [transactionController::class ,'updateRecord']);
// Route::delete('transaction/{transaction}', [transactionController::class ,'deleteRecord']);

Route::apiResource('transaction', transactionController::class)->middleware('auth:sanctum');
Route::get('invoices', [UserController::class, 'userInvoices']);
Route::get('users', [UserController::class, 'index']);
// Route::get('users/invoices', [UserController::class, 'userInvoices']);

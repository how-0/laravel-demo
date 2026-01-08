<?php

use Inertia\Inertia;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**Route::get('/', function () {
    return view('app', ['user' => "john doe"]);
});*/

Route::get('/', [AuthController::class, 'showLogin']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::get('/ticket/create', [TicketController::class, 'showCreate'])->name('ticket.create');
Route::post('/ticket/create', [TicketController::class, 'create']);
Route::delete('/ticket/{id}', [TicketController::class, 'delete'])->name('ticket.delete');
Route::get('/ticket/edit/{id}', [TicketController::class, 'showEdit'])->name('ticket.edit');
Route::put('/ticket/edit/{id}', [TicketController::class, 'update'])->name('ticket.update');
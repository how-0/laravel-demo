<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function showRegister()
    {
        return Inertia::render('register');
    }

    public function showLogin()
    {
        if (auth()->check()) {
            return to_route('ticket');
        }
        return Inertia::render('login');
    }

    
}


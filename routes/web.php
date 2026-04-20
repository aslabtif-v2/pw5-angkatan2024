<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/profile', function() {
    $user = User::first();
    return view('profile', compact('user'));
}); 

Route::get('/users/{$npm}', [UserController::class, 'show']);


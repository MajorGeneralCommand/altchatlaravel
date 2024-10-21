<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Models\Channel;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/public', function () {
    $channel = 1;
    $chats = Chat::where('channel_id', $channel)->get();
    return view('public', ['chats' => $chats, 'channel' => $channel]);
})->middleware(['auth', 'verified'])->name('public');

Route::post('/chat/store', [ChatController::class, 'store'])->name('chat.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

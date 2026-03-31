<?php

use App\Livewire\Chatbot;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/chat', Chatbot::class)->name('chatbot')->middleware(['auth']);

require __DIR__.'/settings.php';

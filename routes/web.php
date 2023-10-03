<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactsController;


Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/contact', [ContactsController::class, 'form'])->name('contact');
Route::post('/contact/cavecontact', [ContactsController::class, 'saveContact'])->name('contact.savecontact');

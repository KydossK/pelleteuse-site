<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPhotoController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\HomeController;




Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);


Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



Route::get('/admin/messages', [AdminMessageController::class, 'index'])->name('admin.messages.index');
Route::delete('/admin/messages/{message}', [App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin.messages.destroy');


Route::get('/admin/photos', [AdminPhotoController::class, 'index'])->name('admin.photos.index');
Route::post('/admin/photos', [AdminPhotoController::class, 'store'])->name('admin.photos.store');
Route::delete('/admin/photos/{photo}', [AdminPhotoController::class, 'destroy'])->name('admin.photos.destroy');

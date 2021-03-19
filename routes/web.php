<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;

Route::get('/', [IndexController::class, 'index']);

Route::get('menu', function(){
    $menu = DB::table('menu')->get();
    return view('menu', ['menu' => $menu]);
});
Route::get('contact', function(){
    $contact = DB::table('contact')->get();
    return view('contact', ['contact' => $contact]);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

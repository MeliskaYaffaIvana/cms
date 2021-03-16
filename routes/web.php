<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'home']);

Route::get('menu', function(){
    $menu = DB::table('menu')->get();
    return view('menu', ['menu' => $menu]);
});
Route::get('contact', function(){
    $contact = DB::table('contact')->get();
    return view('contact', ['contact' => $contact]);
});




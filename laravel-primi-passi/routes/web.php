<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/menu', function () {
    $data = 
    [
        "nome1" => "room404",
        "nome2" => "home"
    ];
    return view("menu.menu",$data);
})->name('menu');

Route::get('/home', function () {
    $data = [
        "nome2" => "menu"
    ];
    return view("home.home",$data);
})->name('home');



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

Route::get('/', function () {
    $comics_array = config('comics');

    $comics_data = [];

    foreach($comics_array as $comic) {
        $comics_data[] = $comic;
    }

    $data = [
        'comics' => $comics_data
    ];
    return view('home', $data);
});

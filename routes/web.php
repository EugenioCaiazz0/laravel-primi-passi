<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('home', ['biscotto'=>'Grissin Bon']);

})->name('Home');

Route::get('/booleaners', function() {

    $booleaners = [
        'motto' => 'Siamo la gvng',
        'marchio' => 'Booleaners'
    ];

    return view('booleaners', $booleaners);

})->name('Booleaners');

Route::get('/compact', function() {

    $stampa = 'stampa';
    $valori = 'valori';
    $compatti = 'compatti';

    return view('compact', compact('stampa', 'valori', 'compatti'));

})->name('Compact');


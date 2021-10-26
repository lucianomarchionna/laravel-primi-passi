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

    $data = [
        'languages' => [
            'ITALIANO = Ciao Mondo',
            'TEDESCO = Hallo Welt',
            'SPAGNOLO = Hola Mundo',
            'FRANCESE = Bonjour le monde',
            'GIAPPONESE = こんにちは世界'
        ] 
    ];

    return view('home', $data);
});

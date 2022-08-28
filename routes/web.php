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
    return view('welcome');
});

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about', [
        "Name" => "Irwan Pradana ",
        "Jurusan" => "Teknik Informatika",
        "NIM" => "20181",
        "image" => "okelah.jpeg",

        "Name1" => "Iqbal Gusti Firjatullah",
        "Jurusan1" => "Teknik Elektro",
        "NIM1" => "20191",
        "image1" => "iqbal.jpg",

        "Name2" => "Indra Yuanto",
        "Jurusan2" => "Tekni Industri",
        "NIM2" => "20201",
        "image2" => "indra.jpg",

        "Name3" => "Zydhan Usmar",
        "Jurusan3" => "Teknik Mesin",
        "NIM3" => "20211",
        "image3" => "zydhan.jpg",

        "Name4" => "Hanif Adhi Respati",
        "Jurusan4" => "Teknik Sipil",
        "NIM4" => "20221",
        "image4" => "hanif.jpg"
    ]);
});

Route::get('/blog', function(){
    return view('posts');
});

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

//Route::get('/', function () {
//   return view('welcome');
//});

//Route::get('/', function () {
//   return 'Halaman home';
//});

//Route::get('/about', function () {
//   return 'Halaman About';
//});

//Route::get('/gallery', function () {
//  return 'Halaman Gallery';
//});

Route::get('/', function () {
  return view('home', [
     "title" => "Home"
  ]);
});

Route::get('/about', function () {
   return view('about', [
      "title" => "About",
      "nama" => "Syafira Luthfi Masayu",
      "email" => "3103120214@student.smktelkom-pwt.sch.id",
      "gambar" => "images.jpeg"
   ]);
});

Route::get('/gallery', function () {
   return view('gallery', [
      "title" => "Gallery"
   ]);
});

Route::get('/contacts', function () {
   return view('contacts', [
      "title" => "Contacts"
   ]);
});




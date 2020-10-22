<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'artikelcontroller@home');

Route::get('/About', 'artikelcontroller@index');

Route::get('/daftarSantri', 'daftarController@index');

Route::get('/students', 'StudentController@index');

Route::get('/students/create', 'StudentController@create');

Route::get('/students/{student}', 'StudentController@show');

Route::post('/students', 'StudentController@store');

Route::delete('/students/{student}', 'StudentController@destroy');

Route::get('/students/{student}/edit', 'StudentController@edit');

Route::patch('/students/{student}', 'StudentController@update');

// Route::get('/Tools', function () {
    // $tools = "Sejarah Kelahiran Kakek Legend";
    // return view('tools/Artikel', ['title' => $tools]);
// });
// 
// Route::get('/App', function () {
    // $tools = "Aplikasi Shoppee Pink Untuk User";
    // return view('tools.aplikasi', ['aplikasi' => $tools]);
// });
// 
// Route::get('/Join', function () {
    // $tools = "Bergabunglah Untuk Menjadi Legenda";
    // return view('tools.join', ['join' => $tools]);
// });
// 
// Route::get('/kb', function(){
    // return view('tools.halaman');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

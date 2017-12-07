<?php

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

Route::resource('sisabisa', 'SabisaController');
Route::resource('pengunjung', 'PengunjungController', ['names' => ['index' => 'pengunjung.index']]);






// latihan simple blade template

Route::get('/', function() {
  return View::make('pages.home');
});
Route::get('about', function() {
  return View::make('pages.about');
});
Route::get('projects', function() {
  return View::make('pages.projects');
});
Route::get('contacts', function(){
  return View::make('pages.contacts');
});

Route::get('hello/{name}', function($name) {
    return 'Hi '.$name.'!';
});

// latihan lain

Route::get('test', function() {
    echo '<form method="POST" action="test">';
    echo '<input type="submit">';
    echo '<input type="hidden" value="PUT" name="_method">';
    echo '</form>';
});

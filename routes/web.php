<?php

use Illuminate\Support\Facades\App;
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

App::setlocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::resource('portfolio', 'ProjectController')
  ->parameters(['portfolio' => 'project'])
  ->names('projects');

// Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');

// Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');

// Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

// Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
// Route::get('/portfolio/{project}/delete', 'ProjectController@delete')->name('projects.delete');

Route::get('/portfolio/{project}/delete', 'ProjectController@delete')->name('projects.delete');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('messages.store');

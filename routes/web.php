<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
//Route::view('/portafolio', 'portafolio', compact('portafolio'))->name('portafolio');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('messages.store');

// Route::get('/portafolio','ProjectController@index')->name('projects.index');
// Route::post('/portafolio','ProjectController@store')->name('projects.store');

// Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');

// Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
// //Actualizar project
// Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');
// //Eliminar registro proyecto
// Route::delete('/portafolio/{project}','ProjectController@destroy')->name('projects.destroy');


// Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');

// //Route::resource('/projects','ProjectController')->name('portafolio');

Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);


Auth::routes(['register' => false]);


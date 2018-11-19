<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/viDatos', function(){
return view ('viDatos');
});

Route::get('/viDatos', function(){
    return view ('viDatos');
    });
    
    Auth::routes();

Route::resource('Users', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');



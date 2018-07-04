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





Route::middleware(['auth'])->group(function () {

    // Redirect URL= 'admin' ve trang chu
    Route::get('admin',function(){
        return redirect('/login');
    });

    Route::prefix('admin')->group(function () {
        Route::get('index','admin\indexController@index');
        
    });
    
});

//Index Page
Route::get('/','site\homeController@index');
Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

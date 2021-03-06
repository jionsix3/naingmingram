<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;

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
Route::get('/email',function(){
    return new NewUserWelcomeMail();
});

Auth::routes();

Route::get('/','PostsController@index');
Route::post('follow/{user}','FollowsController@store');

Route::get('/p/create', 'PostsController@create')->name('post.create');
Route::post('/p','PostsController@store');
Route::get('/p/{post}','PostsController@show');
Route::get('/profile/{user}/edit','ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}','ProfilesController@update')->name('profile.update');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

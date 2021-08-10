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

// Route::get('/', 'WelcomeController')->name('welcome.index');



Route::group(['namespace'=>'Dictation'], function(){
    Route::get('/', 'IndexController')->name('dict.index');
    Route::post('/dict', 'StoreController')->name('dict.store');
    Route::get('/userdict', 'ShowController')->name('dict.show');
    Route::get('/activedict', 'ActiveShowController')->name('dict.activeShow');
    
});

Route::group(['middleware'=>'guest'], function(){
    Route::get('/vk/auth', 'SocialController@index')->name('social.index');
    Route::get('/vk/auth/callback', 'SocialController@callback');
});



Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix'=>'admin', 'middleware' => 'admin'],function(){
    Route::group(['namespace' => 'Dictation'],function(){
        Route::post('/dictations', 'StoreController')->name('admin.dict.store');
        Route::get('/users', 'IndexController')->name('admin.dict.index');
        Route::get('/users/{user}', 'ShowController')->name('admin.user.show');
        Route::delete('/users/{user}', 'DestroyController')->name('admin.user.destroy');
        Route::get('/dictantions', 'DictantsIndexController')->name('admin.dictations.index');
        Route::get('/dictantions/{dict}', 'DictantsShowController')->name('admin.dictation.show');
        Route::get('/dictations/{dict}/edit', 'EditController')->name('admin.dict.edit');
        Route::patch('/dictations/{dict}', 'UpdateController')->name('admin.update');
        Route::get('/dictations/create', 'CreateController')->name('admin.dict.create');
        Route::get('/results', 'ResultIndexController')->name('admin.userDictations.index');
        Route::get('/results/{user}', 'ResultShowController')->name('admin.result.show');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

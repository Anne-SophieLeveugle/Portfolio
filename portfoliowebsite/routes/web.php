<?php

use Illuminate\Support\Facades\Auth;

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

//werken

Route::get('/home', function () {
    return view('content.index');
})->name('home');

Route::get('/about', function () {
    return view('content.about');
})->name('about');

Route::get('/contact', function () {
    return view('content.contact');
})->name('contact');

Route::get('/work', [
    'uses' => 'ItemController@getWork',
    'as' => 'work'
]);




//detail
Route::get('/detail/{id}', [
    'uses' => 'ItemController@getWorkById',
    'as' => 'detail'
]);


Route::get('/detail/{id}/like', [
    'uses' => 'ItemController@getLikeWork',
    'as' => 'worklike'
]);



//edit item route
/*Route::post('/itemedit', function(){
    return redirect()->route('admin.index');
})->name('itemedit');*/


Route:: post('itemCreate', [
   'uses' => 'ItemController@postCreateWork',
   'as' => 'itemCreate'
]);

Route:: post('adminupdate', [
    'uses' => 'AdminController@postUpdateWork',
    'as' => 'adminupdate'
]);





//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('index', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ])->middleware('auth');;

    Route::get('edit/{id}', [
        'uses' => 'AdminController@getEdit',
        'as' => 'admin.edit'
    ])->middleware('auth');;

    Route::get('create', [
        'uses' => 'AdminController@getCreate',
        'as' => 'admin.create'
    ])->middleware('auth');;
    Route::get('delete/{id}', [
        'uses' => 'AdminController@getDelete',
        'as' => 'admin.delete'
    ])->middleware('auth');;
    Route::get('deleteimage/{id}', [
        'uses' => 'AdminController@getDeleteImage',
        'as' => 'admin.delete.image'
    ])->middleware('auth');;

});


//Auth::routes();

//Route::get('/admin', 'ManagedController@index')->name('home');

Auth::routes();

Route::get('/managed', 'ManagedController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
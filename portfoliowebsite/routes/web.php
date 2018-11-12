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

//werken
Route::get('/', function () {
    return view('content.index');
})->name('home');

Route::get('/about', function () {
    return view('content.about');
})->name('about');

Route::get('/contact', function () {
    return view('content.contact');
})->name('contact');

Route::get('/detail', function () {
    return view('content.detail');
})->name('detail');

Route::get('/work', function () {
    return view('content.work');
})->name('work');

//detail
Route::get('/work/{id}', function ($id) {
    return view('content.detail', ['nieuweVariabele' => $id]);
})->name('detail');

//admin
Route::name('admin.')->group(function () {
    Route::get('/admincreate', function () {
        return view('admin.create');
    })->name('create');

    Route::get('/adminedit', function () {
        return view('admin.edit');
    })->name('edit');

    Route::get('/adminindex', function () {
        return view('admin.index');
    })->name('index');

});

//data naar server = post request

Route::group(['prefix' => 'admin'], function () {
    Route::get('', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);

    Route::get('edit', [
        'uses' => 'AdminController@getEdit',
        'as' => 'admin.edit'
    ]);

    Route::get('create', [
        'uses' => 'AdminController@getCreate',
        'as' => 'admin.create'
    ]);
});
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    /*
     * TODO:
     * Comprobar si el usuario que inició sesión es administrador o usuario normal,
     * en el caso que sea administrado redirige (desde el HomeController) a /admin,
     * en caso que no lo sea se va para /user.
    */
    return view('home');
});

Route::get('/admin', 'App\Http\Controllers\LibraryController@getAdminView')->middleware('is_admin');

Route::get('/admin/create', 'App\Http\Controllers\LibraryController@createAdminView');

Route::get('/admin/edit/{id?}', 'App\Http\Controllers\LibraryController@editAdminView');

Route::get('/user', 'App\Http\Controllers\LibraryController@getUserView');

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/addcontacts', [App\Http\Controllers\ContactsController::class, 'store'])->name('store_contact');
Route::get('/listcontacts', [App\Http\Controllers\ContactsController::class, 'show'])->name('show_contacts');
Route::post('/deletecontact', [App\Http\Controllers\ContactsController::class, 'remove'])->name('remove_contacts');
Route::post('/editcontact', [App\Http\Controllers\ContactsController::class, 'change'])->name('edit_contacts');

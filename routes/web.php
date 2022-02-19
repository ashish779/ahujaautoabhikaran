<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Contactcont;
use App\Http\Controllers\BookserviceController;

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
    return view('index');
});
Route::get('index',function()
{
    return view('index');
})->name('index');
Route::get('insurance',function()
{
    return view('insurance');
});
Route::get('offers',function()
{
    return view('offers');
});
Route::get('onlinepayement',function()
{
    return view('onlinepayement');
});
Route::get('AboutUS',function()
{
    return view('AboutUS');
});
Route::get('ContactUS',function()
{
    return view('ContactUS');
});
Route::get('Roadside',function()
{
    return view('Roadside');
});
Route::post('Contactcont',[Contactcont::class,'insert1']);
Route::post('BookserviceController',[BookserviceController::class,'insert2']);



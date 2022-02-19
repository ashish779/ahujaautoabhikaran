<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('index', function () {
    return view('index');
});

Route::get('insurance', function () {
    return view('insurance');
});

Route::get('offers', function () {
    return view('offers');
});

Route::get('make-online-payment', function () {
    return view('make-online-payment');
});

Route::get('who-we-are', function () {
    return view('who-we-are');
});

Route::get('locate-us', function () {
    return view('locate-us');
});

Route::get('road-side-assistance', function () {
    return view('road-side-assistance');
});

Route::get('Imprints', function () {
    return view('Imprints');
});



Route::any('submitServiceAppointment', [PagesController::class,'submitServiceAppointment']);
Route::any('submitEnquiry',[PagesController::class,'submitEnquiry']);
Route::any('submitInsurance',[PagesController::class,'submitInsurance']);
Route::any('submitEnquiry',[PagesController::class,'submitEnquiry']);
Route::any('submitEnquiry',[PagesController::class,'submitEnquiry']);
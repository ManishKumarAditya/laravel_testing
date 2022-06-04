<?php

use App\Http\Controllers\RecordController;
use App\Models\Record;
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
    return view('homepage.index');
})->name('index');

Route::get('/record', [RecordController::class, 'fetch'])->name('record');

Route::post('/form-insert', [RecordController::class, 'store'])->middleware('CheckArea')->name('form');

Route::get('/send_otp', function (){
    return view('otpsend');

})->name('send_otp');

Route::post('/sendOTP', [RecordController::class, 'sendotp'])->name('sendOTP');

Route::view('/welcome', 'welcome')->name('welcome');
Route::view('/noaccess', 'noaccesspage')->name('noaccesspage');


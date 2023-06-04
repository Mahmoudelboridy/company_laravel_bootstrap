<?php

use App\Http\Controllers\authcontroller;
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

Route::get('/',[authcontroller::class,'index']);


Route::get('/kkk', function () {
    return view('welcome');
})->middleware('nowlogin');
Route::get('login_kkk',[authcontroller::class,'login'])->middleware('nowlogin');
Route::post('/login_KKK',[authcontroller::class,'log_in'])->name('login');

Route::get('/admin',[authController::class,'admin'])->middleware('checklogin');
Route::get('/navbar',[authController::class,'navbar'])->middleware('checklogin')->name('navbar');
Route::post('navbar',[authController::class,'nav_logo'])->middleware('checklogin')->name('nav_logo');
Route::get('/head',[authController::class,'head'])->middleware('checklogin')->name('head');
Route::post('head',[authController::class,'he_ad'])->middleware('checklogin')->name('he_ad');
Route::get('/about',[authController::class,'about'])->middleware('checklogin')->name('about');
Route::post('about',[authController::class,'abo_ut'])->middleware('checklogin')->name('abo_ut');
Route::get('/services',[authController::class,'services'])->middleware('checklogin')->name('services');
Route::post('services',[authController::class,'ser_vices'])->middleware('checklogin')->name('ser_vices');
Route::get('/roayt',[authController::class,'roayt'])->middleware('checklogin')->name('roayt');
Route::post('roayt',[authController::class,'ro_ayt'])->middleware('checklogin')->name('ro_ayt');
Route::get('/sabka',[authController::class,'sabka'])->middleware('checklogin')->name('sabka');
Route::post('sabka',[authController::class,'sab_ka'])->middleware('checklogin')->name('sab_ka');
Route::get('/sabka_all',[authController::class,'sabka_all'])->middleware('checklogin')->name('sabka_all');
Route::post('/delete/{id}', [authController::class, 'delete'])->name('delete');
Route::get('/shahda',[authController::class,'shahda'])->middleware('checklogin')->name('shahda');
Route::post('shahda',[authController::class,'sha_hda'])->middleware('checklogin')->name('sha_hda');
Route::get('/shahda_all',[authController::class,'shahda_all'])->middleware('checklogin')->name('shahda_all');
Route::post('/deleteon/{id}', [authController::class, 'deleteon'])->name('deleteon');
Route::post('get',[authController::class,'get'])->middleware('checklogin')->name('get');
Route::post('search',[authController::class,'search'])->middleware('checklogin')->name('search');
Route::post('senr',[authController::class,'senr'])->name('senr');
Route::get('/contact',[authController::class,'contact'])->middleware('checklogin')->name('contact');
Route::post('contact',[authController::class,'cont_act'])->middleware('checklogin')->name('cont_act');

Route::get('/logout',[authController::class,'logout']);
<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/superadmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superadmin')->middleware('superadmin');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/accounts', [App\Http\Controllers\AcountsController::class, 'index'])->name('accounts')->middleware('accounts');
Route::get('/sports', [App\Http\Controllers\SportsController::class, 'index'])->name('sports')->middleware('sports');
Route::get('/library', [App\Http\Controllers\LibraryController::class, 'index'])->name('library')->middleware('library');
Route::get('/csehod', [App\Http\Controllers\CseHodController::class, 'index'])->name('csehod')->middleware('csehod');
Route::get('/ecehod', [App\Http\Controllers\EceHodController::class, 'index'])->name('ecehod')->middleware('ecehod');
Route::get('/eeehod', [App\Http\Controllers\EeeHodController::class, 'index'])->name('eeehod')->middleware('eeehod');
Route::get('/mehod', [App\Http\Controllers\MeHodController::class, 'index'])->name('mehod')->middleware('mehod');
Route::get('/cehod', [App\Http\Controllers\CeHodController::class, 'index'])->name('cehod')->middleware('cehod');
Route::get('/ithod', [App\Http\Controllers\ItHodController::class, 'index'])->name('ithod')->middleware('ithod');
Route::get('/cselab', [App\Http\Controllers\CseLabController::class, 'index'])->name('cselab')->middleware('cselab');
Route::get('/ecelab', [App\Http\Controllers\EceLabController::class, 'index'])->name('ecelab')->middleware('ecelab');
Route::get('/eeelab', [App\Http\Controllers\EeeLabController::class, 'index'])->name('eeelab')->middleware('eeelab');
Route::get('/melab', [App\Http\Controllers\MeLabController::class, 'index'])->name('melab')->middleware('melab');
Route::get('/celab', [App\Http\Controllers\CeLabController::class, 'index'])->name('celab')->middleware('celab');
Route::get('/itlab', [App\Http\Controllers\ItLabController::class, 'index'])->name('itlab')->middleware('itlab');
Route::get('/fehod', [App\Http\Controllers\FeHodController::class, 'index'])->name('fehod')->middleware('fehod');
Route::get('/felab', [App\Http\Controllers\FeLabController::class, 'index'])->name('felab')->middleware('felab');


Route::get('/usermanagement',[App\Http\Controllers\SuperAdminController::class,'usermanagement'])->name('usermanagement')->middleware('superadmin');














Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student')->middleware('student');



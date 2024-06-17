<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', [App\Http\Controllers\DataController::class,'page_home']);
 
Route::post('/set1', [App\Http\Controllers\DataController::class,'insert_1']);
Route::post('/up1', [App\Http\Controllers\DataController::class,'update_1']);
Route::get('/de1', [App\Http\Controllers\DataController::class,'de_1']);
Route::post('/de2', [App\Http\Controllers\DataController::class,'de_1']);

//Route::resource('posts', [App\Http\Controllers\DataController::class,'insert_1']);

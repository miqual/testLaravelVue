<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinglePageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//  Route::get('/{any}', [SinglePageController::class, 'index']);
// Route::get('/{any}', 'App\Http\Controllers\SinglePageController@index')->where('any', '.*');
Route::get('/index', 'App\Http\Controllers\SinglePageController@index')->where('any', '.*');
Route::get('/demo', 'App\Http\Controllers\SinglePageController@demo')->where('any', '.*');
//Route::get('/hello', 'App\Http\Controllers\SinglePageController@hello');
Route::get('/hello', 'App\Http\Controllers\SinglePageController@hello')->where('any', '.*');
// Route::get('/hello', function () {
//     return view('hello', ['name' => 'James11']);
// });
// Route::get("/hello", function(){
//     return View::make("Hello");
//  });
// Route::get('/hello', 'App\Http\Controllers\SinglePageController@hello')->where('any', '.*');
// Route::get('/', function () {
//     return view('hello');
// });

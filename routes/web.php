<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiCall;

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
Route::get("/",[apiCall::class,"topHeadlines"]);
Route::get("/search",[apiCall::class,"search"]);
Route::get("/customSearch",[apiCall::class,"countryCode"]);
// Route::view("/",'home');


Route::get("/{generalTopic}",[apiCall::class,"search"]);
// Route::get("/Crypto",[apiCall::class,"generalTopic"]);



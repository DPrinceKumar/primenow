<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiCall;
use App\Http\Controllers\userAuth;

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

// login 
Route::get('/login', function () {
    if (session()->has('user')) 
    {
        return redirect('/topheadline');
    }
    return view('login');
});

Route::post('/login',[userAuth::class,'Login']);

Route::get("/topheadline",[apiCall::class,"topHeadlines"]);
Route::get("/search",[apiCall::class,"search"]);
Route::get("/customSearch",[apiCall::class,"countryCode"]);
Route::get("/q/{generalTopic}",[apiCall::class,"search"]); 

    
// // logout 
Route::get('/logout', function () {
    if (session()->has('user')) 
    {
        session()->pull('user');
    }
    return view('login');
});


Route::view("/signup",'signup');
Route::post("/register",[userAuth::class,'signup']);

<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Usercontroller;

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
    return view('hello');
});
Route::get('/logout', function () {
    if(session()->has("username"))
    {
        session()->pull("username",null);
    }
    return redirect("login");
});
Route::get('/login', function () {
    if(session()->has("username"))
    {
       return redirect('profile');
    }
    return view("login");
});
Route::get('user',[Usercontroller::class,'loadview']);
Route::post('getdata',[Usercontroller::class,'getdata']);
Route::view('users','users');
Route::view('about','about');
Route::view('home','home')->middleware("protectedPage"); 
Route::view('form','form');
Route::view('noaccess','noaccess');
Route::view('reg','registration');
//  Route::view('login','login');
Route::view('profile','profile');
Route::view('upload','imageupload');
Route::view('insert','insert');
// Route::group(['middleware'=>['protectedPage']],function(){
//     Route::view('home','home'); 
// });
Route::get("fetch",[Usercontroller::class,"fetch"]);
Route::get("get",[Usercontroller::class,"get"]);
Route::get("api",[Usercontroller::class,"httpapi"]);
// Route::get("fetchdata",[Usercontroller::class,"httpapi"]);
Route::post("registration",[Usercontroller::class,"registration"]);
Route::post("logincode",[Usercontroller::class,"logincode"]);
Route::post("upload",[Usercontroller::class,"upload"]);
Route::post("insertcode",[Usercontroller::class,"insert"]);
Route::get("fetchdata",[Usercontroller::class,"fetchdata"]);
Route::get("edit/{id}",[Usercontroller::class,"showdata"]);
Route::post("edit",[Usercontroller::class,"update"]);
Route::get("deletedata/{id}",[Usercontroller::class,"delete"]);
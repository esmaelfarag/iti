<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\User;

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




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    return view('dashboard');
})->name('dashboard');

Route::get('/allbooks','App\Http\Controllers\BookController@getAllBooks');
Route::get('/borrowBooks','App\Http\Controllers\BookController@borrowedBook');
Route::get('/borrowBooks/{bookid}','App\Http\Controllers\BookController@borrowBook');
Route::get('/rebook/{bookid}','App\Http\Controllers\BookController@rebook');





/////////////////////////////////////////////////////////

///////********** Authentication For Admins ********************//////
Route::prefix('admin')->group(function() {
    Route::get('/login', 'App\Http\Controllers\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'App\Http\Controllers\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin.dashboard');
  });

  Route::get('/logout','App\Http\Controllers\AdminController@logout');
////////**************************************************************************** */
///////********** All Pages And Function For Admins ********************//////
  Route::get('/allbook','App\Http\Controllers\AdminController@allbook');
  Route::get('/deletebook/{bookid}','App\Http\Controllers\AdminController@delete');
  Route::get('/editpage/{bookid}','App\Http\Controllers\AdminController@editbook');
  Route::put('/editbook/{bookid}','App\Http\Controllers\AdminController@update');
  Route::post('/add','App\Http\Controllers\AdminController@addbook');
  Route::get('/addbook',function(){
      return view('admins.addbook');
  });
  Route::get('/borrowedbook','App\Http\Controllers\AdminController@st_bb');
  Route::get('/get/{usrid}','App\Http\Controllers\AdminController@getinfo');
  Route::get('/getusr','App\Http\Controllers\AdminController@getalluser');
  Route::get('/dash','App\Http\Controllers\AdminController@welcomeAdmin');
  Route::get('/adprofile','App\Http\Controllers\AdminController@adprofile');
  Route::put('/edprof','App\Http\Controllers\AdminController@edprof');
////********************************************************************* */
Route::get('/returndate',function()
{
  return view('users.returndate');
});
///////**********  We Are Admins ********************//////




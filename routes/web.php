<?php

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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('home');
});//guest page

Route::get('/home', function () {
    return view('auth.home');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Route::get('/lend',function(){
// 	return view('lend');
// });

Route::get('/lend','BooksController@lendBook');//siapa yg bikin ini?
Route::post('/save','BooksController@addBook');


Route::get('/search','BooksController@show');

// Route::get('/viewbook',function(){
	// return view('viewbook');
// });

Route::get('/viewbook/{isbn}', 'BooksController@show_detail');
	// return view('viewbook');
// });


Route::post('/coba',function(){
	return view('coba');
});

// For testing newfeature
// Route::post('/beta', );


/*
Route::get('/borrow',function(){
	return view('borrow');
});
*/

//prototypw
Auth::routes();

Route::GET('admin/home','AdminController@index');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm');

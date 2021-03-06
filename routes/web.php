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

// Route::get('/search','SearchController@index');
Route::get('/lend','BooksController@lendBook');//siapa yg bikin ini?
Route::post('/save','BooksController@addBook');

Route::get('/dum/{id}', 'TransaksiController@back');

Route::post('/store','BooksController@dummy');//dummy


Route::get('/search','BooksController@show');
Route::post('/search_book','SearchController@search');
Route::post('/post/{id}','BooksController@AddComment');
Route::post('/report/{book_id}', 'BooksController@report');
Route::get('/viewbook/{id}/edit','BooksController@update')->name('editbook');
Route::post('/viewbook/{id}/edit/save','BooksController@edit');


Route::get('/viewbook/{id}', 'BooksController@show_detail')->name('viewbook');
Route::get('/profile/','UserController@show')->name('profile');
Route::get('/profile/{id}','UserController@showother');
Route::get('/profile/{id}/edit','UserController@edit')->name('editprofile');
Route::post('/profile/edit/save','UserController@edit_profile');

// For testing newfeature
// Route::post('/beta', );


/*
Route::get('/borrow',function(){
	return view('borrow');
});
*/
//main function

Route::get('/request/{id}','TransaksiController@borrow');
Route::get('/accept/{id}','TransaksiController@lend');
Route::get('/reject/{id}','TransaksiController@reject');
Route::get('/return/{id}','TransaksiController@back');

// messaging function
// Route::get('/messages/{id}','MessagesController@retrieve');
Route::get('/messages','MessagesController@show')->name('messages');
Route::post('/messages/send','MessagesController@send');
// Route::get('/send_messages','MessagesController@send');

// admin functionality
Route::GET('admin/home','AdminController@index');
Route::GET('admin/control','AdminController@list_report');
Route::GET('admin/book','AdminController@list_book');
Route::GET('admin/ban_user/{id}','AdminController@ban_user');
Route::GET('admin/ban_book/{id}','AdminController@ban_book');
Route::GET('admin/accept_report/{report_id}','AdminController@accept_report');
Route::GET('admin/reject_report/{report_id}','AdminController@reject_report');
Route::GET('admin/detail_report/{report_id}','AdminController@detail_report');

//view Admin Report
Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('admin/search', function () {
    return view('admin.search');
});

// Route::get('admin/book', function () {
//     return view('admin.book');
// });


//prototypw
Auth::routes();

Route::GET('admin/home','AdminController@index');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm');

// 10 Mei 2018



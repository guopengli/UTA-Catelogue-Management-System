<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
// auth
Route::get('/register', 'authController@getregister')->name('register');
Route::post('/register', 'authController@storeregister');
Route::get('/login', 'authController@getlogin')->name('login');
Route::post('/login', 'authController@logincheck');
// admin
Route::get('/adminhome', 'adminController@getadminhome')->name('adminhome');
Route::get('/adminadd', 'adminController@getadminadd')->name('adminadd');
Route::post('/adminadd', 'adminController@storeadminadd')->name('storeadminadd');
Route::get('/adminedit/{id}', 'adminController@getadminedit')->name('adminedit');
Route::post('/adminedit/{id}', 'adminController@storeadminedit')->name('storeadminedit');
Route::get('/admindelete/{id}', 'adminController@destroy')->name('admindelete');
// staff
Route::get('/staffhome/{id}', 'staffController@getstaffhome')->name('staffhome');
Route::get('/staffadd/{id}', 'staffController@getstaffadd')->name('staffadd');
Route::post('/staffadd/{id}', 'staffController@storestaffadd')->name('storestaffadd');
Route::get('/staffview/{id}', 'staffController@getstaffview')->name('staffview');
Route::get('/staffviewu/{id}', 'staffController@getstaffviewu')->name('staffviewu');
Route::get('/staffedit/{id}/{courseid}', 'staffController@getstaffedit')->name('staffedit');
Route::post('/staffedit/{id}/{courseid}', 'staffController@storestaffedit')->name('storestaffedit');
Route::get('/staffdelete/{id}/{courseid}', 'staffController@destroy')->name('staffdelete');
Route::get('/staffviewfeedback/{id}/', 'staffController@getstaffviewfeedback')->name('staffviewfeedback');
Route::get('/staffchat/{id}', 'staffController@staffchat');
// student
Route::get('/studenthome/{id}', 'studentController@getstudenthome')->name('studenthome');
Route::get('/studentlist/{id}', 'studentController@getstudentlist')->name('studentlist');
Route::get('/studentfeedback/{id}', 'studentController@getstudentfeedback')->name('studentfeedback');
Route::post('/studentfeedback/{id}', 'studentController@storestudentfeedback')->name('storestudentfeedback');
Route::get('/studentrequest/{id}', 'studentController@getstudentrequest')->name('studentrequest');
Route::post('/studentrequest/{id}', 'studentController@storestudentrequest')->name('storestudentrequest');
Route::get('/studentchat/{id}', 'studentController@studentchat')->name('studentchat');

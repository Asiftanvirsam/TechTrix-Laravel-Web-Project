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

/*Route::get('/', function () {
    return view('welcome');
});*/

 Route::get('/','WelcomeController@index');
 Route::get('/contact','WelcomeController@contact');
 Route::get('/register-course/{id}','WelcomeController@register_course');
 Route::get('/courses','WelcomeController@courses');




  Auth::routes();
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/checkout','WelcomeController@checkout');
  Route::get('/return','WelcomeController@payment');
  Route::post('/search','WelcomeController@search');



  // admin
 
   Route::get('/course','CourseController@index');
   Route::get('/add-course','CourseController@add_course');
   Route::get('/co-delete_{id}','CourseController@delete_course');
   Route::post('/save-course','CourseController@save_course');


   //order

   Route::get('/registration-list','RegistrationController@registration');


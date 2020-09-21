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

 /* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/', 'PagesController@index')-> name('index');
Route::get('/blog', 'PagesController@blog')-> name('blog');
Route::get('/about', 'PagesController@about')-> name('about');
Route::get('/category', 'PagesController@category')-> name('category');
Route::get('/client_applicant', 'PagesController@client_apply')-> name('client-applicants');
Route::get('/client_dashboard', 'PagesController@client_dash')-> name('client-dashboard');
Route::get('/client_job', 'PagesController@client_job')-> name('client-job');
Route::get('/client_register', 'PagesController@client_register')-> name('client-register');
//Route::get('/contacts', 'PagesController@contacts')-> name('contact');
Route::get('/details', 'PagesController@detail')-> name('details');
Route::get('/packages', 'PagesController@package')-> name('packages');
Route::get('/posts', 'PagesController@post')-> name('posts');
Route::get('/testimonials', 'PagesController@testimonial')-> name('testimonials');
Route::get('/texts', 'PagesController@text')-> name('text');
Route::get('/flaq', 'PagesController@flaq')-> name('flaq');
// Route::get('show/{id}', 'PagesController@show')-> name('show');


/* categories and its related activities */
// Route::get('/categories/create', 'CategoryController@create')-> name('categories');
// Route::get('/categories/listed', 'CategoryController@index')-> name('categories_list');
// this handled by the ADMIN

Route::resource('categories', 'CategoryController');
Route::resource('jobtypes', 'JobtypeController');
Route::resource('jobtags', 'TagsController');
Route::resource('jobs', 'JobController');

Route::resource('contact', 'ContactController');


// this is handled by the USER
Route::resource('applicants', 'ApplicationController');

//this is the posts route
Route::resource('post', 'PostController');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-user')->group(function(){
	Route::resource('/users', 'UserController',['except'=>['show', 'create', 'store']]);

});







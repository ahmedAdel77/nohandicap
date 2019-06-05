<?php
// use Symfony\Component\Routing\Route;
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

Route::get('/', 'ProductsController@index')->name('home');
Route::get('/products', 'ProductsController@filter');

Route::resource('products', 'ProductsController');
Route::resource('users', 'UsersController');
Route::post('/users', 'UsersController@makeAdmin');

Route::resource('categories', 'CategoriesController');
Route::resource('conditions', 'ConditionsController');
Route::resource('reports', 'ReportsController');

Route::resource('admin', 'AdminController');
Route::get('/admin/showUsers', 'AdminController@showUsers');

Route::resource('profile', 'ProfileController');

Auth::routes();

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('/dashboard', 'DashboardController@index');

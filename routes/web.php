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
Route::group(['middleware' => 'admin'], function () {
    Route::post('users/{user}/ban', 'UsersController@ban');
});

Route::get('/', 'ProductsController@index')->name('home');
Route::get('/products/filter', 'ProductsController@filter');
Route::middleware('throttle:60,1')->group(function () {
    Route::post('products/{product}/report', 'ProductsController@report');

});
Route::resource('products', 'ProductsController');

Route::post('/users', 'UsersController@revoke');
Route::resource('users', 'UsersController');
Route::post('/users', 'UsersController@makeAdmin');

Route::resource('categories', 'CategoriesController');
Route::resource('conditions', 'ConditionsController');
Route::resource('reports', 'ReportsController');

Route::resource('admin', 'AdminController');
Route::get('/admin/showUsers', 'AdminController@showUsers');

Route::resource('profile', 'ProfileController');

Auth::routes();

Route::get('home', [
    'uses' => 'ProfileController@index',
    'middleware' => 'forbid-banned-user',
]);

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/pages/about', 'PagesController@about');
Route::get('/pages/safety', 'PagesController@safety');



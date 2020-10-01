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

Route::get('/', "App\Http\Controllers\HomeController@index");

// Admin Route
Route::get('/admin/login','App\Http\Controllers\AdminController@login')->name('login');
Route::post('/admin/insert','App\Http\Controllers\AdminController@insert')->name('insert');
Route::get('/admin/dashboard','App\Http\Controllers\AdminController@index')->name('dashboard');
Route::get('/admin/user','App\Http\Controllers\AdminController@user')->name('user');
Route::get('/admin/edit/{id}','App\Http\Controllers\AdminController@edit')->name('admin/edit');
Route::get('/admin/delete/{id}','App\Http\Controllers\AdminController@delete')->name('admin/delete');
Route::post('/admin/add','App\Http\Controllers\AdminController@add')->name('admin/add');


// Admin Setting
Route::get('/admin/setting','App\Http\Controllers\SettingController@index')->name('admin/setting');
Route::post('/admin/update','App\Http\Controllers\SettingController@update')->name('admin/update');


// Admin Profile
Route::get('/admin/profile','App\Http\Controllers\ProfileController@index')->name('admin/profile');
Route::post('/admin/Pupdate','App\Http\Controllers\ProfileController@update')->name('admin/Pupdate');

// Admin Category
Route::get('/admin/category','App\Http\Controllers\CategoryController@index')->name('admin/category');
Route::post('/admin/Ccreate','App\Http\Controllers\CategoryController@create')->name('admin/Ccreate');
Route::post('/admin/Cupdate','App\Http\Controllers\CategoryController@update')->name('admin/Cupdate');
Route::get('/admin/Cdelete/{id}','App\Http\Controllers\CategoryController@delete')->name('admin/Cdelete');
Route::get('/admin/Cedit/{id}','App\Http\Controllers\CategoryController@edit')->name('admin/Cedit');

// Admin Portfolio
Route::get('/admin/portfolio','App\Http\Controllers\PortfolioController@index')->name('admin/portfolio');
Route::post('/admin/Portfoliocreate','App\Http\Controllers\PortfolioController@create')->name('admin/Portfoliocreate');
Route::post('/admin/Portfolioupdate','App\Http\Controllers\PortfolioController@update')->name('admin/Portfolioupdate');
Route::get('/admin/Portfoliodelete/{id}','App\Http\Controllers\PortfolioController@delete')->name('admin/Portfoliodelete');
Route::get('/admin/Portfolioedit/{id}','App\Http\Controllers\PortfolioController@edit')->name('admin/Portfolioedit');

// Admin About
Route::get('/admin/about','App\Http\Controllers\AboutController@index')->name('admin/about');
Route::post('/admin/Aboutupdate','App\Http\Controllers\AboutController@update')->name('admin/Aboutupdate');


// Admin Work
Route::get('/admin/work','App\Http\Controllers\WorkController@index')->name('admin/work');
Route::post('/admin/Workcreate','App\Http\Controllers\WorkController@create')->name('admin/Workcreate');
Route::post('/admin/Workupdate','App\Http\Controllers\WorkController@update')->name('admin/Workupdate');
Route::get('/admin/Workdelete/{id}','App\Http\Controllers\WorkController@delete')->name('admin/Workdelete');
Route::get('/admin/Workedit/{id}','App\Http\Controllers\WorkController@edit')->name('admin/Workedit');


// Admin Education
Route::get('/admin/education','App\Http\Controllers\EducationController@index')->name('admin/education');
Route::post('/admin/Educationcreate','App\Http\Controllers\EducationController@create')->name('admin/Educationcreate');
Route::post('/admin/Educationupdate','App\Http\Controllers\EducationController@update')->name('admin/Educationupdate');
Route::get('/admin/Educationdelete/{id}','App\Http\Controllers\EducationController@delete')->name('admin/Educationdelete');
Route::get('/admin/Educationedit/{id}','App\Http\Controllers\EducationController@edit')->name('admin/Educationedit');

// Admin Project
Route::get('/admin/project','App\Http\Controllers\ProjectController@index')->name('admin/project');
Route::post('/admin/Projectcreate','App\Http\Controllers\ProjectController@create')->name('admin/Projectcreate');
Route::post('/admin/Projectupdate','App\Http\Controllers\ProjectController@update')->name('admin/Projectupdate');
Route::get('/admin/Projectdelete/{id}','App\Http\Controllers\ProjectController@delete')->name('admin/Projectdelete');
Route::get('/admin/Projectedit/{id}','App\Http\Controllers\ProjectController@edit')->name('admin/Projectedit');

// Admin SEO
Route::get('/admin/seo','App\Http\Controllers\SeoController@index')->name('admin/seo');
Route::post('/admin/Seocreate','App\Http\Controllers\SeoController@create')->name('admin/Seocreate');
Route::post('/admin/Seoupdate','App\Http\Controllers\SeoController@update')->name('admin/Seoupdate');
Route::get('/admin/Seodelete/{id}','App\Http\Controllers\SeoController@delete')->name('admin/Seodelete');
Route::get('/admin/Seoedit/{id}','App\Http\Controllers\SeoController@edit')->name('admin/Seoedit');
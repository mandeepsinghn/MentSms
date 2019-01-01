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
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::controller('users', 'UserController');

Route::get('/branches', 'BranchController@index');
Route::delete('/branches/destroy','BranchController@destroy');
Route::post('/branches/store','BranchController@store');

Route::get('/categories', 'CategoryController@index')->name('listCategories');
Route::delete('/categories/destroy','CategoryController@destroy')->name('deleteCategory');
Route::post('/categories/store', 'CategoryController@store')->name('saveCategory');

Route::get('/education-mediums', 'EducationMediumController@index')->name('listMediums');
Route::delete('/education-mediums/destroy','EducationMediumController@destroy')->name('deleteMedium');
Route::post('/education-mediums/store', 'EducationMediumController@store')->name('saveMedium');

Route::get('/fee-types', 'FeeTypesController@index')->name('listFeeTypes');
Route::delete('/fee-types/destroy','FeeTypesController@destroy')->name('deleteFeeType');
Route::post('/fee-types/store', 'FeeTypesController@store')->name('saveFeeType');

Route::get('/fee-set', 'FeeSetController@index')->name('listFeeSet');
Route::delete('/fee-set/destroy','FeeSetController@destroy')->name('deleteFeeSet');
Route::post('/fee-set/store', 'FeeSetController@store')->name('saveFeeSet');

Route::get('/fee-set-attribute', 'FeeSetAttributeController@index')->name('listFeeAttribute');
Route::delete('/fee-set-attribute/destroy','FeeSetAttributeController@destroy')->name('deleteFeeAttribute');
Route::post('/fee-set-attribute/store', 'FeeSetAttributeController@store')->name('saveFeeAttribute');

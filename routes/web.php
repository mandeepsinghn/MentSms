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
Route::get('/categories/destroy/{id}','CategoryController@destroy')->name('deleteCategory');
Route::post('/categories/store', 'CategoryController@store')->name('saveCategory');

Route::get('/education-streams', 'EducationStreamController@index')->name('listStreams');
Route::get('/education-streams/destroy/{id}','EducationStreamController@destroy')->name('deleteStream');
Route::post('/education-streams/store', 'EducationStreamController@store')->name('saveStream');

Route::get('/education-mediums', 'EducationMediumController@index')->name('listMediums');
Route::get('/education-mediums/destroy/{id}','EducationMediumController@destroy')->name('deleteMedium');
Route::post('/education-mediums/store', 'EducationMediumController@store')->name('saveMedium');

Route::get('/subjects', 'SubjectController@index')->name('listSubjects');
Route::get('/subjects/destroy/{id}','SubjectController@destroy')->name('deleteSubject');
Route::post('/subjects/store', 'SubjectController@store')->name('saveSubject');

Route::get('/standards', 'StandardController@index')->name('listStandards');
Route::get('/standards/destroy/{id}','StandardController@destroy')->name('deleteStandard');
Route::post('/standards/store', 'StandardController@store')->name('saveStandard');

Route::get('/fee-types', 'FeeTypesController@index')->name('listFeeTypes');
Route::delete('/fee-types/destroy','FeeTypesController@destroy')->name('deleteFeeType');
Route::post('/fee-types/store', 'FeeTypesController@store')->name('saveFeeType');

Route::get('/fee-set', 'FeeSetController@index')->name('listFeeSet');
Route::delete('/fee-set/destroy','FeeSetController@destroy')->name('deleteFeeSet');
Route::post('/fee-set/store', 'FeeSetController@store')->name('saveFeeSet');

Route::get('/fee-set-attribute', 'FeeSetAttributeController@index')->name('listFeeAttribute');
Route::delete('/fee-set-attribute/destroy','FeeSetAttributeController@destroy')->name('deleteFeeAttribute');
Route::post('/fee-set-attribute/store', 'FeeSetAttributeController@store')->name('saveFeeAttribute');

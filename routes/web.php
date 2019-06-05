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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function(){

    Route::get('layouts.dashboard', function () {
        return view('layouts.dashboard');
    });

});

Auth::routes();

Route::resource('/employee','EmployeeController');
Route::resource('/location','AssetsLocationController');
Route::resource('/assetsItems','AssetsItemController');
Route::resource('/coa','ChartOfAccountController');
Route::resource('/coacat','ChartOfAccountsCartegoryController');
Route::resource('/appreciation','AppreciationCategoryController');
Route::resource('/depreciation','DepreciationCategoryController');

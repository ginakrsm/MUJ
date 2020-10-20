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
Route::get('/login-user', 'Admin\AuthController@page')->name('admin.login.page');
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login-user', 'Admin\AuthController@page')->name('admin.login.page');
Route::post('/login-user', 'Admin\AuthController@loginUser')->name('admin.login.submit');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
//Admin
Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/ambulance', 'Admin\\AmbulanceController');
Route::resource('admin/order', 'Admin\\OrderController');
Route::get('admin/order/{id}/invoice', 'Admin\OrderController@invoice');
Route::get('admin/order/{id}/detail', 'Admin\OrderDetailController@index');
Route::get('admin/order/{id}/detail/create', 'Admin\OrderDetailController@create');
Route::post('admin/order/{id}/detail/store', 'Admin\OrderDetailController@store');
Route::get('admin/order/{id}/detail/edit', 'Admin\OrderDetailController@edit');
Route::post('admin/order/{id}/detail/update', 'Admin\OrderDetailController@update');
Route::resource('admin/order-detail', 'Admin\\OrderDetailController');
Route::resource('admin/customer', 'Admin\\CustomerController');
Route::resource('admin/bank-account', 'Admin\\BankAccountController');
Route::resource('admin/company', 'Admin\\CompanyController');
Route::resource('admin/medical-equipment', 'Admin\\MedicalEquipmentController');

//Owner
Route::get('owner', 'Owner\OwnerController@index');
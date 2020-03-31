<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');
    Route::delete('bills/destroy', 'BillController@massDestroy')->name('bills.massDestroy');
    Route::resource('bills', 'BillController');

    Route::resource('billdetails', 'BillDetailsController');
    Route::delete('billdetails/destroy', 'BillDetailsController@massDestroy')->name('billdetails.massDestroy');

    Route::resource('billitems', 'BillItemsController');
    Route::delete('billitems/destroy', 'BillItemsController@massDestroy')->name('billitems.massDestroy');
    
});

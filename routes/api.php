<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|-------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API Routes working 
Route::post('register', 'AuthController@register');             //registers a new user whether admin or not
// Route::post('login', 'AuthController@login');                   //logs in a user whether admin or not
Route::post('refresh', 'AuthController@refresh');

Route::group([
    'middleware' => ['jwt'],
], function ($router) {
    
    Route::post('me', 'AuthController@me');
    Route::post('payload', 'AuthController@payload');
    
    Route::apiResource('user', 'UserController');
    Route::put('updateadmin/{id}', 'UserController@makeuserasadmin');
    Route::get('showadmin','UserController@showadmin');
    Route::apiResource('category', 'CategoryController');
    Route::apiResource('manufacturer', 'ManufacturerController');
    Route::apiResource('voucher','VoucherController');

    
    Route::apiResource('address','AddressController');
    Route::apiResource('notification', 'NotificationController');
    Route::get('getContact', 'NotificationController@getContact');  //used by admin to get all contact forms
    Route::delete('removeContact/{id}', 'NotificationController@removeContact');   //admin deletes a contact form
    Route::apiResource('order', 'OrderController');
    Route::apiResource('settings','WebSettingController');
    Route::apiResource('categoryimages','CategoryImagesController');
    Route::apiResource('customers', 'CustomerController');
    Route::apiResource('agents','AgentController');

});

Route::post('subscribe', 'NotificationController@subscribe');   //subscribe newsletter
Route::post('contact', 'NotificationController@contact');       //conatact us form
Route::post('callback', 'NotificationController@callback');     // save callback request from user 

Route::post('product/{id}/cart','OrderController@addtoCart');   //adds a product to cart "adds it to orders table"
Route::get('product/{id}/cart', 'OrderController@addtoCart');   //displays
Route::apiResource('product','ProductController');
Route::apiResource('subcategory','SubCategoryController');
Route::apiResource('review','ReviewController');






//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// not used APIS
// Route::get('admin/product','AdminController@index');//display all products to admin
// Route::get('admin/{id}','AdminController@show');//display specific productsCategories to admin
// Route::post('admin/create','AdminController@store');//add items by admin
// Route::delete('admin/{id}/{idProduct}','AdminController@destroy');//delete specific products by admin
// Route::get('admin/{id}/{idProduct}/edit','AdminController@edit');//display item to edit
// Route::Patch('admin/{id}/{idProduct}','AdminController@update');//update specific products by admin

// Route::get('products','ProductController@index');
// Route::get('products/{id}','ProductController@show');
// // Route::get('userprofile','UserController@index');
// //Route::get('userprofile/{id}','UserController@show');
// Route::apiResource('userprofile','UserController')->only(['index']);
// Route::apiResource('userprofile','UserController')->only(['show']);
// //Route::apiResource('useredit','UserController')->only(['update']);
// Route::patch('useredit/{id}','UsersController@update');
// // Route::post('/users','UsersController@store');
// Route::post('admin/add','AdminController@store');
// Route::get('products/{id}/{specific}','ProductController@getDescriptionSpecificProduct');

// Route::group(['middleware' => ['auth.jwt']], function() {
// Route::get('products','ProductController@index');
// Route::get('products/{id}','ProductController@show');
// });
// Route::group(['middleware' => ['jwt.auth']], function() {
//     Route::get('products','ProductController@index');
//     Route::get('products/{id}','ProductController@show');
// });
// Route::group(['middleware' => ['admin']], function () {
//     Route::get('products', 'ProductController@index');
//     Route::get('products/{id}','ProductController@show');
// });
 // Route::post('logout', 'AuthController@logout');     



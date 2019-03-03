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
    return view('pages.index');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=> '/'],function(){
    Route::get('/Trangchu','PageController@getHome')->name('Trangchu');
    Route::get('/Laptop','PageController@getLaptops')->name('laptop');
    Route::get('/Phones','PageController@getPhone')->name('phone');
    Route::get('/PhuKien','PageController@getPhuKien')->name('phukien');
    Route::get('/Cameras','PageController@getCamera')->name('camera');
    Route::get('/Store','PageController@getStore')->name('store');
    Route::get('/Checkout','PageController@getCheckout')->name('Checkout');
    Route::get('/Products','PageController@getProduct')->name('product');
});
Route::group(['prefix'=> '/'],function(){
    Route::get('/admin','AdminController@Admin')->name('dashboard');
    Route::get('/Setting','AdminController@Setting')->name('Setting');
    //Products
    Route::get('/product','ProductsController@getProducts')->name('product/list');
    Route::get('/product/add','ProductsController@requestProductAdd')->name('product/add');
    Route::post('/product/add','ProductsController@AddProduct')->name('product/add');
    Route::get('/product/edit/{id}','ProductsController@requestProductEdit')->name('product/edit');
    Route::post('/product/edit/{id}','ProductsController@update')->name('product/edit');
    Route::get('product/delete/{id}','ProductsController@destroy')->name('product/delete');
    //Product Details
    Route::get('/product/details/{id}','ProductDetailsController@ProductDetails')->name('product/details');
    Route::get('/details/edit','ProductDetailsController@ProductDetailsEdit')->name('details/edit');
    Route::get('/details/add/{id}','ProductDetailsController@ProductDetailsAdd')->name('details/add');
    //Product Images
    Route::get('/product/images','ProductsController@ProductImages')->name('product/images');
    Route::get('/images/edit','ProductsController@ProductImagesEdit')->name('images/edit');
    Route::get('/images/add','ProductsController@ProductImagesAdd')->name('images/add');
    //
    Route::get('user/list','UsersController@getUser')->name('user/list');
    Route::get('user/add','AdminController@userAdd')->name('user/add');
    Route::get('user/edit','AdminController@userEdit')->name('user/edit');
  /*  Route::get('login','AdminController@login')->name('/login');*/
    Route::get('/login','LoginController@getLogin')->name('login');
    Route::post('/admin','LoginController@postLogin')->name('admin');
    Route::get('Register','LoginController@getRegister')->name('register');
    //Categories
    Route::get('categories/add','CategoriesController@categoriesAdd')->name('categories/add');
    Route::get('categories/list','CategoriesController@getCategories')->name('categories/list');

});
Route::get('test', function () {
    return view('admin.product_images.list');
});

Route::get('test1', function () {
    return view('admin.product_images.add');
});
/*Route::get('store', function () {
    return view('pages.store');
});
Route::get('product', function () {
    return view('pages.product');
});
Route::get('laptops', function () {
    return view('pages.laptops');
});
Route::get('Checkout', function () {
    return view('pages.Checkout');
});
Route::get('phones', function () {
    return view('pages.phones');
});
Route::get('cameras', function () {
    return view('pages.cameras');
});
Route::get('phukien', function () {
    return view('pages.phukien');
});
Route::group(['namespace'=> 'pages'],function(){});*/
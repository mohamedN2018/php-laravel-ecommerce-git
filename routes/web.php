<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/


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

//Route::get('/', function () {
//    return redirect()->route('store');
//});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/store', 'HomeController@store')->name('store');

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/', 'ProductController@showWelcome')->name('welcome');

Route::get('/', 'HomeController@procart')->name('procart');
Route::get('/', 'HomeController@proslider')->name('proslider');


//< nav >

Route::get('/navone', 'HomeController@navone')->name('layouts.navone');
Route::get('/navtow', 'HomeController@navtow')->name('navtow');
Route::post('/navtow', 'HomeController@navthree')->name('navtow');

Route::get('/navthree', 'HomeController@navthree')->name('navthree');
Route::get('/nav4', 'HomeController@nav4')->name('nav4');

//end nav

// product

Route::get('/products', 'ProductController@index')->name('product.index');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.remove');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');

// end product


// product 2

Route::get('/long1', 'HomeController@long1')->name('lan-4.long-1');
Route::get('/long2', 'HomeController@long2')->name('lan-4.long-2');
Route::get('/long3', 'HomeController@long3')->name('lan-4.long-3');

// end product 2

// profile-data
Route::get('/dashboard', 'HomeController@dashboard')->name('profile-data.dashboard');
Route::get('/dashfile', 'HomeController@dashfile')->name('profile-data.dashfile');

// end profile-data



Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('cart.add');

Route::get('/shopping-cart', 'ProductController@showCart')->name('cart.show');


Route::get('{id}','ProductController@show')->name('cart.showShopping');


//contact
//Route::get('/', 'HomeController@contact')->name('contact');
//end contact

Route::get('/chat', 'HomeController@chat')->name('chat');


Route::get('/checkout/{amount}', 'ProductController@checkout')->name('cart.checkout')->middleware('auth');

Route::post('/charge', 'ProductController@charge')->name('cart.charge');

Route::get('/Order', 'OrderController@index')->name('home');

Route::post('/getstatus', 'GetApplicationStatusController@getStatus');



//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});

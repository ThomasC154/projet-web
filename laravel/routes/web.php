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

Auth::routes();

Route::get('/', function () {
    return view('bde', array("truc" => true));
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/events', function () {
    return view('events.index');
});


// Route::get('/cart', function () {
//     return view('cart');
// });

Route::get('/cart/{id}', [
    'uses' => 'ArticleController@getAddToCart',
    'as' => 'article.addToCart'
    ]);

Route::get('/shopping-cart', [
    'uses' => 'ArticleController@getCart',
    'as' => 'article.shoppingCart'
    ]);

Route::get('/admin', function () {
    return view('admin');
});

Route::resource('shop', 'ArticleController');

Route::resource('create', 'ArticleController');

Route::resource('events', 'EventController');

Route::post('','ParticipatesController@store', function ($id) {
    return App\Flight::findOrFail($id);});

Route::get('/create', 'ArticleController@store');

Route::post('/create', 'ArticleController@store');

Route::get('/delete/{id}', 'ArticleController@delete');


Route::get('/legal', function () {
    return view('legal');
});
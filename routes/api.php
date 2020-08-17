<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');
// Route::post('login', 'UserController@authenticate');

// Route::get('cors', 'UserController@test_cors');

// Route::get('cors', array('middleware' => 'cors', 'uses' => 'UserController@test_cors'));

Route::group(['middleware' => ['jwt.verify']], function() {
    /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
  /*   Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate'); */
    Route::post('test', 'UserController@test_token');
});

Route::group(['middleware' => ['cors']], function () {

  //Rutas a las que se permitirá acceso
  Route::get('cors', 'UserController@test_cors');
  Route::post('login', 'UserController@authenticate');

});
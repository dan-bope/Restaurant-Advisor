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

//Registers

Route::post('/register', [\App\Http\Controllers\UserController::class, 'inscription']);
Route::get('/users', [\App\Http\Controllers\UserController::class, 'liste_user']);
Route::post('/auth', [\App\Http\Controllers\authenficationController::class, 's_authentifier']);

//Restaurants

Route::get('/restaurants', [\App\Http\Controllers\RestaurantController::class, 'getAll']);
Route::get('/restaurants/{id}', [\App\Http\Controllers\RestaurantController::class, 'getByID']);
Route::post('/restaurants', [\App\Http\Controllers\RestaurantController::class, 'create']);
Route::put('/restaurant/{id}', [\App\Http\Controllers\RestaurantController::class, 'mis_a_jour']);
Route::delete('/restaurant/{id}', [\App\Http\Controllers\RestaurantController::class, 'supprime']);

//Menus
Route::get('/menus', [\App\Http\Controllers\MenuController::class, 'getAll']);
Route::get('/menus/{id}', [\App\Http\Controllers\MenuController::class, 'getByID']);
Route::get('/restaurants/{id}/menus', [\App\Http\Controllers\MenuController::class, 'menus_restaurant']);
Route::post('/restaurants/{id}/menus', [\App\Http\Controllers\MenuController::class, 'create_menu']);
Route::put('/menus/{id}', [\App\Http\Controllers\MenuController::class, 'menu_a_jour']);
Route::delete('/menus/{id}', [\App\Http\Controllers\MenuController::class, 'supprime_menu']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

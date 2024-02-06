<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfectioneryShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[ConfectioneryShopController::class, 'index']);
Route::get('/about',[ConfectioneryShopController::class, 'about']);
Route::get('/contact',[ConfectioneryShopController::class, 'contact']);
Route::get('/product',[ConfectioneryShopController::class, 'product']);
Route::get('/service',[ConfectioneryShopController::class, 'service']);
Route::get('/team',[ConfectioneryShopController::class, 'team']);
Route::get('/testimonial',[ConfectioneryShopController::class, 'testimonial']);



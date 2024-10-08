<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/products', ProductController::class)->names([
    'create' => 'products.create',
    'edit' => 'product.edot',
    'index' => 'product.index',
    'layouts' => 'product.layout',
    'show' => 'product.show',
]);
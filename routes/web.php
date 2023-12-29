<?php


use App\Http\Controllers\JavaScriptController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUsingWeb3;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
]);

Route::get('/ourproducts', [HomeController::class, 'storePage'])->name('store');

Route::get('/userprofile', [UserController::class, 'showUser'])->name('userprofile');

Route::get('/home', [UserController::class, 'showWelcomePage'])->name('home');

Route::get('public/images/{$filename}', 'ImageController@showImage')->name('image.show');

Route::get('/login',[UserController::class, 'login'])->name('login');

Route::post('/login',[UserController::class, 'loginPost'])->name('login.post');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register',[UserController::class, 'registerPost'])->name('register.post');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/js/connect.js', [JavaScriptController::class, 'connectJs']);
Route::get('/js/scripts.js', [JavaScriptController::class, 'scriptsJs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/web3-login-message', [App\Http\Controllers\Web3LoginController::class, 'message']);
Route::post('/web3-login-verify', [App\Http\Controllers\Web3LoginController::class, 'verify']);

Route::post('login-web3', [App\Http\Controllers\LoginUsingWeb3::class]);

Route::get('/products/create' , [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::get('/products/show' , [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/purchase', [App\Http\Controllers\ProductController::class, 'showPurchaseSuccess'])->name('purchase');

 
Route::post('/users/create', [App\Http\Controllers\RoleController::class, 'create' ,])->name('create');
Route::post('/users/edit', [App\Http\Controllers\RoleController::class, 'edit' ,])->name('edit');
Route::get('/users/show', [App\Http\Controllers\RoleController::class, 'show' ,])->name('show');
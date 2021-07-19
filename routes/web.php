<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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
Route::get('/logout', function () {
    \Auth::logout();

     return redirect('/');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/adminlog', function () {
    Session :: forget('user');
    return view('adminLogin');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/addproduct', function () {
    return view('/admin/addProduct');
});
Route::post('/login', [UserController::class,'login'])->name('login');
Route::post('/adminLogin', [AdminController::class,'adminLogin'])->name('adminlogin');
Route::post('/register', [UserController::class,'register'])->name('register');
Route::get('/', [ProductController::class,'index'])->name('home');
Route::get('detail/{id}', [ProductController::class,'detail'])->name('details');
Route::get('search', [ProductController::class,'search'])->name('search');
Route::post('addToCart', [ProductController::class,'addToCart'])->name('addtocart');
Route::get('cartList', [ProductController::class,'cartList'])->name('cartlist');
Route::get('removeItem/{id}', [ProductController::class,'removeItem'])->name('removeitem');
Route::get('orderNow', [ProductController::class,'orderNow'])->name('ordernow');
Route::post('orderPlace', [ProductController::class,'orderPlace'])->name('orderplace');
Route::get('myOrders', [ProductController::class,'myOrders'])->name('myOrders');
Route::get('/adminDashboard', [AdminController::class,'dashboard'])->name('adminDashboard');
Route::post('/admin/addproducts', [AdminController::class,'addproducts'])->name('addproducts');



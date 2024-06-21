<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserRegistationController;
use App\Http\Controllers\User\UserDashBoardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegistationController;
use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\JewelleryController;
use App\Http\Controllers\AboutController;
use App\Http\Middleware\ClearCookies;

route::get('/',[HomeController::class,'home'])->name('home');
route::get('wishlist',[WishlistController::class,'wishlist'])->name('wishlist');
route::get('cart',[CartController::class,'cart'])->name('cart');
route::get('jewellery/anklets',[JewelleryController::class,'anklets'])->name('anklets');
route::get('jewellery/rings',[JewelleryController::class,'rings'])->name('rings');
route::get('jewellery/earRings',[JewelleryController::class,'earRings'])->name('earRings');
route::get('jewellery/bangles',[JewelleryController::class,'bangles'])->name('bangles');
route::get('jewellery/necklace',[JewelleryController::class,'necklace'])->name('necklace');
route::get('about',[AboutController::class,'about'])->name('about');
route::get('contact',[AboutController::class,'contact'])->name('contact');

route::get('category',[CategoryController::class,'category'])->name('category');
route::get('addCategory',[CategoryController::class,'addCategory'])->name('addCategory');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
route::get('deleteCategory/{id}',[CategoryController::class,'deleteCategory'])->name('deleteCategory');
route::get('editCategory/{id}',[CategoryController::class,'editCategory'])->name('editCategory');
route::post('updateCategory/{id}',[CategoryController::class,'updateCategory'])->name('updateCategory');




// Admin Authentication Routes
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login')->middleware('clear_cookies');;
Route::post('/admin/check', [AdminLoginController::class, 'admincheck'])->name('admin.check');
Route::get('/admin/register', [AdminRegistationController::class, 'create'])->name('admin.register');
Route::post('/admin/register', [AdminRegistationController::class, 'store'])->name('admin.store');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashBoardController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout')->middleware('clear_cookies');
     
});
Route::post('logout', [LoginController::class, 'logout'])->middleware('clear.session.cookies')->name('logout');
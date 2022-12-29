<?php

use App\Http\Livewire\User\CheckOut;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\User\HomePageController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\User\HomePageController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\User\ProductController::class, 'products'])->name('products');
Route::post('/products/set_keyword', [App\Http\Controllers\User\ProductController::class, 'set_keyword'])->name('products.search');
Route::get('/product/{id}', [App\Http\Controllers\User\ProductController::class, 'detail'])->name('products.detail');
Route::get('/care', [App\Http\Controllers\User\CareController::class, 'care'])->name('home.care');
Route::get('/contact', [App\Http\Controllers\User\ContactController::class, 'contact'])->name('home.contact');
Route::get('/about_us', [App\Http\Controllers\User\AboutUsController::class, 'about_us'])->name('home.about_us');
Route::get('/delivery_policy', [App\Http\Controllers\User\DeliveryPolicyController::class, 'delivery_policy'])->name('home.delivery_policy');
Route::get('/change_password', [App\Http\Controllers\User\ChangePasswordController::class, 'changePassword'])->name('home.changePassword');
Route::post('/change_password', [App\Http\Controllers\User\ChangePasswordController::class, 'updatePassword'])->name('changePassword');

Route::middleware(['auth'])->group(function()
{
    Route::get('/cart', [App\Http\Controllers\User\CartController::class, 'cart'])->name('cart');
    Route::get('/profile', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('index');
    Route::post('/profile/update', [App\Http\Controllers\User\ProfileController::class, 'update'])->name('update');
    Route::get('/checkout', [App\Http\Controllers\User\CheckoutController::class, 'index'])->name('index');
    Route::get('/orders', [App\Http\Controllers\User\OrderController::class, 'index'])->name('index');
    Route::get('/orders/{id}', [App\Http\Controllers\User\OrderController::class, 'detail'])->name('order');
});


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('orderQuantityByYear/{year}', [App\Http\Controllers\Admin\DashboardController::class, 'orderQuantityByYear'])->name('orderQuantityByYear');
    Route::get('turnoverByYear/{year}', [App\Http\Controllers\Admin\DashboardController::class, 'turnoverByYear'])->name('turnoverByYear');

    
    //Slider
    Route::get('slider', [App\Http\Controllers\Admin\SliderController::class, 'index']);
    Route::get('slider/create', [App\Http\Controllers\Admin\SliderController::class, 'create']);
    Route::post('slider/store', [App\Http\Controllers\Admin\SliderController::class, 'store']);
    Route::get('slider/{id}/edit', [App\Http\Controllers\Admin\SliderController::class, 'edit']);
    Route::put('slider/{id}/update', [App\Http\Controllers\Admin\SliderController::class, 'update']);



    // Category
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('category/{id}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('category/{id}/update', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    // Route::patch('category/{id}/delete', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);

    //Material
    Route::get('material', [App\Http\Controllers\Admin\MaterialController::class, 'index']);
    Route::get('material/create', [App\Http\Controllers\Admin\MaterialController::class, 'create']);
    Route::post('material/store', [App\Http\Controllers\Admin\MaterialController::class, 'store']);
    Route::get('material/{id}/edit', [App\Http\Controllers\Admin\MaterialController::class, 'edit']);
    Route::put('material/{id}/update', [App\Http\Controllers\Admin\MaterialController::class, 'update']);
    // Route::patch('material/{id}/delete', [App\Http\Controllers\Admin\MaterialController::class, 'delete']);

    // Product
    Route::get('product', [App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('product/create', [App\Http\Controllers\Admin\ProductController::class, 'create']);
    Route::post('product/store', [App\Http\Controllers\Admin\ProductController::class, 'store']);
    Route::get('product/{id}/edit', [App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::put('product/{id}/update', [App\Http\Controllers\Admin\ProductController::class, 'update']);
    // Route::patch('product/{id}/delete', [App\Http\Controllers\Admin\ProductController::class, 'delete']);
    Route::get('product_images/{image_id}/delete', [App\Http\Controllers\Admin\ProductController::class, 'deleteImage']);
    Route::post('product-color/{product_color_id}', [App\Http\Controllers\Admin\ProductController::class, 'updateProductColorQuantity']);
    Route::get('product-color/{product_color_id}/delete', [App\Http\Controllers\Admin\ProductController::class, 'deleteProductColorQuantity']);

    //Color
    Route::get('color', [App\Http\Controllers\Admin\ColorController::class, 'index']);
    Route::get('color/create', [App\Http\Controllers\Admin\ColorController::class, 'create']);
    Route::post('color/store', [App\Http\Controllers\Admin\ColorController::class, 'store']);
    Route::get('color/{id}/edit', [App\Http\Controllers\Admin\ColorController::class, 'edit']);
    Route::put('color/{id}/update', [App\Http\Controllers\Admin\ColorController::class, 'update']);

    // Orders
    Route::get('orders', [App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('orders/{id}', [App\Http\Controllers\Admin\OrderController::class, 'detail']);
    Route::get('orders/{id}/print', [App\Http\Controllers\Admin\OrderController::class, 'print']);
    Route::get('orders/{id}/sendMail', [App\Http\Controllers\Admin\OrderController::class, 'sendMail']);

    // customer
    Route::get('customers', [App\Http\Controllers\Admin\CustomerController::class, 'index']);

});

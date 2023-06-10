<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ecommerce\CartController;
use App\Http\Controllers\Ecommerce\OrderController;
use App\Http\Controllers\Ecommerce\ProductController;
use App\Http\Controllers\Ecommerce\PayPalController;
use App\Http\Controllers\Ecommerce\WishlistController;
use App\Http\Controllers\Repair\TypeDeviceController;
use App\Http\Controllers\Repair\BrandDeviceController;
use App\Http\Controllers\Repair\FailureDeviceController;
use App\Http\Controllers\Repair\ModelBrandController;
use App\Http\Controllers\Repair\SheduleStoreController;
use App\Http\Controllers\Repair\StoreDeviceController;

use App\Http\Controllers\Selling\QuestionStepSellingController;
use App\Http\Controllers\Selling\SellDeviceController;
use App\Http\Controllers\Selling\StepSellingController;
use App\Models\Ecommerce\OrderItem;
use Illuminate\Support\Facades\Session;


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

Route::get('/', function () {
    dd(Session::get('filter'));
    return view('layouts.app');
})->name('home');


//Route ressource
Route::resource('typedevices', TypeDeviceController::class);
Route::resource('brands', BrandDeviceController::class);
Route::resource('models', ModelBrandController::class);
Route::resource('failures', FailureDeviceController::class);
Route::resource('stores', StoreDeviceController::class);
Route::resource('schedules', SheduleStoreController::class);

Route::resource('sells', SellDeviceController::class);
Route::resource('stepsellings', StepSellingController::class);
Route::resource('questionsteps', QuestionStepSellingController::class);

Route::resource('products', ProductController::class);
Route::resource('carts', CartController::class);
Route::resource('orders', OrderController::class);
Route::resource('wishlists', WishlistController::class);
Route::post('update_quantity_product_cart', [CartController::class, 'updateQuantityProductCart'])->name('update.quantity.product.cart');
Route::post('delete_product_side_cart', [CartController::class, 'deleteProductSideCart'])->name('delete.product.side.cart');

Route::post('update_failure_quotedata', [FailureDeviceController::class, 'updateFailureQuoteData'])->name('update.failure.quote.post');
Route::post('update_attribute_failure_quotedata', [FailureDeviceController::class, 'updateAttributeFailureQuoteData'])->name('update.attribute.failure.quote.post');;
Route::post('update_attribute_failure_quotedata', [FailureDeviceController::class, 'updateAttributeFailureQuoteData'])->name('update.attribute.failure.quote.post');;
Route::post('update_question_selling_device', [StepSellingController::class, 'updateQuestionSellingDevice'])->name('update.question.selling.device.post');;
Route::get('estimate_price_device', [StepSellingController::class, 'estimatePriceDevice'])->name('estimate.price.device');

// Paypal Gateway for payment method in E-commerce  module

Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');








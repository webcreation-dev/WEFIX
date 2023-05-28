<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Repair\TypeDeviceController;
use App\Http\Controllers\Repair\BrandDeviceController;
use App\Http\Controllers\Repair\FailureDeviceController;
use App\Http\Controllers\Repair\ModelBrandController;
use App\Http\Controllers\Repair\SheduleStoreController;
use App\Http\Controllers\Repair\StoreDeviceController;


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
    return view('layouts.app');
});


//Route ressource
Route::resource('typedevices', TypeDeviceController::class);
Route::resource('brands', BrandDeviceController::class);
Route::resource('models', ModelBrandController::class);
Route::resource('failures', FailureDeviceController::class);
Route::resource('stores', StoreDeviceController::class);
Route::resource('schedules', SheduleStoreController::class);

Route::post('update_failure_quotedata', [FailureDeviceController::class, 'updateFailureQuoteData'])->name('update.failure.quote.post');;
Route::post('update_attribute_failure_quotedata', [FailureDeviceController::class, 'updateAttributeFailureQuoteData'])->name('update.attribute.failure.quote.post');;











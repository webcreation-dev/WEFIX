<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Repair\TypeDeviceController;
use App\Http\Controllers\Repair\BrandDeviceController;
use App\Http\Controllers\Repair\FailureDeviceController;
use App\Http\Controllers\Repair\ModelBrandController;

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
    return view('welcome');
});

Route::get('/layouts', function () {
    return view('layouts.app');
});

Route::get('/repair1', function () {
    return view('reparation.typedevice');
});

Route::get('/repair2', function () {
    return view('reparation.step2');
});

Route::get('/repair3', function () {
    return view('reparation.step3');
});

Route::get('/repair4', function () {
    return view('reparation.step4');
});

Route::get('/repair5', function () {
    return view('reparation.step5');
});

Route::get('/repair6', function () {
    return view('reparation.step6');
});

Route::get('/repair7', function () {
    return view('reparation.step7');
});

//Route ressource
Route::resource('typedevices', TypeDeviceController::class);
Route::resource('brands', BrandDeviceController::class);
Route::resource('models', ModelBrandController::class);
Route::resource('failures', FailureDeviceController::class);






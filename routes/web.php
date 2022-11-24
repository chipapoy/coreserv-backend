<?php

use App\Http\Controllers\Vendor;
use App\Http\Controllers\Rfp;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\City;
use App\Http\Controllers\SkyDetails;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return ['Laravels' => app()->version()];
});

Route::get('/test', function () {
    return ['Laravels' => app()->version()];
});

Route::get('/users', function () {
    return response("test");
});

Route::get('/vendorList',[Vendor::class, 'List']);

require __DIR__.'/auth.php';

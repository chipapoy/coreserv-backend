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
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/users/{id}', function ($id) {
    return response()->json([
        'id' => $id
    ]);
});

// Vendor
Route::get('/vendorList',[Vendor::class, 'List']);
Route::post('/insertData',[Vendor::class, 'store']);
Route::get('/test',[Vendor::class, 'test']);
Route::get('/vendorNameList',[Vendor::class, 'vendorNameList']);

// RFP
Route::get('/rfpList',[Rfp::class, 'List']);
Route::post('/newRfp',[Rfp::class, 'store']);

// RFP DASHBOARD
Route::get('/dashboardList',[Dashboard::class, 'List']);
Route::post('/newDashboard',[Dashboard::class, 'store']);


// General List
Route::get('/cityList',[City::class, 'List']);
Route::get('/skyContact',[SkyDetails::class, 'contactPerson']);
Route::get('/skyContactDetails/{id}',[SkyDetails::class, 'contactDetails']);
Route::get('/skyInitContactPerson/{id}',[SkyDetails::class, 'initContactPerson']);

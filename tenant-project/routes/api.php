<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Tenants\TenantsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/createTestTenant', [TenantsController::class, 'createTestTenant']);

Route::post('/registration', [AuthController::class, 'registration']);
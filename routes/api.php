<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CovenantController;
use App\Http\Controllers\Api\InstitutionController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'simulator'

], function ($router) {
    Route::get('/covenants', [CovenantController::class, 'getCovenants']);    
    Route::get('/institutions', [InstitutionController::class, 'getInstitutions']);    
});

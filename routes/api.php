<?php

use App\Models\Expense;
use App\Http\Controllers\ExpensesApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/expenses', [ExpensesApiController::class, 'index']);

Route::post('/expenses', [ExpensesApiController::class, 'store']);

Route::put('/expenses/{expense}', [ExpensesApiController::class, 'update']);

Route::delete('/expenses/{expense}', [ExpensesApiController::class, 'delete']);
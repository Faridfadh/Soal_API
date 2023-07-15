<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionbankController;
use App\Http\Controllers\QuizzesController;
use App\Http\Controllers\Questionbank_quizzesController;
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
Route::resource('questionbank', QuestionbankController::class);
Route::resource('quizzes', QuizzesController::class);
Route::resource('questionbank_quizzes', Questionbank_quizzesController::class);

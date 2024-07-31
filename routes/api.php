<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::resource('user', UserController::class)->middleware('auth:sanctum');
Route::get("/profile", [ApiController::class, "user"])->middleware('auth:sanctum');
Route::post("/profile/update", [ApiController::class, "userUpdate"])->middleware('auth:sanctum');
Route::get("/token/verify", [ApiController::class, "tokenVerify"])->middleware('auth:sanctum');
Route::get("/logout", [ApiController::class, "tokenDelete"])->middleware('auth:sanctum');
Route::post("/token/create", [ApiController::class, "token"]);
Route::post("/register", [ApiController::class, "register"]);
Route::delete("/account/delete", [ApiController::class, "accountDelete"])->middleware('auth:sanctum');

Route::post("/center/create", [ApiController::class, "centerCreate"])->middleware('auth:sanctum');
Route::get("/centers", [ApiController::class, "centers"])->middleware('auth:sanctum');
Route::post("/center/update", [ApiController::class, "centerUpdate"])->middleware('auth:sanctum');
Route::get("/center/{id}", [ApiController::class, "center"])->middleware('auth:sanctum');
Route::delete("/center/{id}/delete", [ApiController::class, "centerDelete"])->middleware('auth:sanctum');

Route::post("/sos/create", [ApiController::class, "sosCreate"])->middleware('auth:sanctum');
Route::get("/sos/send", [ApiController::class, "sosSend"])->middleware('auth:sanctum');
Route::post("/sos/{id}/update", [ApiController::class, "sosUpdate"])->middleware('auth:sanctum');
Route::get("/soss", [ApiController::class, "soss"])->middleware('auth:sanctum');
Route::get("/sos/{id}", [ApiController::class, "sos"])->middleware('auth:sanctum');
Route::get("/sos", [ApiController::class, "mysos"])->middleware('auth:sanctum');
Route::delete("/sos/{id}/delete", [ApiController::class, "sosDelete"])->middleware('auth:sanctum');


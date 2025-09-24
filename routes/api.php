<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
Route::prefix("mahasiswa")->group(function () {
    Route::get("/", [MahasiswaController::class,"index"])->name("mahasiswa.index");
    Route::post("/store", [MahasiswaController::class,"store"])->name("mahasiswa.store");
    Route::delete("/destroy/{id}", [MahasiswaController::class,"destroy"])->name("mahasiswa.destroy");
    Route::put("/update/{id}", [MahasiswaController::class,"update"])->name("mahasiswa.update");
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

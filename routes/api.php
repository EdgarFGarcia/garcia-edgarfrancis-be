<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**unauth */
Route::group([
    "prefix" => "front"
], function (){
    Route::group([
        "prefix" => "store"
    ], function (){
        Route::get("/", [\App\Http\Controllers\StoreController::class, "getAllStore"]);
        Route::get("/{id?}", [\App\Http\Controllers\StoreController::class, "getStoreById"]);
    });
});

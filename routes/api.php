<?php

use App\Http\Controllers\Api\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
 API Routes

 Uygulamanızın API rotaları buraya konulur.

 Örneğin, bir uygulama için bir "api" rotası oluşturun ve
 "api" ara yazılım grubuna atanabilir..
 Burası uygulamanız için API rotalarınınn kaydedebileceği yerdir. Bunlar
 rotalar RouteServiceProvider tarafından yüklenir ve tüm
 "api" ara yazılım grubuna atanır
 

*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', [ItemController::class, 'index']);
Route::get('items/{id}', [ItemController::class, 'show']);
Route::post('items', [ItemController::class, 'store']);
Route::put('items/{id}', [ItemController::class, 'update']);
Route::delete('items/{id}', [ItemController::class, 'destroy']);
Route::put('items/{id}/restore', [ItemController::class, 'restore']);
<?php

use Illuminate\Support\Facades\Route;

/*
 Web Routes
 Burası uygulamanız için web rotalarını kaydedileceği yerdir. Bunlar
 rotalar RouteServiceProvider tarafından yüklenir ve hepsi
 
"web" ara yazılım grubuna atanır.
Route::get('/', function () {
    return view('welcome');
}

Route::get('/home', function () {
    return view('welcome');
}


*/

Route::get('/', function () {
    return view('welcome');
});

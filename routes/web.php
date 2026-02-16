<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/en', [HomeController::class, 'index_en'])->name('home_en');

// Route::get('lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'ar'])) {
//         session(['locale' => $locale]);
//     }
//     return redirect()->back();
// })->name('changeLang');

Route::post('service/booking', [ServiceController::class, 'store'])->name('service.booking.store');
Route::get('service/data', function(){
    return view('service-data');
});

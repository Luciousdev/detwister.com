<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\NewsletterController;

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

Route::post("/contact-submit", [ContactformController::class,"submitForm"]);
Route::post("/subscribe-newsletter", [NewsletterController::class,"submitNewsletterForm"]);

Route::get("/test", function () {
    return view('test');
});

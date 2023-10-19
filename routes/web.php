<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

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

Route::get('mail', function () {
    return view('emails.contact-form-submitted');
});
Route::get('/{slug?}', DataController::class)
    ->where('slug', '[A-Za-z-]+')
    ->name('page');

Route::post('/contact', [ContactController::class, 'store'])->name('post-contact');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('post-newsletter');
// Route::get('/', function () {
//     return view('welcome');
// });

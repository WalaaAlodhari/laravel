<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();


//Route::resource('invoices','\App\Http\Controllers\InvoicesController');

Route::resource('sections','\App\Http\Controllers\SectionsController');

Route::resource('products','\App\Http\Controllers\ProductsController');

Route::get('/section/{id}','\App\Http\Controllers\InvoicesController@getproducts');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/payment', function (){

    return(new App\Http\Controllers\payment\PaymentService())->pay(new App\Http\Controllers\payment\StripePaymentMethod());


});


//
//
//Route::get('/send', [\App\Http\Controllers\liskov\EmailController::class,'index']);

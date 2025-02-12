<?php

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplyCompetationController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    if(Auth::user()){

    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ApplyCompetationController::class)->group(function () {
        Route::get("/apply", "index")->name("apply");
        Route::get("/users/applied", "showAppliedUsers")->name("apply.showAppliedUsers");
        Route::get("/users/payment/histories", "showPaymentHistories")->name("apply.showPaymentHistories");
        Route::get("/users/all", "showAlldUsers")->name("all.showAppliedUsers");
        Route::post("apply/store", "store")->name("apply.store");
        Route::post("apply/update", "update")->name("apply.update");
        Route::post("apply/payment-status", "paymentStatus")->name("apply.paymentStatus");
        Route::get("/payment/user", "userPayment")->name("userPayment");
        Route::post("/payment/payment", "userPaymentPayment")->name("userPaymentPayment");
    });
});

require __DIR__ . '/auth.php';

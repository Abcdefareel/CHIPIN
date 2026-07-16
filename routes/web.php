<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardKreator\QrcodeController;
use App\Http\Controllers\Dashboard\DashboardKreator\TipController;
use App\Http\Controllers\Dashboard\DashboardKreator\TipsmasukController;
use App\Http\Controllers\Dashboard\DashboardKreator\walletController;
use App\Http\Controllers\Dashboard\DonationController as DashboardDonationController;
use App\Http\Controllers\Dashboard\ProfileController as DashboardProfileController;
use App\Http\Controllers\Dashboard\TransactionController;
use App\Http\Controllers\LandingPage\LandingPageController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\Dashboard\OverlayController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/migrate', function () {
    Artisan::call('migrate', [
        '--force' => true
    ]);
});

Route::get('/', [LandingPageController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/process', [LoginController::class, 'loginProcess']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register/process', [RegisterController::class, 'registerProcess']);

    // Password reset via OTP
    Route::get('/forgot', [\App\Http\Controllers\Auth\PasswordResetController::class, 'showForgot'])->name('password.forgot.form');
    Route::post('/forgot', [\App\Http\Controllers\Auth\PasswordResetController::class, 'sendOtp'])->name('password.send');
    Route::get('/forgot/verify', [\App\Http\Controllers\Auth\PasswordResetController::class, 'showVerify'])->name('password.verify.form');
    Route::post('/forgot/verify', [\App\Http\Controllers\Auth\PasswordResetController::class, 'verifyOtp'])->name('password.verify');
    Route::get('/forgot/reset', [\App\Http\Controllers\Auth\PasswordResetController::class, 'showReset'])->name('password.reset.form');
    Route::post('/forgot/reset', [\App\Http\Controllers\Auth\PasswordResetController::class, 'resetPassword'])->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/kreator', [DashboardController::class, 'becomeCreator'])->name('dashboard.kreator');
    Route::put('/dashboard', [DashboardController::class, 'updateProfile'])->name('dashboard.update');
    Route::put('/dashboard/password', [DashboardController::class, 'updatePassword'])->name('dashboard.password');
    Route::put('/dashboard/email', [DashboardController::class, 'updateEmail'])->name('dashboard.email');

    Route::get('/dashboard/transaction', [TransactionController::class, 'index'])->name('dashboard.transaction');
    Route::get('/kreator/wallet', [walletController::class, 'index'])->name('wallet');
    Route::get('/kreator/tip', [TipController::class, 'index'])->name('kreator.tip');
    Route::get('/kreator/tipmasuk', [TipsmasukController::class, 'index'])->name('kreator.tipmasuk');
    Route::put('/kreator/tipmasuk/{donation}/confirm', [TipsmasukController::class, 'confirm'])->name('kreator.tipmasuk.confirm');
    Route::match(['GET', 'POST', 'PATCH'], '/kreator/tipmasuk/{donation}/status', [TipsmasukController::class, 'updateStatus'])->name('kreator.tipmasuk.update-status');
    Route::get('/kreator/qrcode', [QrcodeController::class, 'index'])->name('kreator.qrcode');
});


// Route publik, TIDAK dibungkus middleware auth
Route::get('/donate/{username}', [DashboardDonationController::class, 'show'])->name('donate.show');
Route::post('/donate/{username}', [DashboardDonationController::class, 'send'])->name('donate.send');



Route::get('/overlay/{username}', [OverlayController::class, 'show'])->name('overlay.show');
Route::get('/overlay/{username}/latest-donation', [OverlayController::class, 'latestDonation'])->name('overlay.latest-donation');

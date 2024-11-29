<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhoweareController;
use App\Http\Controllers\CorevaluesController;
use App\Http\Controllers\CorporateresponsibilityController;
use App\Http\Controllers\HowitworksController;
use App\Http\Controllers\WhychooseController;
use App\Http\Controllers\GetappController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PremiumController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/thankyou', [ThankyouController::class, 'index'])->name('thankyou');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');
Route::get('/legal', [LegalController::class, 'legal'])->name('legal');
Route::get('/getapp', [GetappController::class, 'getapp'])->name('getapp');
Route::get('/corevalues', [CorevaluesController::class, 'corevalues'])->name('corevalues');
Route::get('/howitworks', [HowitworksController::class, 'howitworks'])->name('howitworks');
Route::get('/corporateresponsibilities', [CorporateresponsibilityController::class, 'corporateresponsibilities'])->name('corporateresponsibilities');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/whoweare', [WhoweareController::class, 'whoweare'])->name('whoweare');
Route::get('/whychooseus',[WhychooseController::class, 'whychooseus'])->name('whychooseus');
Route::get('/category',[CategoryController::class, 'category'])->name('category');
Route::get('/premium',[PremiumController::class, 'premium'])->name('premium');



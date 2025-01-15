<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\RegisterdUserController;
use App\Http\Middleware\RedirectToChooseRole;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CleaningController;
use App\Http\Controllers\EstimatesController;
use App\Livewire\MultistepForm;
use App\Http\Controllers\MultiStepFormController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\ResidentialController;



Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');
Route::get('/admin/profile', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.profile');
Route::get('/admin/jobs', [JobsController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.jobs');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/employer', [EmployerController::class, 'index'])->name('employer.dashboard');
    Route::get('/jobseeker', [JobseekerController::class, 'index'])->name('jobseeker.dashboard');
});

Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');

require __DIR__.'/auth.php';



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/thankyou', [ThankyouController::class, 'index'])->name('thankyou');
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
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/premium',[PremiumController::class, 'premium'])->name('premium');

Route::get('/cleaning/home',[CleaningController::class, 'index'])->name('index');
Route::get('/cleaning/estimates',[EstimatesController::class, 'index'])->name('cleaning.estimates');
Route::get('/cleaning/commercial',[CommercialController::class, 'index'])->name('cleaning.commercial');
Route::get('/cleaning/residential',[ResidentialController::class, 'index'])->name('cleaning.residential');

// multistep form
Route::get('/cleaning/step-one', [MultiStepFormController::class, 'stepOne'])->name('step.one');
Route::post('/cleaning/step-one', [MultiStepFormController::class, 'postStepOne'])->name('post.step.one');

Route::get('/cleaning/step-two', [MultiStepFormController::class, 'stepTwo'])->name('step.two');
Route::post('/cleaning/step-two', [MultiStepFormController::class, 'postStepTwo'])->name('post.step.two');

Route::get('/cleaning/step-three', [MultiStepFormController::class, 'stepThree'])->name('step.three');
Route::post('/cleaning/step-three', [MultiStepFormController::class, 'postStepThree'])->name('post.step.three');

Route::get('/cleaning/confirm', [MultiStepFormController::class, 'confirm'])->name('confirm');
Route::post('/cleaning/submit', [MultiStepFormController::class, 'submit'])->name('submit');

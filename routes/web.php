<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\JobPortalController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\AchInformationController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\NewOpportunityController;
use App\Http\Controllers\ServiceAvailableController;
use App\Http\Controllers\Admin\ServiceAreaController;
use App\Http\Controllers\AccountInformationController;
use App\Http\Controllers\DispatchInformationController;

// Auth Routes
Route::get('/', [IndexController::class,'index'])->name('index');
Route::post('/signup', [IndexController::class,'signup'])->name('signup');
Route::post('/signin', [IndexController::class,'signin'])->name('signin');
Route::get('/logout', [IndexController::class,'logout'])->name('logout');
Route::get('/forget_password', [IndexController::class,'forget_password'])->name('forget_password');
Route::post('/verify_email', [IndexController::class,'verify_email'])->name('verify_email');
Route::post('/reset_password', [IndexController::class,'reset_password_post'])->name('reset_password');
Route::get('/reset_password', [IndexController::class,'reset_password'])->name('reset_password');
//Dashboard
Route::get('/dashboard', [IndexController::class,'dashboard'])->middleware('auth')->name('dashboard');
Route::resource('users', UserController::class)->middleware('auth');
// User  Compnay Profile
Route::get('/company_profile', [CompanyProfileController::class,'index'])->middleware('auth')->name('company_profile');
//Account infomation
Route::resource('account_informations', AccountInformationController::class)->middleware('auth');
Route::get('account_informations/{account_information}/delete', [AccountInformationController::class,'destroy'])->middleware('auth');
Route::post('account_information/upload_certficate', [AccountInformationController::class,'certificate'])->middleware('auth');
Route::get('download/pdf', [AccountInformationController::class,'download'])->middleware('auth');
Route::get('view/pdf', [AccountInformationController::class,'viewPdf'])->middleware('auth');
Route::resource('dispatch_informations', DispatchInformationController::class)->middleware('auth');
//new opportunity,Services routes
Route::get('/new_opportunity', [NewOpportunityController::class,'index'])->middleware('auth')->name('new_oppurtunity');
Route::post('/service_decline', [NewOpportunityController::class,'service_decline'])->middleware('auth')->name('service_decline');
Route::get('/service_available', [ServiceAvailableController::class,'index'])->middleware('auth')->name('service_available');

//job application
Route::get('/job_portal', [JobPortalController::class,'index'])->middleware('auth')->name('job_portal');
Route::get('/job_application/{id}', [JobPortalController::class,'job_application'])->middleware('auth')->name('job_application');

Route::post('/job_apply', [JobPortalController::class,'job_apply'])->middleware('auth')->name('job_apply');
Route::post('/job_decline', [JobPortalController::class,'job_decline'])->middleware('auth')->name('job_decline');
//Admin Routes
Route::get('/purchase_order', [PurchaseOrderController::class,'index'])->name('purchase_order')->middleware('auth');   
Route::resource('service_areas', ServiceAreaController::class)->middleware('auth');   
Route::resource('services', ServiceController::class)->middleware('auth');   
Route::resource('jobs', JobController::class)->middleware('auth');   
Route::PUT('jobs/approve/{id}', [JobController::class,'approve'])->middleware('auth');   
Route::PUT('jobs/decline/{id}', [JobController::class,'decline'])->middleware('auth');   
Route::get('/job_applications', [JobController::class,'application'])->middleware('auth');  
//Invoice
Route::PUT('/invoice/approve/{id}', [InvoiceController::class,'approve'])->middleware('auth'); 
Route::post('/invoice/decline/{id}', [InvoiceController::class,'decline'])->middleware('auth'); 
 


<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//page Routes
Route::get('/',[HomeController::class,'page']);
Route::get('/projects',[ProjectController::class,'page']);
Route::get('/contact',[ContactController::class,'page']);
Route::get('/resume',[ResumeController::class,'page']);

//Ajax Call Routes
Route::get('/heroData',[HomeController::class,'heroData']);
Route::get('/aboutData',[HomeController::class,'aboutData']);
Route::get('/socialData',[HomeController::class,'socialData']);
Route::get('/projectData',[ProjectController::class,'projectData']);
Route::get('/resumeLink',[ResumeController::class,'resumeLink']);
Route::get('/experienceData',[ResumeController::class,'experienceData']);
Route::get('/educationData',[ResumeController::class,'educationData']);
Route::get('/skillsData',[ResumeController::class,'skillsData']);
Route::get('/languagesData',[ResumeController::class,'languagesData']);
Route::post('/contactRequest',[ContactController::class,'contactRequest']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPagesController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseBatchController;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\preventBackHistory;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [UserPagesController::class, 'index']);
Route::get('/about', [UserPagesController::class, 'about']);
Route::get('/courses/{category}', [UserPagesController::class, 'course']);
Route::get('/gallery', [UserPagesController::class, 'gallery']);
Route::get('/placements', [UserPagesController::class, 'placements']);
Route::get('/contact', [UserPagesController::class, 'contact']);
Route::get('/verifyCertificate', [UserPagesController::class, 'verifyCertificate']);
Route::get('/courseView/{id}', [UserPagesController::class, 'courseMain']);

Route::get('/index-page-courses', [CourseController::class, 'getIndexPageCourses']);
Route::get('/main-page-courses', [CourseController::class, 'getMainPageCourses']);
Route::get('/get-index-category', [CourseCategoryController::class, 'getIndexCategory']);

Route::post('/add-enquiry', [CourseCategoryController::class, 'addEnquiry']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//admin routes

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'preventBackHistory']], function () {

    Route::get('dashboard', [AdminPagesController::class, 'dashboard'])->name('admin.dashboard');


    Route::post('/add-course', [CourseController::class, 'addCourse']);
    Route::get('/get-courses', [CourseController::class, 'getCourses']);
     Route::get('/categories', [CourseController::class, 'Categories']);

    Route::post('/add-category', [CourseCategoryController::class, 'addCategory']);
    Route::get('/get-category', [CourseCategoryController::class, 'getCategory']);


    Route::post('/add-batch', [CourseBatchController::class, 'addBatch']);
     Route::get('/get-batches', [CourseBatchController::class, 'getBatches']);
     Route::get('/get-batch-courses', [CourseBatchController::class, 'getBatchCourses']);

   


});

// user routes


Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'preventBackHistory']], function () {

    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});







Route::get('{path}', [AdminPagesController::class, 'dashboard'])->where('path', '.*')->middleware('isAdmin');

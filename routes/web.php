<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UbudeheController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\DeseaseController;
use App\Http\Controllers\DisabilityController;
use App\Http\Controllers\PermissionController;

  

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



Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('/how', [PageController::class, 'how'])->name('how');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/req', [PageController::class, 'req'])->name('req');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('ubudehe', UbudeheController::class);
    Route::resource('education', EducationController::class);
    Route::resource('desease', DeseaseController::class);
    Route::resource('assety', AssetController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('disability', DisabilityController::class);

});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Livewire\Admin\AdminCategory;
use App\Http\Livewire\Admin\AdminIndustry;
use App\Http\Livewire\Admin\Industry;

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

// Route::get('/jetstream', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

Route::redirect('/admin', function() {
        return view('dashboard');
    });
    
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('admin')->group(function () {
        Route::get('industries', AdminIndustry::class)->name('create-industry');
        Route::get('categories', AdminCategory::class)->name('create-category');
    });
    
});
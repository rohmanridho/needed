<?php

use App\Http\Livewire\HomeLivewire;
use App\Http\Livewire\Admin\Industry;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\AdminCategory;
use App\Http\Livewire\Admin\AdminIndustry;
use App\Http\Livewire\Employer\EmployerCompany;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Admin\IndustryController;

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

Route::get('/jet', function () {
    return view('welcome');
});

Route::get('/', HomeLivewire::class)->name('home');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

Route::get('/employer/companies', EmployerCompany::class)->name('create-companies');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::group(['middleware' => 'CheckRole:employer'], function () {
        // Route::prefix('employer')->group(function() {
        //     Route::get('companies', EmployerCompany::class)->name('create-companies');
        // });

        
        Route::get('/employer', function () {
            return redirect()->route('create-companies');
        })->name('employer');
        
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });



    Route::group(['middleware' => 'CheckRole:admin'], function () {
        Route::prefix('admin')->group(function () {
            Route::get('industries', AdminIndustry::class)->name('create-industry');
            Route::get('categories', AdminCategory::class)->name('create-category');
        });

        Route::get('/admin', function () {
            return redirect()->route('create-industry');
        })->name('admin');
    });
});
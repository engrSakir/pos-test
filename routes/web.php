<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Livewire\Backend\CustomerPhone;
use App\Http\Livewire\Backend\Dashboard;
use App\Http\Livewire\Backend\Expense;
use App\Http\Livewire\Backend\ExpenseCategory;
use App\Http\Livewire\Backend\Invoice;
use App\Http\Livewire\Backend\PermissionManagement;
use App\Http\Livewire\Backend\Pos;
use App\Http\Livewire\Backend\Product;
use App\Http\Livewire\Backend\ProductCategory;
use App\Http\Livewire\Backend\Profile;
use App\Http\Livewire\Backend\Report;
use App\Http\Livewire\Backend\Setting;
use App\Http\Livewire\Frontend\Home;
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

Route::get('/', Home::class);

Route::get('/dashboard', function () {
    return redirect()->route(auth()->user()->getAllPermissions()->first()->name);
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/permission-management', PermissionManagement::class)->name('permissionManagement')->middleware(['permission:permissionManagement']); //Livewire route
    Route::get('/admin-dashboard', Dashboard::class)->name('dashboard')->middleware(['permission:dashboard']); //Livewire route
    Route::get('/product-category', ProductCategory::class)->name('productCategory')->middleware(['permission:productCategory']); //Livewire route
    Route::get('/product', Product::class)->name('product')->middleware(['permission:product']); //Livewire route
    Route::get('/expense-category', ExpenseCategory::class)->name('expenseCategory')->middleware(['permission:expenseCategory']); //Livewire route
    Route::get('/expense', Expense::class)->name('expense')->middleware(['permission:expense']); //Livewire route
    Route::get('/invoice', Invoice::class)->name('invoice')->middleware(['permission:invoice']); //Livewire route
    Route::get('/pos', Pos::class)->name('pos')->middleware(['permission:pos']); //Livewire route
    Route::get('/customer-phone', CustomerPhone::class)->name('customerPhone')->middleware(['permission:customerPhone']); //Livewire route
    Route::get('/report', Report::class)->name('report')->middleware(['permission:report']); //Livewire route
    Route::get('/setting', Setting::class)->name('setting')->middleware(['permission:setting']); //Livewire route

    Route::get('/profile', Profile::class)->name('profile'); //Livewire route
    Route::get('/invoice/{invoice}', [InvoiceController::class, 'show'])->name('invoice.show');
});


require __DIR__.'/auth.php';

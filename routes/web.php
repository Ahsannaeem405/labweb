<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get  ('/', [AdminController::class, 'home']);
Route::get('/language/{lang}', [AdminController::class, 'language'])->name('language');


Route:: prefix('/admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get  ('/', [AdminController::class, 'index']);



    Route::get('/add/operator', function () {
        return view('admin.AddAdmin');
    });
    Route::get('/add/customer', function () {
        return view('customer.addcustomer');
    });

    Route::get('/view/operator', function () {
        return view('admin.viewAdmin');
    });


    Route::get('/edit_profile', function () {
        return view('admin.edit_profile');
    });


    Route::Post('/saveAdmin', [AdminController::class, 'create'])->name('saveAdmin');
    Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('delete');

    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/update', [AdminController::class, 'update'])->name('update');

    Route::post('/add_customer', [CustomerController::class, 'create'])->name('customer');

    Route::get('/view/customer', [CustomerController::class, 'index']);

    Route::get('/customers', [CustomerController::class, 'view']);

    Route::get('/edit/customer/{id}', [CustomerController::class, 'edit']);
    Route::get('/verify/customer/{id}', [CustomerController::class, 'verify_customer']);
    Route::Post('customer/update', [CustomerController::class, 'update']);
    Route::Post('place/order/{id}', [\App\Http\Controllers\orderController::class, 'order']);

    //invoice
    Route::get('pending/invoice', [\App\Http\Controllers\orderController::class, 'invoice_pending']);
    Route::post('pay/invoice/{id}', [\App\Http\Controllers\orderController::class, 'invoice_pay']);

    //results
    Route::get('pending/results', [\App\Http\Controllers\orderController::class, 'result_pending']);
    Route::post('add/results/{id}', [\App\Http\Controllers\orderController::class, 'result_add']);

    //pending release


    Route::get('pending/release', [\App\Http\Controllers\orderController::class, 'pending_release']);
    Route::get('/release/send/{id}', [\App\Http\Controllers\orderController::class, 'release_send']);

    //released


    Route::get('released', [\App\Http\Controllers\orderController::class, 'released']);
    Route::post('/update/date/{id}', [\App\Http\Controllers\orderController::class, 'date_released']);

    Route::post('/customer/update_adult',[CustomerController::class,'update_adult']);
    Route::post('/customer/update_minor',[CustomerController::class,'update_minor']);

    Route::get('/verification/{id}', [\App\Http\Controllers\CustomerController::class, 'verification']);

    Route::get('delete/customer/{id}',[CustomerController::class,'cusdel']);

});




Route:: prefix('/operator')->middleware(['auth', 'operator'])->group(function () {

    Route::get  ('/', [AdminController::class, 'index']);



    Route::get('/add/operator', function () {
        return view('admin.AddAdmin');
    });
    Route::get('/add/customer', function () {
        return view('customer.addcustomer');
    });

    Route::get('/view/operator', function () {
        return view('admin.viewAdmin');
    });


    Route::get('/edit_profile', function () {
        return view('admin.edit_profile');
    });



    Route::Post('/saveAdmin', [AdminController::class, 'create'])->name('saveAdmin');
    Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('delete');

    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/update', [AdminController::class, 'update'])->name('update');

    Route::post('/add_customer', [CustomerController::class, 'create'])->name('customer');

    Route::get('/view/customer', [CustomerController::class, 'index']);

    Route::get('/customers', [CustomerController::class, 'view']);

    Route::get('/edit/customer/{id}', [CustomerController::class, 'edit']);
    Route::get('/verify/customer/{id}', [CustomerController::class, 'verify_customer']);
    Route::Post('customer/update', [CustomerController::class, 'update']);
    Route::Post('place/order/{id}', [\App\Http\Controllers\orderController::class, 'order']);

    //invoice
    Route::get('pending/invoice', [\App\Http\Controllers\orderController::class, 'invoice_pending']);
    Route::post('pay/invoice/{id}', [\App\Http\Controllers\orderController::class, 'invoice_pay']);

    //results
    Route::get('pending/results', [\App\Http\Controllers\orderController::class, 'result_pending']);
    Route::post('add/results/{id}', [\App\Http\Controllers\orderController::class, 'result_add']);

    //pending release


        Route::get('pending/release', [\App\Http\Controllers\orderController::class, 'pending_release']);
        Route::get('/release/send/{id}', [\App\Http\Controllers\orderController::class, 'release_send']);

        //released


        Route::get('released', [\App\Http\Controllers\orderController::class, 'released']);
    Route::post('/update/date/{id}', [\App\Http\Controllers\orderController::class, 'date_released']);

    Route::post('/customer/update_adult',[CustomerController::class,'update_adult']);
    Route::post('/customer/update_minor',[CustomerController::class,'update_minor']);

    Route::get('/verification/{id}', [\App\Http\Controllers\CustomerController::class, 'verification']);

    Route::get('delete/customer/{id}',[CustomerController::class,'cusdel']);


});





Route::post('/customer/details', [\App\Http\Controllers\CustomerController::class, 'detail_save']);





// operator

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('report/{id}',[\App\Http\Controllers\orderController::class,'report']);


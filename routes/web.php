<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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

Route::get  ('/', [AdminController::class, 'home'])->middleware('lang');
// Route::get('/language/{lang}', [AdminController::class, 'language'])->name('language');
Route::get('/language/{lang}', function ($lang) {
    App::setlocale($lang);

   Session::put('lang',$lang);
   return back();
});


Route:: prefix('/admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get  ('/', [AdminController::class, 'index']);


    Route::get('/prnpriview/{order_id}', function ($order_id) {

        $order_detail=Customer::where('id', $order_id)->first();
        // dd($order_detail);
        return view('customer.pdf2',compact('order_detail'));
        });

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

    Route::get('/customer/view/order/{id}', [CustomerController::class, 'view_order']);

    Route::get('/customer/view/invoice/{id}', [CustomerController::class, 'view_invoice']);



    Route::get('/create/order/customer/{id}', [CustomerController::class, 'create_order']);


    Route::Post('customer/update', [CustomerController::class, 'update']);
    Route::Post('place/order/{id}', [\App\Http\Controllers\orderController::class, 'order']);

    //invoice
    Route::get('pending/invoice', [\App\Http\Controllers\orderController::class, 'invoice_pending']);
    Route::post('pay/invoice/{id}', [\App\Http\Controllers\orderController::class, 'invoice_pay']);

    //results
    Route::get('pending/results', [\App\Http\Controllers\orderController::class, 'result_pending']);
    Route::post('add/results/{id}', [\App\Http\Controllers\orderController::class, 'result_add']);

    //cancel orders


    Route::get('cancel/orders', [\App\Http\Controllers\orderController::class, 'cancelOrders']);

    //pending release


    Route::get('pending/release', [\App\Http\Controllers\orderController::class, 'pending_release']);
    Route::get('/release/send/{id}', [\App\Http\Controllers\orderController::class, 'release_send']);



    Route::get('/downloadd/{id}', [\App\Http\Controllers\orderController::class, 'downloadd']);
    Route::get('/view/{id}', [\App\Http\Controllers\orderController::class, 'view']);

    //released


    Route::get('released', [\App\Http\Controllers\orderController::class, 'released']);
    Route::post('/update/date/{id}', [\App\Http\Controllers\orderController::class, 'date_released']);

    Route::post('/customer/update_adult',[CustomerController::class,'update_adult']);
    Route::post('/customer/update_minor',[CustomerController::class,'update_minor']);

    Route::get('/verification/{id}', [\App\Http\Controllers\CustomerController::class, 'verification']);

    Route::get('delete/customer/{id}',[CustomerController::class,'cusdel']);
    Route::get('place/order/new/{id}',[CustomerController::class,'place_order']);
    Route::post('submit/order/{id}',[CustomerController::class,'place_order_submit']);
    Route::post('upload/document/{id}',[CustomerController::class,'upload_document']);
    Route::get('delete/document/{id}',[CustomerController::class,'delete_document']);
    Route::get('/order/cancel/{id}',[CustomerController::class,'cancel_order']);

    Route::get('/order/approve/{id}',[CustomerController::class,'order_approve']);


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

    Route::get('/customer/view/order/{id}', [CustomerController::class, 'view_order']);

    Route::get('/customer/view/invoice/{id}', [CustomerController::class, 'view_invoice']);

Route::get('/prnpriview/{order_id}', function ($order_id) {

$order_detail=Customer::where('id', $order_id)->first();
// dd($order_detail);
return view('customer.pdf2',compact('order_detail'));
});

    Route::get('/create/order/customer/{id}', [CustomerController::class, 'create_order']);


    Route::Post('customer/update', [CustomerController::class, 'update']);
    Route::Post('place/order/{id}', [\App\Http\Controllers\orderController::class, 'order']);

    //invoice
    Route::get('pending/invoice', [\App\Http\Controllers\orderController::class, 'invoice_pending']);
    Route::post('pay/invoice/{id}', [\App\Http\Controllers\orderController::class, 'invoice_pay']);

    //results
    Route::get('pending/results', [\App\Http\Controllers\orderController::class, 'result_pending']);
    Route::post('add/results/{id}', [\App\Http\Controllers\orderController::class, 'result_add']);

    //cancel orders


    Route::get('cancel/orders', [\App\Http\Controllers\orderController::class, 'cancelOrders']);

    //pending release


    Route::get('pending/release', [\App\Http\Controllers\orderController::class, 'pending_release']);
    Route::get('/release/send/{id}', [\App\Http\Controllers\orderController::class, 'release_send']);
    Route::get('/downloadd/{id}', [\App\Http\Controllers\orderController::class, 'downloadd']);
    Route::get('/view/{id}', [\App\Http\Controllers\orderController::class, 'view']);

    //released


    Route::get('released', [\App\Http\Controllers\orderController::class, 'released']);
    Route::post('/update/date/{id}', [\App\Http\Controllers\orderController::class, 'date_released']);

    Route::post('/customer/update_adult',[CustomerController::class,'update_adult']);
    Route::post('/customer/update_minor',[CustomerController::class,'update_minor']);

    Route::get('/verification/{id}', [\App\Http\Controllers\CustomerController::class, 'verification']);

    Route::get('delete/customer/{id}',[CustomerController::class,'cusdel']);
    Route::get('place/order/new/{id}',[CustomerController::class,'place_order']);
    Route::post('submit/order/{id}',[CustomerController::class,'place_order_submit']);
    Route::post('upload/document/{id}',[CustomerController::class,'upload_document']);
    Route::get('delete/document/{id}',[CustomerController::class,'delete_document']);
    Route::get('/order/cancel/{id}',[CustomerController::class,'cancel_order']);

    Route::get('/order/approve/{id}',[CustomerController::class,'order_approve']);
});





Route::post('/customer/details', [\App\Http\Controllers\CustomerController::class, 'detail_save'])->middleware('lang');





// operator

Auth::routes();


Route::get('report/{id}',[\App\Http\Controllers\orderController::class,'report'])->middleware('lang');



Route::get('/pdff', function () {
    return view('pdf.customer_pdf');
});


// Route::get('/pdff',[\App\Http\Controllers\CustomerController::class,'pdff']);


Route::get('append/signature',[\App\Http\Controllers\orderController::class,'append_signature']);
Route::get('append/signature2',[\App\Http\Controllers\orderController::class,'append_signature2']);




Route::get('/testpdf', function () {
    return view('pdf.testpdf');
});

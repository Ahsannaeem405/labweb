<?php

namespace App\Http\Controllers;

use App\Mail\result;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class orderController extends Controller
{

    public function report($id)
    {
return view('report.report');
    }
    public function order(Request $request,$id)
    {
        $customer=Customer::find($id);

        $customer->step=2;
        $customer->test_type=$request->test_type;
        $customer->date=Carbon::now();
        $customer->update();
        return back()->with('success','Order created successfully');
    }

    public function invoice_pending()
    {
        $customer = Customer::where('step',2)->get();
        return view('orders.pendingInvoice', compact('customer'));
    }

    public function invoice_pay(Request $request,$id)
    {
        $customer=Customer::find($id);
        $customer->step=3;
        $customer->payment_method=$request->payment_method;
        $customer->payment_amount=$request->payment_amount;
        $customer->payment_detail=$request->payment_detail;
        $customer->date=Carbon::now();
        $customer->update();
        return back()->with('success','invoice paid successfully');

    }

    public function result_pending()
    {
        $customer = Customer::where('step',3)->get();
        return view('orders.pendingResult', compact('customer'));
    }
    public function result_add(Request $request,$id)
    {

        $customer=Customer::find($id);
        $customer->step=4;
        $customer->display_status=$request->result;
        $customer->date=Carbon::now();
        $customer->update();
        return back()->with('success','Result updated successfully');
    }

    public function pending_release()
    {
        $customer = Customer::where('step',4)->get();
        return view('orders.pendingRelease', compact('customer'));
    }

    public function release_send($id)
    {
        $customer=Customer::find($id);
        $email=$customer->email;
        $host='https://'.\request()->getHost()."/report/$id";
        $pdf = \PDF::loadView('pdf.report',compact('host'));


        $rand= rand(0, 99999999999999);


        $path = 'pdf/';
        $fileName = $rand . '.' . 'pdf' ;
        $pdf->save($path . '/' . $fileName);






        Mail::to($email)->send(new result($rand));

        $customer->step=5;
        $customer->date=Carbon::now();
        $customer->update();
        return back()->with('success','Release send successfully');

    }

    public function released()
    {
        $customer = Customer::where('step',5)->get();
        return view('orders.Released', compact('customer'));

    }

}

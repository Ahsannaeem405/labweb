<?php

namespace App\Http\Controllers;

use App\Mail\result;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class orderController extends Controller
{


    public function cancelOrders()
    {
        $customer =Customer::where('display_status','Canceled')->get();


        return view('admin.cancel',compact('customer'));
    }
    public function append_signature(){

            return view('signature2');

    }

    public function append_signature2(){

        return view('signature');

}

    public function report($id)
    {

      $idd =   base64_decode($id);


    $idd = intval($idd);
        $report=Customer::find($idd);


    if($report)
    {
        return view('report.report',compact('report'));

    }
    else{
        return redirect('/')->with('error','No record found');
    }
    }
    public function order(Request $request,$id)
    {
        $customer=Customer::find($id);


        $cus=new Customer();
        $cus->name=$customer->name;
        $cus->email=$customer->email;
        $cus->address=$customer->address;
        $cus->phone=$customer->phone;
        $cus->dob=$customer->dob;
        $cus->passport=$customer->passport;
        $cus->gender=$customer->gender;
        $cus->status=$customer->status;
        $cus->step=2;
        $cus->test_type=$request->test_type;
        $cus->added_by=$customer->added_by;
        $cus->order_date=Carbon::now();
        $cus->order_id=rand(0000,9999);
        $cus->main_status='order';
        $cus->save();
        return back()->with('success','Order created successfully');
    }

    public function invoice_pending()
    {
        $customer = Customer::where('step',2)->where('display_status','=',null)->get();

        return view('orders.pendingInvoice', compact('customer'));
    }

    public function invoice_pay(Request $request,$id)
    {
        $customer=Customer::find($id);
        $customer->step=3;
        $customer->payment_method=$request->payment_method;
        $customer->payment_amount=$request->payment_amount;
        $customer->payment_detail=$request->payment_detail;
        $customer->payment_date=Carbon::now();
        $customer->update();
        return back()->with('success','invoice paid successfully');

    }

    public function result_pending()
    {
        $customer = Customer::where('step',3)->where('display_status','=',null)->get();
        return view('orders.pendingResult', compact('customer'));
    }
    public function result_add(Request $request,$id)
    {

        $customer=Customer::find($id);
        $customer->step=4;
        $customer->display_status=$request->result;
        $customer->result_date=Carbon::now();
        $customer->date=Carbon::now();
        $customer->update();
        return back()->with('success','Result updated successfully');
    }

    public function pending_release()
    {
        $customer = Customer::where('step',4)->where('display_status','!=','Canceled')->get();
        return view('orders.pendingRelease', compact('customer'));
    }

    public function view($id){

        $customer=Customer::find($id);

        $email=$customer->email;

        $idd =  base64_encode($id);

        $host='https://'.\request()->getHost()."/public/report/$idd";
        $pdf = \PDF::loadView('pdf.report',compact('host','customer'));
        $rand= rand(0, 99999999999999);

        $path = 'pdf/';
        $fileName = $rand . '.' . 'pdf' ;
        $pdf->save($path . '/' . $fileName);

        return redirect('/pdf/'.$fileName);
     // return  $pdf->stream($fileName,array('Attachment'=>0));



// download PDF file with download method
       // return $pdf->download('pdf_report.pdf');
    }

    public function downloadd($id){

$customer=Customer::find($id);



$email=$customer->email;

$idd =  base64_encode($id);

$host='https://'.\request()->getHost()."/public/report/$idd";
$pdf = \PDF::loadView('pdf.report',compact('host','customer'));


// download PDF file with download method
return $pdf->download('pdf_report.pdf');


return back();

    }
    public function release_send($id)
    {
        $customer=Customer::find($id);
        $customer->step=5;
        //$customer->date=Carbon::now();
        $customer->update();


        $email=$customer->email;
       $rand2 =  rand(00000,99999);
       $idd =  base64_encode($id);

        $host='https://'.\request()->getHost()."/public/report/$idd?id=$rand2";
        $pdf = \PDF::loadView('pdf.report',compact('host','customer'));
        $rand= rand(0, 99999999999999);
        $path = 'pdf/';
        $fileName = $rand . '.' . 'pdf' ;
        $pdf->save($path . '/' . $fileName);




        Mail::to($email)->send(new result($rand));


        return back()->with('success','Release send successfully');

    }

    public function released()
    {
        $customer = Customer::where('step',5)->where('display_status','!=','Canceled')->get();
        return view('orders.Released', compact('customer'));

    }


    public function date_released(Request $request,$id)
    {

        $customer=Customer::find($id);
        $customer->date=$request->release_date;
        $customer->display_status=$request->result;
        $customer->update();
        return back()->with('success','Release date updated successfully');


    }
}

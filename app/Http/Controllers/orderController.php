<?php

namespace App\Http\Controllers;

use App\Jobs\MatchSendEmail;
use App\Mail\result;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class orderController extends Controller
{

    public function print($id)
    {

        $customer = Customer::with('priceList')->find($id);

        $email = $customer->email;
        $rand2 = rand(00000, 99999);
        $idd = base64_encode($id);
        $host = 'https://' . \request()->getHost() . "/report/$idd?id=$rand2";

        return view('pdf.reportprint', compact('host', 'customer'));
    }

    public function sync($id)
    {
        return back()->with('success', 'Report Regenerated successfully');
    }


    public function cancelOrders(Request $request)
    {

        $search =  $request->input('q');
        $ind = intval( $request->input('q'))-3000;

        if($search!=""){

            $customer = Customer::where(function ($query) use ($search,$ind){
                $query->where(\DB::raw("concat(name, ' ', middle_name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere(\DB::raw("concat(name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('id', 'like', '%'.$ind.'%')
                    ->orWhere('order_date', 'like', '%'.$search.'%');
            })
                ->  where('display_status', 'Canceled')
                ->paginate(50);
            //$customer->appends(['q' => $search]);
        }
        else{
            $customer = Customer::where('display_status', 'Canceled')
                ->paginate(50);
        }


    //    $customer = Customer::where('display_status', 'Canceled')->get();


        return view('admin.cancel', compact('customer'));
    }

    public function append_signature()
    {

        return view('signature2');

    }

    public function append_signature2()
    {

        return view('signature');

    }

    public function report($id)
    {

        $idd = base64_decode($id);


        $idd = intval($idd);
        $report = Customer::find($idd);


        if ($report) {
            return view('report.report', compact('report'));

        } else {
            return redirect('/')->with('error', 'No record found');
        }
    }

    public function order(Request $request, $id)
    {

        $customer = Customer::find($id);

        if (isset($customer->show->surname)) {

            $last = $customer->show->surname;
            $mid = $customer->show->secondname;
            $address = $customer->show->address . ' ' . $customer->show->address2 . ' ' . $customer->show->town . ' ' . $customer->show->Province . ' ' . $customer->show->zip . ' ' . $customer->show->Country;
        } else {

            $last = ' ';
            $mid = ' ';
            $address = $customer->address . ' ' . $customer->address2 . ' ' . $customer->town . ' ' . $customer->state . ' ' . $customer->zip . ' ' . $customer->country;

        }
        $cus = new Customer();
        $cus->name = $customer->name;
        $cus->middle_name = $customer->middle_name;
        $cus->last_name = $customer->last_name;
        $cus->email = $customer->email;

        $cus->address = $customer->address;

        $cus->phone = $customer->phone;
        $cus->dob = $customer->dob;
        $cus->passport = $customer->passport;
        $cus->gender = $customer->gender;
        $cus->status = $customer->status;
        $cus->step = 2;
        $cus->test_type = $request->test_type;
        $cus->added_by = $customer->added_by;
        $cus->order_date = Carbon::now();
        $cus->order_id = rand(0000, 9999);

        //$cus->address1 = isset($customer->show->address) ? $customer->show->address : $customer->address;
        $cus->address2 =  $customer->address2;
        $cus->town =  $customer->town;
        $cus->zip =  $customer->zip;
        $cus->state =  $customer->state;
        $cus->country =  $customer->country;

        $cus->main_status = 'order';
        $cus->save();


        return back()->with('success', 'Order created successfully');
    }

    public function invoice_pending(Request $request)
    {


        $search =  $request->input('q');
        $ind = intval( $request->input('q'))-3000;

        if($search!=""){
            ;
            $customer = Customer::where(function ($query) use ($search,$ind){
                $query->where(\DB::raw("concat(name, ' ', middle_name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere(\DB::raw("concat(name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('test_type', 'like', '%'.$search.'%')
                    ->orWhere('id', 'like', '%'.$ind.'%')
                    ->orWhere('order_date', 'like', '%'.$search.'%');
            })
           ->  where('step', 2)   ->where('display_status', '=', null)->with('priceList')->orderBy('order_date', 'desc')
                ->paginate(50);
            //$customer->appends(['q' => $search]);
        }
        else{
            $customer = Customer::where('step', 2)->where('display_status', '=', null)->with('priceList')->orderBy('order_date', 'desc')
                ->paginate(50);
        }

//        $customer = Customer::where('step', 2)->where('display_status', '=', null)->with('priceList')->orderBy('order_date', 'desc')->get();


        return view('orders.pendingInvoice', compact('customer'));
    }

    public function invoice_pay(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->step = 3;
        $customer->payment_method = $request->payment_method;
        $customer->payment_amount = $request->payment_amount;
        $customer->payment_detail = $request->payment_detail;
        $customer->payment_date = Carbon::now();
        $customer->update();
        return back()->with('success', 'invoice paid successfully');

    }

    public function result_pending(Request $request)
    {

        $search =  $request->input('q');
        $ind = intval( $request->input('q'))-3000;

        if($search!=""){
            ;
            $customer = Customer::where(function ($query) use ($search,$ind){
                $query->where(\DB::raw("concat(name, ' ', middle_name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere(\DB::raw("concat(name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('test_type', 'like', '%'.$search.'%')
                    ->orWhere('id', 'like', '%'.$ind.'%')
                    ->orWhere('payment_date', 'like', '%'.$search.'%')
                    ->orWhere('payment_amount', 'like', '%'.$search.'%');
            })
                ->where('step', 3)->where('display_status', '=', null)->orderBy('payment_date', 'desc')->paginate(50);
            //$customer->appends(['q' => $search]);
        }
        else{
            $customer = Customer::where('step', 3)->where('display_status', '=', null)->orderBy('payment_date', 'desc')
                ->paginate(50);
        }


       // $customer = Customer::where('step', 3)->where('display_status', '=', null)->orderBy('payment_date', 'desc')->get();
        return view('orders.pendingResult', compact('customer'));
    }

    public function result_add(Request $request, $id)
    {

        $customer = Customer::find($id);
        $customer->step = 4;
        $customer->display_status = $request->result;
        $customer->result_date = Carbon::now();
        $customer->date = Carbon::now();
        $customer->update();
        return back()->with('success', 'Result updated successfully');
    }

    public function pending_release(Request $request)
    {

        $search =  $request->input('q');
        $ind = intval( $request->input('q'))-3000;

        if($search!=""){
            ;
            $customer = Customer::where(function ($query) use ($search,$ind){
                $query->where(\DB::raw("concat(name, ' ', middle_name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere(\DB::raw("concat(name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('test_type', 'like', '%'.$search.'%')
                    ->orWhere('id', 'like', '%'.$ind.'%')
                    ->orWhere('date', 'like', '%'.$search.'%')
                    ->orWhere('payment_amount', 'like', '%'.$search.'%')
                    ->orWhere('display_status', 'like', '%'.$search.'%');
            })
                ->where('step', 4)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')
                ->paginate(50);
            //$customer->appends(['q' => $search]);
        }
        else{
            $customer =Customer::where('step', 4)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')
                ->paginate(50);
        }



      //  $customer = Customer::where('step', 4)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')->get();
        return view('orders.pendingRelease', compact('customer'));
    }

    public function view($id)
    {

        $customer = Customer::find($id);

        $email = $customer->email;

        $idd = base64_encode($id);

        $host = 'https://' . \request()->getHost() . "/report/$idd";
        $pdf = \PDF::loadView('pdf.report', compact('host', 'customer'));
        $rand = rand(0, 99999999999999);

        $path = 'pdf/';
        $fileName = $rand . '.' . 'pdf';
        $pdf->save($path . '/' . $fileName);

        return redirect('/pdf/' . $fileName);
        // return  $pdf->stream($fileName,array('Attachment'=>0));


// download PDF file with download method
        // return $pdf->download('pdf_report.pdf');
    }

    public function downloadd($id)
    {

        $customer = Customer::find($id);
        $email = $customer->email;

        $idd = base64_encode($id);

        $host = 'https://' . \request()->getHost() . "/report/$idd";
        $pdf = \PDF::loadView('pdf.report', compact('host', 'customer'));


// download PDF file with download method
        return $pdf->download('pdf_report.pdf');


        return back();

    }

    public function release_send($id)
    {

        $customer = Customer::with('priceList')->find($id);

        $customer->step = 5;

        $customer->update();


        $email = $customer->email;
        $rand2 = rand(00000, 99999);
        $idd = base64_encode($id);

        $host = 'https://' . \request()->getHost() . "/report/$idd?id=$rand2";
        $pdf = \PDF::loadView('pdf.report', compact('host', 'customer'));
        $rand = rand(0, 99999999999999);
        $path = 'pdf/';
        $fileName = $rand . '.' . 'pdf';
        $pdf->save($path . '/' . $fileName);
        Mail::to($email)->send(new result($rand));

        //   dispatch(new MatchSendEmail($id));


        return back()->with('success', 'Release send successfully');

    }

    public function release_send_notemail($id)
    {

        $customer = Customer::with('priceList')->find($id);

        $customer->step = 5;

        $customer->update();


        return back()->with('success', 'Status updated successfully');
    }

    public function released(Request $request)
    {


        $search =  $request->input('q');
        $ind = intval( $request->input('q'))-3000;

        if($search!=""){

            $customer = Customer::where(function ($query) use ($search,$ind){
                $query->where(\DB::raw("concat(name, ' ', middle_name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere(\DB::raw("concat(name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('test_type', 'like', '%'.$search.'%')
                    ->orWhere('id', 'like', '%'.$ind.'%')
                    ->orWhere('date', 'like', '%'.$search.'%')
                    ->orWhere('payment_amount', 'like', '%'.$search.'%')
                    ->orWhere('display_status', 'like', '%'.$search.'%');
            })
                ->where('step', 5)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')
                ->paginate(50);
            //$customer->appends(['q' => $search]);
        }
        else{
            $customer =Customer::where('step', 5)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')
                ->paginate(50);
        }

        //$customer = Customer::where('step', 5)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')->get();

        return view('orders.Released', compact('customer'));

    }


    public function date_released(Request $request, $id)
    {


        $customer = Customer::find($id);
        $customer->date = $request->release_date;
        $customer->payment_date = $request->payment_date;
        $customer->created_at = $request->created_at;
        $customer->display_status = $request->result;
        $customer->update();
        return back()->with('success', 'Release date updated successfully');


    }
}

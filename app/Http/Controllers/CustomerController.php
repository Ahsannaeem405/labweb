<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::where('step',1)->get();
        return view('customer.view_customer', compact('customer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cus = new Customer();
        $cus->name =$request->firstname;
        $cus->email =$request->email ;
        $cus->address =$request->address;
        $cus->phone =$request->phone;

        $cus->dob =$request->dob;
        $cus->gender =$request->gender;

        $cus->passport =$request->passport;

        $cus->step = 1;

        $cus->status = 'Verified';
        $cus->added_by = Auth::user()->id;
        $cus->save();
        return back()->with('success', 'Added Successfully');

    }

    public function detail_save(Request $request){
        dd($request);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function view(Customer $customer)
    {
        $customer = Customer::where('step',1)->get();
        return view('customer.view_customer2', compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer, $id)
    {

        $cus = Customer::find($id);
        return view('customer.edit_customer', compact('cus'));


            // dd($id);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

         $cus = Customer::find($request->id);

        $cus->name =$request->firstname;
        $cus->email =$request->email ;
        $cus->address =$request->address;
        $cus->phone =$request->phone;
        $cus->dob =$request->dob;
        $cus->gender =$request->gender;

        $cus->passport =$request->passport;

        $cus->save();
        return back()->with('success', 'updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}

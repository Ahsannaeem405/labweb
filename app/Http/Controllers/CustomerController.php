<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Customer_detail;
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
        $cus_detail = new Customer_detail();
        $cus_detail->name =  $request->name;
        $cus_detail->secondname =  $request->secondname;
        $cus_detail->type =  $request->type;
        $cus_detail->surname =  $request->surname;
        $cus_detail->phone =  $request->phone;
        $cus_detail->datee =  $request->date;
        $cus_detail->passport =  $request->passport;
        $cus_detail->Fever =  $request->Fever;
        $cus_detail->Cough =  $request->Cough;
        $cus_detail->Throat =  $request->Throat;
        $cus_detail->breathing =  $request->breathing;
        $cus_detail->Abdominal =  $request->Abdominal;
        $cus_detail->Chills =  $request->Chills;
        $cus_detail->Headache =  $request->Headache;
        $cus_detail->Muscle =  $request->Muscle;
        $cus_detail->Fatigue =  $request->Fatigue;
        $cus_detail->Runny =  $request->Runny;
        $cus_detail->Vomiting =  $request->Vomiting;
        $cus_detail->Diarrhea =  $request->Diarrhea;
        $cus_detail->Loss_of_smell =  $request->Loss_of_smell;
        $cus_detail->Loss_of_taste =  $request->Loss_of_taste;
        $cus_detail->specify =  $request->specify;
        $cus_detail->symptoms =  $request->symptoms;
        $cus_detail->Select_the_test =  $request->Select_the_test;
        $cus_detail->address =  $request->address;
        $cus_detail->address2 =  $request->address2;
        $cus_detail->town =  $request->town;
        $cus_detail->zip =  $request->zip;
        $cus_detail->Province =  $request->Province;
        $cus_detail->Country =  $request->Country;
        $cus_detail->email =  $request->email;
        $cus_detail->gender =  $request->gender;
        $cus_detail->signature =  $request->signature;
        $cus_detail->save();
return back();
        // dd($request);

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
    public function update_adult(Request $request){
        $cus_detail=Customer_detail::find($request->id);
        $cus_detail->name =  $request->name;
            $cus_detail->secondname =  $request->secondname;
            $cus_detail->surname =  $request->surname;
            $cus_detail->phone =  $request->phone;
            $cus_detail->datee =  $request->datee;
            $cus_detail->passport =  $request->passport;
            $cus_detail->Fever =  $request->Fever;
            $cus_detail->Cough =  $request->Cough;
            $cus_detail->Throat =  $request->Throat;
            $cus_detail->breathing =  $request->breathing;
            $cus_detail->Abdominal =  $request->Abdominal;
            $cus_detail->Chills =  $request->Chills;
            $cus_detail->Headache =  $request->Headache;
            $cus_detail->Muscle =  $request->Muscle;
            $cus_detail->Fatigue =  $request->Fatigue;
            $cus_detail->Runny =  $request->Runny;
            $cus_detail->Vomiting =  $request->Vomiting;
            $cus_detail->Diarrhea =  $request->Diarrhea;
            $cus_detail->Loss_of_smell =  $request->Loss_of_smell;
            $cus_detail->Loss_of_taste =  $request->Loss_of_taste;
            $cus_detail->specify =  $request->specify;
            $cus_detail->symptoms =  $request->symptoms;
            $cus_detail->Select_the_test =  $request->Select_the_test;
            $cus_detail->address =  $request->address;
            $cus_detail->address2 =  $request->address2;
            $cus_detail->town =  $request->town;
            $cus_detail->zip =  $request->zip;
            $cus_detail->Province =  $request->Province;
            $cus_detail->Country =  $request->Country;
            $cus_detail->email =  $request->email;
            $cus_detail->gender2 =  $request->gender2;
            $cus_detail->signature =  $request->signature;


            $cus_detail->save();
        return back()->with('success', 'Updated Successfully');

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

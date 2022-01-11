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
        $customer = Customer::where('step', 1)->get();
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
        $cus->name = $request->firstname;
        $cus->email = $request->email;
        $cus->address = $request->address;
        $cus->phone = $request->phone;

        $cus->dob = $request->dob;
        $cus->gender = $request->gender;

        $cus->passport = $request->passport;

        $cus->step = 1;

        $cus->status = 'Verified';
        $cus->added_by = Auth::user()->id;
        $cus->save();
        return back()->with('success', 'Added Successfully');
    }

    public function detail_save(Request $request)
    {

    //    dd($request  );


        if ($request->type == "adult") {
            $cus_detail = new Customer_detail();
            $cus_detail->name =  $request->namea;
            $cus_detail->secondname =  $request->secondnamea;
            $cus_detail->type =  $request->type;
            $cus_detail->surname =  $request->surnamea;
            $cus_detail->phone =  $request->phonea;
            $cus_detail->datee =  $request->datea;
            $cus_detail->passport =  $request->passporta;
            $cus_detail->Fever =  $request->Fevera;
            $cus_detail->Cough =  $request->Cougha;
            $cus_detail->Nausea =  $request->Nauseaa;
            $cus_detail->othre_specify =  $request->othre_specifya;


            $cus_detail->Throat =  $request->Throata;
            $cus_detail->breathing =  $request->breathinga;
            $cus_detail->Abdominal =  $request->Abdominala;
            $cus_detail->Chills =  $request->Chillsa;
            $cus_detail->Headache =  $request->Headachea;
            $cus_detail->Muscle =  $request->Musclea;
            $cus_detail->Fatigue =  $request->Fatiguea;
            $cus_detail->Runny =  $request->Runnya;
            $cus_detail->Vomiting =  $request->Vomitinga;
            $cus_detail->Diarrhea =  $request->Diarrheaa;
            $cus_detail->Loss_of_smell =  $request->Loss_of_smella;
            $cus_detail->Loss_of_taste =  $request->Loss_of_tastea;
            $cus_detail->specify =  $request->specifya;
            $cus_detail->symptoms =  $request->symptomsa;
            $cus_detail->Select_the_test =  $request->Select_the_testa;
            $cus_detail->address =  $request->addressa;
            $cus_detail->address2 =  $request->address2a;
            $cus_detail->town =  $request->towna;
            $cus_detail->zip =  $request->zipa;
            $cus_detail->Province =  $request->Provincea;
            $cus_detail->Country =  $request->Countrya;
            $cus_detail->email =  $request->emaila;
            $cus_detail->gender =  $request->gendera;
            $cus_detail->signature =  $request->signature;
            $cus_detail->save();
        }

        // dd(123);

// dd($request);
        $j = 0;
        for ($i = 1; $i <= intval($request->totalCount); $i++) {

            $type = 'type_' . $i;
            if ($request->$type == "minor") {

                $name = 'name_' . $i;
                $secondname = 'secondname_' . $i;
                $surname = 'surname_' . $i;
                $phone = 'phone_' . $i;
                $Fgender = 'Fgender_' . $i;
                $date = 'date_' . $i;
                $passport    = 'passport_' . $i;
                $Fever = 'fever_' . $i;
                $Cough = 'Cough_' . $i;
                $Throat = 'Throat_' . $i;
                $breathing = 'breathing_' . $i;
                $Nausea = 'Nausea_' . $i;
                $Abdominal = 'Abdominal__' . $i;
                $Chills = 'Chills_' . $i;
                $Headache = 'Headache_' . $i;
                $Muscle = 'Muscle_' . $i;
                $Fatigue = 'Fatigue_' . $i;
                $Runny = 'Runny_' . $i;
                $Select_the_test = 'Select_the_test_' . $i;
                $othre_specify = 'othre_specify_' . $i;


                $Diarrhea = 'Diarrhea_' . $i;
                $Vomiting = 'Vomiting_' . $i;
                $Loss_of_smell = 'Loss_of_smell_' . $i;
                $Loss_of_taste = 'Loss_of_taste_' . $i;
                $specify = 'specify_' . $i;
                $symptoms = 'symptoms_' . $i;
                $address = 'address_' . $i;
                $address2 = 'address2_' . $i;
                $town = 'town_' . $i;
                $zip = 'zip_' . $i;
                $Province = 'Province_' . $i;
                $Country = 'Country_' . $i;
                $email = 'email_' . $i;
                $gender = 'gender_' . $i;
                $Parent_name = 'Parent_name_' . $i;
                $Parent_secondname = 'Parent_secondname_' . $i;
                $Parent_surname = 'Parent_surname_' . $i;
                $Parent_phone = 'Parent_phone_' . $i;
                $Parent_dob = 'Parent_dob_' . $i;


                $cus_detail = new Customer_detail();
                $cus_detail->name = $request->$name;
                $cus_detail->secondname =  $request->$secondname;
                $cus_detail->type =  $request->$type;
                $cus_detail->surname =  $request->$surname;
                $cus_detail->phone =  $request->$phone;
                $cus_detail->datee =  $request->$date;
                $cus_detail->passport =  $request->$passport;
                $cus_detail->Fever =  $request->$Fever;
                $cus_detail->Cough =  $request->$Cough;
                $cus_detail->Throat =  $request->$Throat;
                $cus_detail->gender2 =  $request->$Fgender;
                $cus_detail->Nausea =  $request->$Nausea;
                $cus_detail->Select_the_test =  $request->$Select_the_test;
                $cus_detail->othre_specify =  $request->$othre_specify;

                // Select_the_test
                $cus_detail->breathing =  $request->$breathing;
                $cus_detail->Abdominal =  $request->$Abdominal;
                $cus_detail->Chills =  $request->$Chills;
                $cus_detail->Headache =  $request->$Headache;
                $cus_detail->Muscle =  $request->$Muscle;
                $cus_detail->Fatigue =  $request->$Fatigue;
                $cus_detail->Runny =  $request->$Runny;
                $cus_detail->Vomiting =  $request->$Vomiting;
                $cus_detail->Diarrhea =  $request->$Diarrhea;
                $cus_detail->Loss_of_smell =  $request->$Loss_of_smell;
                $cus_detail->Loss_of_taste =  $request->$Loss_of_taste;
                $cus_detail->specify =  $request->$specify;
                $cus_detail->symptoms =  $request->$symptoms;
                $cus_detail->address =  $request->$address;
                $cus_detail->address2 =  $request->$address2;
                $cus_detail->town =  $request->$town;
                $cus_detail->zip =  $request->$zip;
                $cus_detail->Province =  $request->$Province;
                $cus_detail->Country =  $request->$Country;
                $cus_detail->email =  $request->$email;
                $cus_detail->gender =  $request->$gender;
                $cus_detail->Parent_name =  $request->$Parent_name;
                $cus_detail->Parent_secondname =  $request->$Parent_secondname;
                $cus_detail->Parent_surname =  $request->$Parent_surname;
                $cus_detail->Parent_phone =  $request->$Parent_phone;
                $cus_detail->Parent_dob =  $request->$Parent_dob;
                $cus_detail->signature =  $request->signature;


                $cus_detail->save();
            }
        }
        // dd(22);

        return back();
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
        $customer = Customer::where('step', 1)->get();
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

        $cus->name = $request->firstname;
        $cus->email = $request->email;
        $cus->address = $request->address;
        $cus->phone = $request->phone;
        $cus->dob = $request->dob;
        $cus->gender = $request->gender;

        $cus->passport = $request->passport;

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

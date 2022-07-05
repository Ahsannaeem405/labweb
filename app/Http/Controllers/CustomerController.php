<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customer;
use App\Models\Customer_detail;
use App\Models\Document;
use App\Models\State;
use App\Models\testList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        session(['lastActivityTime' => now()]);

    }


    public function logoutUser()
    {
        \Session::flush();
        Auth::logout();
        return redirect('/login');
    }

    public function cancel_order($id)
    {
        $cus = Customer::find($id);
        $cus->display_status = 'Canceled';

        $cus->save();
        return back()->with('success', 'Successfully canceled');
    }

    public function pdff(Request $request)
    {

        $cus = Customer::find(8);

        $state = State::all();

        $Country = Country::all();

        return view('pdf.customer_pdf', compact('cus', 'state', 'Country'));
    }


    public function order_approve($id, $cusid)
    {

        $role = Auth::user()->role;
        $customer_det = Customer_detail::where('customer_id', $id)->first();
        $customer = Customer::find($id);
        $cus = new Customer();
        $cus->name = $customer->name;
        $cus->middle_name = $customer->middle_name;
        $cus->last_name = $customer->last_name;
        $cus->email = $customer_det->email;
        $cus->dob = $customer->dob;
        $cus->phone = $customer_det->phone;
        $cus->address = $customer_det->address;
        $cus->passport = $customer_det->passport;
        $cus->gender = $customer_det->gender2;
        $cus->status = 'Verified';
        $cus->step = 2;
        $cus->test_type = $customer_det->Select_the_test;
        $cus->order_date = Carbon::now();
        $cus->order_id = rand(0000, 9999);
        $cus->main_status = 'order';

        $cus->address2 = $customer->address2;
        $cus->town = $customer->town;
        $cus->zip = $customer->zip;
        $cus->state = $customer->state;
        $cus->country = $customer->country;


        $cus->save();


        $cuss = Customer::find($id);
        if ($cuss->duplicate == 1) {
            $cuss->delete();

        }

        if ($cuss->duplicate == 0) {
            $cuss->duplicate = 2;
            $cuss->update();

        }


        return redirect("$role/create/order/customer/$cusid");

    }


    public function index(Request $request)
    {

        $search = $request->input('q');
        $ind = intval($request->input('q'));

        if ($search != "") {
            $customer = Customer::where(function ($query) use ($search, $ind) {
                $query->where(\DB::raw("concat(name, ' ', middle_name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere(\DB::raw("concat(name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('dob', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%')
                    ->orWhere('id', 'like', '%' . $ind . '%');
            })
                ->where('step', 1)->where('status', 'Unverified')
                ->orderBy('id', 'desc')->paginate(50);
            //$customer->appends(['q' => $search]);
        } else {
            $customer = Customer::where('step', 1)->where('status', 'Unverified')->orderBy('id', 'desc')
                ->paginate(50);
        }


//        $customer = Customer::where('step', 1)->where('status', 'Unverified')->get();
        return view('customer.view_customer', compact('customer'));
    }

    public function verification($id)
    {

        $role = Auth::user()->role;

        $customer = Customer::find($id);

        $customer->status = 'Verified';

        $customer->update();
        return redirect("$role/view/customer")->with('success', 'Customer Verification successfully');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // $full_name = $request->firstname . " " . $request->middle_name . " " . $request->Last_name;
        $cus = new Customer();
        $cus->name = $request->firstname;
        $cus->middle_name = $request->middle_name;
        $cus->last_name = $request->Last_name;
        $cus->email = $request->email;
        $cus->address = $request->address;
        $cus->phone = $request->phone;

        $cus->dob = $request->dob;
        $cus->gender = $request->gender;

        $cus->passport = $request->passport;

        $cus->step = 1;

        $cus->status = 'Verified';
        $cus->added_by = Auth::user()->id;

        $cus->address2 = $request->address2;
        $cus->town = $request->town;
        $cus->zip = $request->zip;
        if ($request->Province == null) {
            $cus->state = $request->Provinced;
        } else {
            $cus->state = $request->Province;
        }
        $cus->country = $request->country;

        $cus->main_status = 'user';


        $cus->primary_ins = $request->primary_ins;
        $cus->secondary_ins = $request->secondary_ins;
        $cus->policy_holder_name1 = $request->policy_holder_name1;
        $cus->policy_holder_name2 = $request->policy_holder_name2;
        $cus->relationship_patient1 = $request->relationship_patient1;
        $cus->relationship_patient2 = $request->relationship_patient2;
        $cus->policy_holder_dob1 = $request->policy_holder_dob1;
        $cus->policy_holder_dob2 = $request->policy_holder_dob2;
        $cus->policy_member_id1 = $request->policy_member_id1;
        $cus->policy_member_id2 = $request->policy_member_id2;
        $cus->group1 = $request->group1;
        $cus->group2 = $request->group2;


        $cus->save();
        return back()->with('success', 'Added Successfully');
    }

    public function detail_save(Request $request)
    {


        $host = 'https://' . \request()->getHost() . "/customer_pdf/";


        if ($request->type == "adult") {

            $find = Customer::where('email', $request->emaila)->where('name', $request->namea)->where('passport', $request->passporta)->where('dob', $request->datea)->first();

            $customer = new Customer();
            $customer->name = $request->namea;
            $customer->middle_name = $request->secondnamea;
            $customer->last_name = $request->surnamea;

            $customer->email = $request->emaila;


            $customer->address = $request->addressa;
            $customer->address2 = $request->address2a;
            $customer->town = $request->towna;
            $customer->zip = $request->zipa;
            if ($request->Provincea2 == null) {
                $customer->state = $request->Provincea;
            } else {
                $customer->state = $request->Provincea2;
            }
            $customer->country = $request->Countrya;


            $customer->phone = $request->phonea;
            $customer->dob = $request->datea;
            $customer->passport = $request->passporta;
            $customer->status = 'Unverified';
            $customer->step = 1;
            $customer->uniqueid = rand(0000, 9999);
            $customer->gender = $request->Fgender;
            if ($find) {
                $customer->duplicate = 1;
            }
            $customer->save();


            $cus_detail = new Customer_detail();
            $cus_detail->CruiseLine = $request->CruiseLinea;
            $cus_detail->F_Cruise = $request->F_Cruisea;
            $cus_detail->Destination = $request->Destinationa;
            $cus_detail->name = $request->namea;
            $cus_detail->secondname = $request->secondnamea;
            $cus_detail->type = $request->type;
            $cus_detail->surname = $request->surnamea;
            $cus_detail->phone = $request->phonea;
            $cus_detail->datee = $request->datea;
            $cus_detail->passport = $request->passporta;
            $cus_detail->Fever = $request->Fevera;
            $cus_detail->Cough = $request->Cougha;
            $cus_detail->Nausea = $request->Nauseaa;
            $cus_detail->othre_specify = $request->othre_specifya;
            $cus_detail->gender2 = $request->Fgender;
            $cus_detail->Throat = $request->Throata;
            $cus_detail->breathing = $request->breathinga;
            $cus_detail->Abdominal = $request->Abdominala;
            $cus_detail->Chills = $request->Chillsa;
            $cus_detail->Headache = $request->Headachea;
            $cus_detail->Muscle = $request->Musclea;
            $cus_detail->Fatigue = $request->Fatiguea;
            $cus_detail->Runny = $request->Runnya;
            $cus_detail->Vomiting = $request->Vomitinga;
            $cus_detail->Diarrhea = $request->Diarrheaa;
            $cus_detail->Loss_of_smell = $request->Loss_of_smella;
            $cus_detail->Loss_of_taste = $request->Loss_of_tastea;
            $cus_detail->specify = $request->specifya;
            $cus_detail->symptoms = $request->symptomsa;
            $cus_detail->Select_the_test = $request->Select_the_testa;
            $cus_detail->address = $request->addressa;
            $cus_detail->address2 = $request->address2a;
            $cus_detail->town = $request->towna;
            $cus_detail->zip = $request->zipa;
            if ($request->Provincea2 == null) {
                $cus_detail->Province = $request->Provincea;
            } else {
                $cus_detail->Province = $request->Provincea2;
            }
            $cus_detail->Country = $request->Countrya;
            $cus_detail->email = $request->emaila;
            $cus_detail->gender = $request->gendera;
            $cus_detail->signature = $request->SingsLinka;
            $cus_detail->customer_id = $customer->id;

            $cus_detail->primary_ins = $request->primary_ins;
            $cus_detail->secondary_ins = $request->secondary_ins;
            $cus_detail->policy_holder_name1 = $request->policy_holder_name1;
            $cus_detail->policy_holder_name2 = $request->policy_holder_name2;
            $cus_detail->relationship_patient1 = $request->relationship_patient1;
            $cus_detail->relationship_patient2 = $request->relationship_patient2;
            $cus_detail->policy_holder_dob1 = $request->policy_holder_dob1;
            $cus_detail->policy_holder_dob2 = $request->policy_holder_dob2;
            $cus_detail->policy_member_id1 = $request->policy_member_id1;
            $cus_detail->policy_member_id2 = $request->policy_member_id2;
            $cus_detail->group1 = $request->group1;
            $cus_detail->group2 = $request->group2;


            $cus_detail->save();


            $request2 = $request;
            $traveling = $request->traveling;
            $insurance = $request->insurance;

            $pdf = PDf::loadView('pdf.customer_pdf', compact('request2', 'insurance', 'traveling'));
            $rand = rand(0, 99999999999999);
            $path = 'uploads/stock/';

            $fileName = $rand . '.' . 'pdf';

            $pdf->save($path . '/' . $fileName);

            $document = new Document();
            $document->email = $request->emaila;
            $document->path = $fileName;
            $document->save();
        }

        if ($request->type == "adultminor") {

            $find = Customer::where('email', $request->email)->where('name', $request->namea)->where('passport', $request->passporta)->where('dob', $request->datea)->first();

            //if record exists

            $customer = new Customer();
            $customer->name = $request->namea;
            $customer->middle_name = $request->secondnamea;
            $customer->last_name = $request->surnamea;


            $customer->email = $request->email;


            $customer->address = $request->address;
            $customer->address2 = $request->address2;
            $customer->town = $request->town;
            $customer->zip = $request->zip;
            if ($request->Provinced == null) {
                $customer->state = $request->Province;
            } else {
                $customer->state = $request->Provinced;
            }
            $customer->country = $request->Country;

            $customer->phone = $request->phonea;
            $customer->dob = $request->datea;
            $customer->passport = $request->passporta;
            $customer->status = 'Unverified';
            $customer->step = 1;
            $customer->uniqueid = rand(0000, 9999);
            $customer->gender = $request->Fgender;
            if ($find) {
                $customer->duplicate = 1;
            }
            $customer->save();


            $cus_detail = new Customer_detail();
            $cus_detail->CruiseLine = $request->CruiseLine;
            $cus_detail->F_Cruise = $request->F_Cruise;
            $cus_detail->Destination = $request->Destination;

            $cus_detail->name = $request->namea;
            $cus_detail->secondname = $request->secondnamea;
            $cus_detail->type = 'adult';
            $cus_detail->surname = $request->surnamea;
            $cus_detail->phone = $request->phonea;
            $cus_detail->datee = $request->datea;
            $cus_detail->passport = $request->passporta;
            $cus_detail->Fever = $request->Fevera;
            $cus_detail->Cough = $request->Cougha;
            $cus_detail->Nausea = $request->Nauseaa;
            $cus_detail->othre_specify = $request->othre_specifya;
            $cus_detail->gender2 = $request->Fgender;
            $cus_detail->Throat = $request->Throata;
            $cus_detail->breathing = $request->breathinga;
            $cus_detail->Abdominal = $request->Abdominala;
            $cus_detail->Chills = $request->Chillsa;
            $cus_detail->Headache = $request->Headachea;
            $cus_detail->Muscle = $request->Musclea;
            $cus_detail->Fatigue = $request->Fatiguea;
            $cus_detail->Runny = $request->Runnya;
            $cus_detail->Vomiting = $request->Vomitinga;
            $cus_detail->Diarrhea = $request->Diarrheaa;
            $cus_detail->Loss_of_smell = $request->Loss_of_smella;
            $cus_detail->Loss_of_taste = $request->Loss_of_tastea;
            $cus_detail->specify = $request->specifya;
            $cus_detail->symptoms = $request->symptomsa;
            $cus_detail->Select_the_test = $request->Select_the_testa;
            $cus_detail->address = $request->address;
            $cus_detail->address2 = $request->address2;
            $cus_detail->town = $request->town;
            $cus_detail->zip = $request->zip;
            if ($request->Provinced == null) {
                $cus_detail->Province = $request->Province;
            } else {
                $cus_detail->Province = $request->Provinced;
            }
            $cus_detail->Country = $request->Country;
            $cus_detail->email = $request->email;
            $cus_detail->gender = $request->gender;
            $cus_detail->signature = $request->SingsLink;
            $cus_detail->customer_id = $customer->id;


            $cus_detail->primary_ins = $request->primary_ins;
            $cus_detail->secondary_ins = $request->secondary_ins;
            $cus_detail->policy_holder_name1 = $request->policy_holder_name1;
            $cus_detail->policy_holder_name2 = $request->policy_holder_name2;
            $cus_detail->relationship_patient1 = $request->relationship_patient1;
            $cus_detail->relationship_patient2 = $request->relationship_patient2;
            $cus_detail->policy_holder_dob1 = $request->policy_holder_dob1;
            $cus_detail->policy_holder_dob2 = $request->policy_holder_dob2;
            $cus_detail->policy_member_id1 = $request->policy_member_id1;
            $cus_detail->policy_member_id2 = $request->policy_member_id2;
            $cus_detail->group1 = $request->group1;
            $cus_detail->group2 = $request->group2;

            $cus_detail->save();


            $request2 = $request;

            $traveling = $request->traveling;
            $insurance = $request->insurance;

            $pdf = PDf::loadView('pdf.customer_pdf', compact('request2', 'insurance', 'traveling'));
            $rand = rand(0, 99999999999999);
            $path = 'uploads/stock/';

            $fileName = $rand . '.' . 'pdf';


            $pdf->save($path . '/' . $fileName);

            $document = new Document();
            $document->email = $request->email;
            $document->path = $fileName;
            $document->save();
        }


        $j = 0;
        for ($i = 1; $i <= intval($request->totalCount); $i++) {

            $type = 'type_' . $i;
            if ($request->$type == "minor") {


                $name = 'name_' . $i;
                $passport = 'passport_' . $i;
                $date = 'date_' . $i;


                $secondname = 'secondname_' . $i;
                $surname = 'surname_' . $i;
                $phone = 'phone_' . $i;
                $Fgender = 'Fgender_' . $i;


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


                $Diarrhea = 'Diarrhea_' . $i;
                $Vomiting = 'Vomiting_' . $i;
                $Loss_of_smell = 'Loss_of_smell_' . $i;
                $Loss_of_taste = 'Loss_of_taste_' . $i;
                $specify = 'specify_' . $i;
                $symptoms = 'symptoms_' . $i;

                $address = 'address';
                $address2 = 'address2';
                $town = 'town';
                $zip = 'zip';
                $Province = 'Province';
                $Provinced = 'Provinced';
                if ($request->$Provinced == null) {
                    $Province = 'Province';
                } else {
                    $Province = 'Provinced';
                }
                $email = 'email';
                $Country = 'Country';
                $SingsLink = 'SingsLink';
                $gender = 'gender';
                $othre_specify = 'othre_specify';
                $Parent_name = 'Parent_name';
                $Parent_secondname = 'Parent_secondname';
                $Parent_surname = 'Parent_surname';
                $Parent_phone = 'Parent_phone';
                $Parent_dob = 'Parent_dob';
                $CruiseLine = 'CruiseLine';
                $F_Cruise = 'F_Cruise';
                $Destination = 'Destination';


                $find = Customer::where('email', $request->$email)->where('name', $request->$name)->where('passport', $request->$passport)->where('dob', $request->$date)->first();


                $customer = new Customer();
                $customer->name = $request->$name;

                $customer->middle_name = $request->$secondname;

                $customer->last_name = $request->$surname;

                $customer->email = $request->$email;


                $customer->address = $request->$address;
                $customer->address2 = $request->$address2;
                $customer->town = $request->$town;
                $customer->zip = $request->$zip;
                $customer->state = $request->$Province;
                $customer->country = $request->$Country;


                $customer->phone = $request->$phone;
                $customer->dob = $request->$date;
                $customer->passport = $request->$passport;
                $customer->status = 'Unverified';
                $customer->uniqueid = rand(0000, 9999);
                $customer->gender = $request->$Fgender;
                $customer->step = 1;

                if ($find) {
                    $customer->duplicate = 1;
                }
                $customer->save();


                $cus_detail = new Customer_detail();

                $cus_detail->CruiseLine = $request->$CruiseLine;
                $cus_detail->F_Cruise = $request->$F_Cruise;
                $cus_detail->Destination = $request->$Destination;


                $cus_detail->name = $request->$name;
                $cus_detail->secondname = $request->$secondname;
                $cus_detail->type = $request->$type;
                $cus_detail->surname = $request->$surname;
                $cus_detail->phone = $request->$phone;
                $cus_detail->datee = $request->$date;
                $cus_detail->passport = $request->$passport;
                $cus_detail->Fever = $request->$Fever;
                $cus_detail->Cough = $request->$Cough;
                $cus_detail->Throat = $request->$Throat;
                $cus_detail->gender2 = $request->$Fgender;
                $cus_detail->Nausea = $request->$Nausea;
                $cus_detail->Select_the_test = $request->$Select_the_test;
                $cus_detail->othre_specify = $request->$othre_specify;
                $cus_detail->breathing = $request->$breathing;
                $cus_detail->Abdominal = $request->$Abdominal;
                $cus_detail->Chills = $request->$Chills;
                $cus_detail->Headache = $request->$Headache;
                $cus_detail->Muscle = $request->$Muscle;
                $cus_detail->Fatigue = $request->$Fatigue;
                $cus_detail->Runny = $request->$Runny;
                $cus_detail->Vomiting = $request->$Vomiting;
                $cus_detail->Diarrhea = $request->$Diarrhea;
                $cus_detail->Loss_of_smell = $request->$Loss_of_smell;
                $cus_detail->Loss_of_taste = $request->$Loss_of_taste;
                $cus_detail->specify = $request->$specify;
                $cus_detail->symptoms = $request->$symptoms;
                $cus_detail->address = $request->$address;
                $cus_detail->address2 = $request->$address2;
                $cus_detail->town = $request->$town;
                $cus_detail->zip = $request->$zip;
                $cus_detail->Province = $request->$Province;
                $cus_detail->Country = $request->$Country;
                $cus_detail->email = $request->$email;
                $cus_detail->gender = $request->$gender;
                $cus_detail->Parent_name = $request->$Parent_name;
                $cus_detail->Parent_secondname = $request->$Parent_secondname;
                $cus_detail->Parent_surname = $request->$Parent_surname;
                $cus_detail->Parent_phone = $request->$Parent_phone;
                $cus_detail->Parent_dob = $request->$Parent_dob;
                $cus_detail->signature = $request->$SingsLink;
                $cus_detail->customer_id = $customer->id;


                $cus_detail->primary_ins = $request->primary_ins;
                $cus_detail->secondary_ins = $request->secondary_ins;
                $cus_detail->policy_holder_name1 = $request->policy_holder_name1;
                $cus_detail->policy_holder_name2 = $request->policy_holder_name2;
                $cus_detail->relationship_patient1 = $request->relationship_patient1;
                $cus_detail->relationship_patient2 = $request->relationship_patient2;
                $cus_detail->policy_holder_dob1 = $request->policy_holder_dob1;
                $cus_detail->policy_holder_dob2 = $request->policy_holder_dob2;
                $cus_detail->policy_member_id1 = $request->policy_member_id1;
                $cus_detail->policy_member_id2 = $request->policy_member_id2;
                $cus_detail->group1 = $request->group1;
                $cus_detail->group2 = $request->group2;


                $cus_detail->save();


                $request2 = Customer_detail::find($cus_detail->id);
                $traveling = $request->traveling;
                $insurance = $request->insurance;
                $pdf = PDf::loadView('pdf.customer_pdf', compact('request2', 'traveling', 'insurance'));
                $rand = rand(0, 99999999999999);
                $path = 'uploads/stock/';

                $fileName = $rand . '.' . 'pdf';


                $pdf->save($path . '/' . $fileName);

                $document = new Document();
                $document->email = $request->$email;
                $document->path = $fileName;
                $document->save();
            }

        }


        return back()->with('success', 'Request Submitted Successfully');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function view(Customer $customer, Request $request)
    {
        $search = $request->input('q');
        $ind = intval($request->input('q')) - 18910;

        if ($search != "") {

            $customer = Customer::where(function ($query) use ($search, $ind) {
                $query->where(\DB::raw("concat(name, ' ', middle_name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere(\DB::raw("concat(name, ' ', last_name)"), 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('dob', 'like', '%' . $search . '%')
                    ->orWhere('passport', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%')
                    ->orWhere('id', 'like', '%' . $ind . '%');
            })
                ->where('status', 'Verified')->wherein('duplicate', [0, 2])->where('main_status', 'user')
                ->orderBy('id', 'desc')->paginate(50);
            //$customer->appends(['q' => $search]);
        } else {
            $customer = Customer::where('status', 'Verified')->wherein('duplicate', [0, 2])->where('main_status', 'user')->orderBy('id', 'desc')
                ->paginate(50);
        }

        $testList = testList::all();
        return view('customer.view_customer2', compact('customer', 'testList'));
    }

    public function update_adult(Request $request)
    {


        $cus_detail = Customer_detail::find($request->id);
        $this->updateAllData($cus_detail->customer_id, $request);


        $customer = Customer::find($cus_detail->customer_id);

        $customer->name = $request->name;
        $customer->middle_name = $request->secondname;
        $customer->last_name = $request->surname;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->dob = $request->datee;
        $customer->passport = $request->passport;

        $customer->gender = $request->gender;
        $customer->status = 'Verified';

        $customer->save();


        $cus_detail->name = $request->name;


        $cus_detail->secondname = $request->secondname;
        $cus_detail->surname = $request->surname;
        $cus_detail->phone = $request->phone;
        $cus_detail->datee = $request->datee;
        $cus_detail->passport = $request->passport;
        $cus_detail->Fever = $request->Fever;
        $cus_detail->Cough = $request->Cough;
        $cus_detail->Throat = $request->Throat;
        $cus_detail->breathing = $request->breathing;
        $cus_detail->Abdominal = $request->Abdominal;
        $cus_detail->Chills = $request->Chills;
        $cus_detail->Headache = $request->Headache;
        $cus_detail->Muscle = $request->Muscle;
        $cus_detail->Fatigue = $request->Fatigue;
        $cus_detail->Runny = $request->Runny;
        $cus_detail->Vomiting = $request->Vomiting;
        $cus_detail->Diarrhea = $request->Diarrhea;
        $cus_detail->Loss_of_smell = $request->Loss_of_smell;
        $cus_detail->Loss_of_taste = $request->Loss_of_taste;
        $cus_detail->specify = $request->specify;
        $cus_detail->symptoms = $request->symptoms;
        $cus_detail->Select_the_test = $request->Select_the_test;
        $cus_detail->address = $request->address;
        $cus_detail->address2 = $request->address2;
        $cus_detail->town = $request->town;
        $cus_detail->zip = $request->zip;
        $cus_detail->Province = $request->Province;
        $cus_detail->Country = $request->Country;
        $cus_detail->email = $request->email;
        $cus_detail->gender = $request->gender2;
        $cus_detail->gender2 = $request->gender;
        $cus_detail->Destination = $request->Destination;
        $cus_detail->F_Cruise = $request->F_Cruise;


        $cus_detail->CruiseLine = $request->CruiseLine;

        $cus_detail->primary_ins = $request->primary_ins;
        $cus_detail->secondary_ins = $request->secondary_ins;
        $cus_detail->policy_holder_name1 = $request->policy_holder_name1;
        $cus_detail->policy_holder_name2 = $request->policy_holder_name2;
        $cus_detail->relationship_patient1 = $request->relationship_patient1;
        $cus_detail->relationship_patient2 = $request->relationship_patient2;
        $cus_detail->policy_holder_dob1 = $request->policy_holder_dob1;
        $cus_detail->policy_holder_dob2 = $request->policy_holder_dob2;
        $cus_detail->policy_member_id1 = $request->policy_member_id1;
        $cus_detail->policy_member_id2 = $request->policy_member_id2;
        $cus_detail->group1 = $request->group1;
        $cus_detail->group2 = $request->group2;

        $cus_detail->save();

        return back()->with('success', 'Updated Successfully');
    }

    public function update_minor(Request $request)
    {

        $cus_detail = Customer_detail::find($request->id);
        $this->updateAllData($cus_detail->customer_id, $request);$this->updateAllData($cus_detail->customer_id, $request);

        $customer = Customer::find($cus_detail->customer_id);

        $customer->name = $request->name;
        $customer->middle_name = $request->secondname;
        $customer->last_name = $request->surname;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->dob = $request->datee;
        $customer->passport = $request->passport;
        $customer->status = 'Verified';
        $customer->gender = $request->gender;
        $customer->save();


        $cus_detail->name = $request->name;
        $cus_detail->secondname = $request->secondname;
        $cus_detail->surname = $request->surname;
        $cus_detail->phone = $request->phone;
        $cus_detail->datee = $request->datee;
        $cus_detail->passport = $request->passport;
        $cus_detail->Fever = $request->Fever;
        $cus_detail->Cough = $request->Cough;
        $cus_detail->Throat = $request->Throat;
        $cus_detail->breathing = $request->breathing;
        $cus_detail->Abdominal = $request->Abdominal;
        $cus_detail->Chills = $request->Chills;
        $cus_detail->Headache = $request->Headache;
        $cus_detail->Muscle = $request->Muscle;
        $cus_detail->Fatigue = $request->Fatigue;
        $cus_detail->Runny = $request->Runny;
        $cus_detail->Vomiting = $request->Vomiting;
        $cus_detail->Diarrhea = $request->Diarrhea;
        $cus_detail->Loss_of_smell = $request->Loss_of_smell;
        $cus_detail->Loss_of_taste = $request->Loss_of_taste;
        $cus_detail->specify = $request->specify;
        $cus_detail->symptoms = $request->symptoms;
        $cus_detail->Select_the_test = $request->Select_the_test;
        $cus_detail->address = $request->address;
        $cus_detail->address2 = $request->address2;
        $cus_detail->town = $request->town;
        $cus_detail->zip = $request->zip;
        $cus_detail->Province = $request->Province;
        $cus_detail->Country = $request->Country;
        $cus_detail->email = $request->email;
        $cus_detail->gender = $request->gender2;
        $cus_detail->gender2 = $request->gender;


        $cus_detail->Parent_name = $request->Parent_name;
        $cus_detail->Parent_secondname = $request->Parent_secondname;
        $cus_detail->Parent_surname = $request->Parent_surname;
        $cus_detail->Parent_phone = $request->Parent_phone;
        $cus_detail->Parent_dob = $request->Parent_dob;


        $cus_detail->Destination = $request->Destination;
        $cus_detail->F_Cruise = $request->F_Cruise;
        $cus_detail->CruiseLine = $request->CruiseLine;


        $cus_detail->primary_ins = $request->primary_ins;
        $cus_detail->secondary_ins = $request->secondary_ins;
        $cus_detail->policy_holder_name1 = $request->policy_holder_name1;
        $cus_detail->policy_holder_name2 = $request->policy_holder_name2;
        $cus_detail->relationship_patient1 = $request->relationship_patient1;
        $cus_detail->relationship_patient2 = $request->relationship_patient2;
        $cus_detail->policy_holder_dob1 = $request->policy_holder_dob1;
        $cus_detail->policy_holder_dob2 = $request->policy_holder_dob2;
        $cus_detail->policy_member_id1 = $request->policy_member_id1;
        $cus_detail->policy_member_id2 = $request->policy_member_id2;
        $cus_detail->group1 = $request->group1;
        $cus_detail->group2 = $request->group2;

        $cus_detail->save();


        return back()->with('success', 'Updated Successfully');
    }


    public function updateAllData($id, $request)
    {
        $customer = Customer::find($id);

        $allcus = Customer::where('email', $customer->email)->update([
            'name' => $request->name,
            'middle_name' => $request->secondname,
            'last_name' => $request->surname,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer, $id)
    {

        $cus = Customer::find($id);

        $Country = Country::all();
        //$f_name = explode(" ", $cus->name);

        $state = State::orderby('name')->where('country_id', 233)->get();


        return view('customer.edit_customer', compact('cus', 'Country', 'state'));


        // dd($id);
        //
    }

    public function view_order($id, $cusid)
    {

        $order = Customer::find($id);
        //  dd($order);
        $Country = Country::all();
        $state = State::all();
        $cus = Customer::find($id);


        $document = Document::where('email', $cus->email)->get();
        return view('customer.order2', compact('cusid', 'cus', 'Country', 'state', 'order', 'document'));
    }

    public function view_invoice($id, $cusid)
    {


        $order = Customer::where('id', $id)->where('step', '>', 1)->where('main_status', 'order')->first();

        $Country = Country::all();
        $state = State::all();
        $cus = Customer::find($id);
        $document = Document::where('email', $order->email)->get();
        return view('customer.order3', compact('cusid', 'cus', 'Country', 'state', 'order', 'document'));
    }


    public function verify_customer(Customer $customer, $id)
    {
        $Country = Country::all();
        // dd($Country);
        $state = State::all();
        $cus = Customer::find($id);
        return view('customer.verify_customer', compact('cus', 'Country', 'state'));
    }

    public function create_order($id)
    {
        $cus = Customer::find($id);

        $order = Customer::where('email', $cus->email)->where('status', 'Verified')->with('priceList')->get();
        $rand = $cus->uniqueid;
        $document = Document::where('email', $cus->email)->get();
        return view('customer.order', compact('cus', 'order', 'document', 'rand'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $full_name = $request->firstname . " " . $request->middle_name . " " . $request->Last_name;

        $cus = Customer::find($request->id);
        $this->updateAllData($cus->id, $request);
        $cus->name = $request->firstname;
        $cus->middle_name = $customer->middle_name;
        $cus->last_name = $customer->last_name;
        $cus->email = $request->email;
        $cus->address = $request->address;
        $cus->phone = $request->phone;
        $cus->dob = $request->dob;
        $cus->gender = $request->gender;

        $cus->passport = $request->passport;

        $cus->address2 = $request->address2;
        $cus->town = $request->town;
        $cus->zip = $request->zip;
        if ($request->Province == null) {
            $cus->state = $request->Provinced;
        } else {
            $cus->state = $request->Province;
        }
        $cus->country = $request->country;


        $cus->primary_ins = $request->primary_ins;
        $cus->secondary_ins = $request->secondary_ins;
        $cus->policy_holder_name1 = $request->policy_holder_name1;
        $cus->policy_holder_name2 = $request->policy_holder_name2;
        $cus->relationship_patient1 = $request->relationship_patient1;
        $cus->relationship_patient2 = $request->relationship_patient2;
        $cus->policy_holder_dob1 = $request->policy_holder_dob1;
        $cus->policy_holder_dob2 = $request->policy_holder_dob2;
        $cus->policy_member_id1 = $request->policy_member_id1;
        $cus->policy_member_id2 = $request->policy_member_id2;
        $cus->group1 = $request->group1;
        $cus->group2 = $request->group2;


        $cus->save();
        return back()->with('success', 'updated Successfully');
    }

    public function cusdel($id)
    {
        $del = Customer::find($id)->delete();
        return back()->with('success', 'customer deleted successfully');
    }

    public function place_order($id)
    {
        $cus = Customer::find($id);
        $testList = testList::all();
        return view('customer.placeOrder', compact('cus', 'testList'));
    }

    public function place_order_submit(Request $request, $id)
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


        $role = Auth::user()->role;
        if ($request->choice) {

            for ($i = 0; $i < count($request->choice); $i++) {

                $cus = new Customer();

                $cus->name = $customer->name;
                $cus->middle_name = $customer->middle_name;
                $cus->last_name = $customer->last_name;

                $cus->email = $request->email;
                $cus->address = $customer->address;
                $cus->phone = $request->phone;
                $cus->dob = $customer->dob;
                $cus->passport = $customer->passport;
                $cus->gender = $customer->gender;
                $cus->status = $customer->status;
                $cus->step = 2;
                $cus->test_type = $request->choice[$i];
                $cus->added_by = $customer->added_by;
                $cus->order_date = Carbon::now();
                $cus->order_id = rand(0000, 9999);
                $cus->main_status = 'order';

                $cus->address2 = $customer->address2;
                $cus->town = $customer->town;
                $cus->zip = $customer->zip;
                $cus->state = $customer->state;
                $cus->country = $customer->country;


                $cus->save();
            }
            return redirect('' . $role . '/create/order/customer/' . $customer->id . '')->with('success', 'Order created successfully');
        } else {
            return back()->with('error', 'Please select Test to create order.');
        }
    }

    public function upload_document(Request $request, $id)
    {
        //    dd($request->file);
        $cus = Customer::find($id);

        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $name = $image->getClientOriginalName();
            $destinationPath = ('uploads/stock/');
            $image->move($destinationPath, $name);

            $document = new Document();
            $document->email = $cus->email;
            $document->path = $name;
            $document->type = 1;
            $document->save();
        }

        return back()->with('success', 'Document uploaded successfully');
    }

    public function delete_document($id)
    {
        $doc = Document::find($id)->delete();
        return back()->with('success', 'Document deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Country;
use App\Models\Customer;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = user::Where('role', 'operator')->count();

        $tadmin = user::Where('role', '!=', 'operator')->count();
        $date = Date('Y-m-d');
        $submon = Date('Y-m-d', strtotime($date . ' -30 days'));
        $monthly = user::whereDate('created_at', '>=', $submon)
            ->whereDate('created_at', '<=', $date)
            ->where('role', 'operator')
            ->count();

        $latest = user::latest()->where('role', 'operator')
            ->take(5)
            ->get();


        return view('admin.index', compact('user', 'submon', 'monthly', 'latest', 'tadmin'));

    }

    public function language($lang)
    {
        // Session::put('lang',  $lang);

        return back();


    }


    public function home()
    {
//
//        $data[0]=['rfid'=>122, 'test'=>566];
//        $data[1]=['rfid'=>434, 'test'=>4343];
//        $data=collect($data);
//        $data2= $data->where('rfid','=',5122);
//
//
//        dd($data2);
        $country = Country::all();
        $state = State::orderby('name')->where('country_id', 233)->get();
        return view('welcome', compact('country', 'state'));

    }

    public function emailVerify(Request $request)
    {
        $email = $request->email;

        $api = Http::withHeaders([
            'x-rapidapi-host' => 'email-checker.p.rapidapi.com',
            'x-rapidapi-key' => 'f6ad6d7b2fmshf72f89b63545993p1bb592jsndf0bbe9f19a3',
        ])->get('https://email-checker.p.rapidapi.com/verify/v1?email=' . $email . '');
        $response = json_decode($api->body());
        if (isset($response->status)) {
            if ($response->status == 'valid') {
                return response()->json(true);
            } else {
                return response()->json(false);
            }
        } else {
            return response()->json(false);
        }

    }


    public function customer(Request $request)
    {

        // dd($request);
    }

    public function viewDocument()
    {
        return view('viewDocument');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        $admin = new User();
        $admin->name = $request->firstname;

        $admin->email = $request->email;

        $admin->address = $request->address;

        $admin->role = 'operator';

        $admin->password = Hash::make($request->password);
        $admin->save();
        // Cookie::make('check', 'value', 120);
        return back()->with('success', 'Added Successfully');

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
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $adm = User::find($id);
        return view('admin.edit', compact('adm'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $admin = User::find($request->id);

        $admin->name = $request->firstname;

        $admin->email = $request->email;

        $admin->address = $request->address;

        if ($request->password != null) {

            $admin->password = Hash::make($request->password);
        }

        if (Auth::user()->role == 'admin') {
            $admin->authentication = $request->authentication;
        }

        $admin->update();
        return back()->with('success', 'Updated Successfully');


    }


    public function generatePDF($id)
    {
        $user = User::find($id);

        $data = [
            'fullname' => $user->fullname,
            'dob' => $user->dob,
            'Residential' => $user->Residential,
            'detail' => $user->detail,
            'further_detail' => $user->further_detail,
            'signature' => $user->signature,
            'signature_date' => $user->signature_date,


        ];

        $pdf = PDF::loadView('myFile', $data);
        // dd($pdf);

        return $pdf->download('myDocument.pdf');
    }

    public function form_save(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $user->fullname = $request->fullname;
        $user->dob = $request->dob;
        $user->Residential = $request->Residential;
        $user->detail = $request->detail;
        $user->signature = $request->signature;
        $user->further_detail = $request->further_detail;
        $user->signature_date = $request->signature_date;
        $user->statuss = 'Unverified';
        $user->apiUrl = $request->apiUrl;
        $user->state = $request->state;
        $user->postcode = $request->postcode;
        $user->verificationUuid = $request->verificationUuid;
        $user->save();
        setcookie('check', 'value', time() + (86400 * 30), "/");
        return redirect('user/viewDocument');

    }

    public function api_response(Request $request)
    {


        $user = User::find(Auth::user()->id);
        $user->statuss = 'Verified';
        $user->save();

        return redirect(Auth::user()->apiUrl);


    }

    public function destroy($id)
    {

        User::find($id)->delete();
        return back()->with('success', 'Delete Successfully');

        //
    }

    public function reporting(Request $request)
    {

        $from = $request->input('from');
        $to = $request->input('to');


        if ($from != "" && $to != "") {

            $customer = Customer::with('insurance')->where(function ($query) use ($from, $to) {
                $query->whereDate('date', '>=', $from)
                    ->whereDate('date', '<=', $to);
            })
                ->where('step', 5)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')
                ->get();
            //$customer->appends(['q' => $search]);
        } else {
            $customer = Customer::with('insurance')
                ->where('step', 5)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')->get();
        }


        return view('reporting.index', compact('customer'));
    }


    public function StateReporting(Request $request)
    {

        $from = $request->input('from');
        $to = $request->input('to');


        if ($from != "" && $to != "") {

            $customer = Customer::with('insurance')->where(function ($query) use ($from, $to) {
                $query->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })
                ->where('step', 5)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')
                ->get();
            //$customer->appends(['q' => $search]);
        } else {
            $customer = Customer::with('insurance')
                ->where('step', 5)->where('display_status', '!=', 'Canceled')->orderBy('date', 'desc')->get();
        }


        return view('reporting.state', compact('customer'));
    }
}

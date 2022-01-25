<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
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
        $country = Country::all();
        $state = State::where('country_id', 233)->get();
        return view('welcome', compact('country', 'state'));

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
}

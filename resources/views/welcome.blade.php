<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
    </script>
</head>


<style>
    body {
        color: #33446F;
    }

    .img-logo {
        width: 100%;
    }

    .heading h4 {
        color: #33446F !important;
    }

    .Minor_form2 {
        display: none;
    }

    .row {
        border-radius: 8px;
        margin-left:5px;
        margin-right:5px;

        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        margin-top: 4rem;
    }

    .btn-dark {
        min-width: 100% !important;
    }

    .adult {
        display: none;
    }

    .paragraph p {
        margin-top: 2px;
    }

    .adultform {
        display: none;
    }

    h1 {
        font-size: 2rem !important;
    }

    .minors {
        display: none;
    }

    .minors1 {
        display: none;
    }

    .minors22 {
        display: none;
    }


    .Minor_div {
        display: none;
    }

    .minors51 {
        display: none;
    }


    .Minor_form {
        display: none;
    }

    .minorsandadult1 {
        display: none;
    }

    .ma_div {
        display: none;
    }

    .adultorminor {
        display: none;
    }
    .dropdown{
        float: right;
    }
    .btn-secondary {
    color: #fff;
    background-color: transparent !important;
    color: #6c757d !important;
    border:none !important;
    box-shadow: none !important;
}
.dropdown-menu{
    left: -50px !important;
}
    @media only screen and (max-width: 425px){
        h4{
            font-size: 1.2rem !important;
        }
        h1{
            font-size: 1.4rem !important;

        }
    }


</style>

<body>
<div class="container pt-4">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-globe"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{url('/language/{en}')}}">English</a>
          <a class="dropdown-item" href="#">Spanish</a>

        </div>
      </div>
</div>
    <div class="container">
        @include('partials.component2')
        <div class="row p-3">
            <div class="col-lg-6  col-12 pt-5 text-right">
                <img src="{{ asset('assets/images/header.png') }}" class="img-logo"  alt="">
            </div>
            


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  p-4">
            <div class="col-12">
                <p>{{__('profile.Please read the following document carefully and sign:')}}</p>
                <div class="paragraph pl-3">
                    <p>{{__('profile.a. I authorize this Covid-19 Test Center "Family Rehab / Communitel," to acquire a nasopharyngeal sample and to examine the sample for the detection of Covid-19 as required by public health agencies.')}}</p>
                    <p>{{__('profile.b. I authorize my results to be communicated to any government agency or as required by law. I also authorize the communication of my positive results to airlines and cruise ships as required by Miami-Dade County Government. This authorization is valid for a period of one (1) year from the day it was signed.')}}
                    </p>
                    <p>{{__('profile.c. I understand that a positive result is an indication that I should quarantine, wear a mask or cover my face so as not to infect others')}}</p>
                    <p>{{__('profile.d. I understand that this laboratory is not acting as my physician, and does not replace the need for a physicians care when required. I also accept responsibility for my results and what they mean. I agree to obtain a medical consultation with my physician to clarify any concerns I have, to obtain care / treatment if my condition worsens.

                        and. I understand that like other diagnostic procedures, there is a possibility of a false positive or false negative test for Covid-19')}}</p>
                    <p>{{__('profile.e. I understand that "Family Rehab and Communitel," are in no way responsible if the client / patient does not arrive on time for their flight / misses it or is quarantined upon arrival at their destination. I understand that the responsibility for choosing the type of proof necessary for my destiny is mine and mine alone.')}}
                    </p>
                    <p>{{__('profile.f. I understand that "Family Rehab and Communitel," are in no way responsible if the client / patient does not arrive on time for their flight / misses it or is quarantined upon arrival at their destination. I understand that the responsibility to choose the type of test necessary for my destiny is mine and mine alone.')}}</p>
                    <p>{{__('profile.g. I understand and agree that "Family Rehab and Communitel" do not provide cancellations or refunds once the test has been administered.I, the patient / client, have been informed of the purpose of the test, the procedures, the possible benefits and risks. I have also received a copy of this consent. I have been given the opportunity to ask questions before signing. I accept this Covid-19 test voluntarily, for my personal, business or travel needs')}}</p>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-5">
            <div class="col-12 text-center">
                <h1>{{__('profile.Please select who will participate ...')}}</h1>
            </div>


            <div class="col-lg-4  col-12 p-2 text-center">
                <button class="btn btn-dark adult_btn">{{__('profile.Adult')}}</button>
            </div>
            <div class="col-lg-4  col-12 p-2   text-center">
                <button class="btn btn-dark  minor_button1">{{__('profile.Minors')}}</button>
            </div>

            <div class="col-lg-4  col-12 p-2   text-center">
                <button class="btn btn-dark  minor_button">{{__('profile.Adult and minors')}}</button>
            </div>

            {{-- adults buttons --}}
            {{-- <div class="col-12 p-0  text-center">

            </div> --}}
            <div class="col-lg-2 offset-lg-1 col-12 minors  pt-2 text-center">
                <button class="btn btn-dark  minors2  minor_btn" att="1">{{__('profile.1 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="2">{{__('profile.2 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="3">{{__('profile.3 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="4">{{__('profile.4 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="5">{{__('profile.5 Minor')}}</button>
            </div>
            <div class="col-lg-2 offset-lg-1 col-12 minors  pt-2 text-center">
                <button class="btn btn-dark ml-1  minors2 minors22 minor_btn" att="6">{{__('profile.6 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="7">{{__('profile.7 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="8">{{__('profile.8 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="9">{{__('profile.9 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="10">{{__('profile.10 Minor')}}</button>
            </div>

            <div class="col-lg-12  col-12  minors  text-center">
                <div class="row" style="box-shadow: none;">
                    <div class="col-lg-2 offset-lg-5">
                        <button class="btn btn-dark minor_btn minors2 minors222">{{__('profile.More Minors')}}</button>

                    </div>
                </div>


            </div>

            {{-- minoor buttons --}}

            <div class="col-lg-2 offset-lg-1 col-12 minors1 pt-2 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="1">{{__('profile.1 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="2">{{__('profile.2 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors5   minororad_btn" att="3">{{__('profile.3 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors5  minororad_btn" att="4">{{__('profile.4 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="5">{{__('profile.5 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 offset-lg-1 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="6">{{__('profile.6 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors51   minororad_btn" att="7">{{__('profile.7 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors51  minororad_btn" att="8">{{__('profile.8 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="9">{{__('profile.9 Minor')}}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="10">{{__('profile.10 Minor')}}</button>
            </div>


            <div class="col-lg-12  col-12  minors1 text-center">
                <div class="row" style="box-shadow: none;">
                    <div class="col-lg-2 offset-lg-5">
                        <button class="btn btn-dark  minors5 minorsb">{{__('profile.More Minors')}}</button>

                    </div>
                </div>


            </div>

            <div class="col-12 pt-5 text-center ma_div">
                <h2>{{__('profile.This contract is for YOU only')}}</h2>
                <button class="btn btn-dark mt-2 MinoraAdult_continue">{{__('profile.Continue')}}</button>


            </div>

            <div class="col-12 pt-5 text-center Minor_div">
                <h2>{{__('profile.This contract is for YOU only')}}</h2>
                <button class="btn btn-dark mt-2 Minor_continue">{{__('profile.Continue')}}</button>


            </div>
            <div class="col-12 pt-5 text-center adult">
                <h2>{{__('profile.This contract is for YOU only')}}</h2>
                <button class="btn btn-dark mt-2 continue">{{__('profile.Continue')}}</button>


            </div>


        </div>
    </div>
    <div class="container">
        <div class="adultform">
            <div class="row p-5">
                <div class="col-12 ">
                    <h1>{{__('profile.Customer name')}}</h1>
                </div>
                <div class="col-lg-4 col-12 pt-2">
                    <input required type="text" placeholder="{{__('profile.Name')}}" name="namea" class="form-control">
                    <label for="">{{__('profile.Name')}}</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{__('profile.Second name')}}" name="secondnamea" class="form-control">
                    <label for="">{{__('profile.Second name')}}</label>
                    <input type="hidden" name="type" value="adult" id="">


                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{__('profile.Last name')}}" name="surnamea" class="form-control">
                    <label for="">{{__('profile.Last name')}}</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input required type="text" placeholder="{{__('profile.Telephone')}}" name="phonea" class="form-control">
                    <label for="">{{__('profile.Telephone')}}</label>
                </div>

                <div class="col-lg-6  col-12 pt-3">


                    <select name="Fgender" class="form-control">
                        <option value="male">{{__('profile.Male')}}</option>
                        <option value="female">{{__('profile.Female')}}</option>

                    </select>
                    <label>{{__('profile.Gender:')}}</label>
                </div>
                <div class="col-12 pt-3">
                    <h1>{{__("profile.Client's date of birth")}}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="date" name="datea" value="date" class="form-control">
                </div>
                <div class="col-12 pt-5">
                    <h1>{{__('profile.Additional customer information')}}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="text" name="passporta" placeholder="{{__('profile.Passport #')}}" class="form-control">
                    <label for="">{{__('profile.Passport #')}}</label>
                </div>
                <div class="col-12 pt-3">
                    <b>{{__('profile.Have you had any of the following symptoms in the past 14 days?')}}</b>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Fever')}}</p>
                    <input type="radio" checked name="Fevera" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Fevera" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        {{__('profile.Cough (new onset or worsening of chronic cough) *')}}</p>
                    <input type="radio" checked name="Cougha" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Cougha" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{__('profile.Throat pain')}}</p>
                    <input type="radio" checked name="Throata" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Throata" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Difficulty breathing (dyspnea)')}}</p>
                    <input type="radio" checked name="breathinga" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="breathinga" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{__('profile.Nausea *')}}</p>
                    <input type="radio" checked name="Nauseaa" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Nauseaa" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Abdominal pain *')}}</p>
                    <input type="radio" checked name="Abdominala" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Abdominala" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Chills *')}}</p>
                    <input type="radio" checked name="Chillsa" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Chillsa" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Headache')}}</p>
                    <input type="radio" checked name="Headachea" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Headachea" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Muscle aches (myalgia)')}}</p>
                    <input type="radio" checked name="Musclea" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Musclea" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{__('profile.Fatigue *')}}</p>
                    <input type="radio" checked name="Fatiguea" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Fatiguea" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Runny nose (rhinorrhea) *')}}</p>
                    <input type="radio" checked name="Runnya" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Runnya" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Vomiting')}}</p>
                    <input type="radio" checked name="Vomitinga" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Vomitinga" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{__('profile.Diarrhea (3 loose stools / day) *')}}</p>
                    <input type="radio" checked name="Diarrheaa" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Diarrheaa" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{__('profile.Loss of smell *')}}</p>
                    <input type="radio" checked name="Loss_of_smella" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Loss_of_smella" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{__('profile.Loss of taste')}}</p>
                    <input type="radio" checked name="Loss_of_tastea" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Loss_of_tastea" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="{{__('profile.Other specify')}}" name="specifya" class="form-control">
                    <label for="">{{__('profile.Other specify')}}</label>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="{{__('profile.Date of onset of the first symptoms')}}" name="symptomsa"
                        class="form-control">
                    <label for="">{{__('profile.Date of onset of the first symptoms')}}</label>
                </div>
                <div class="col-12 pt-5">
                    <h5>
                        {{__('profile.Lab test')}}</h5>
                </div>
                <div class="col-12 pt-5">
                    <b>

                        {{__('profile.Test type: nasal swab (PCR) / antigen / SARS-COV-2')}}</b>
                </div>

                <div class="col-12 pt-3">
                    <p>{{__('profile.Select the test')}}</p>
                    <input type="radio" checked name="Select_the_testa" value="ANTÍGENO">
                    <label for="html">
                        ANTÍGENO</label><br>
                    <input type="radio" checked name="Select_the_testa" value="PCR">
                    <label for="html">PCR</label><br>
                    <input type="radio" name="Select_the_testa" value="RT-PCR">
                    <label for="RT">RT-PCR
                    </label><br>
                    <input type="radio" name="Select_the_testa" value="PCR-24hm">
                    <label for="html">PCR-24hm</label><br>
                    <input type="radio" name="Select_the_testa" value="24hrs">
                    <label for="html">RT-PCR 24hrs</label><br>
                </div>


            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 pt-2">
                    <h1>{{__('profile.Customer Address')}}</h1>

                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Address')}}" name="addressa" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Address2')}}" name="address2a" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Town')}}" name="towna" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Zip Code')}}" name="zipa" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>{{__('profile.State / Province')}}</label>
                    <select name="Provincea" class="form-control">
                        @foreach ($state as $states)
                            <option value="{{ $states->name }}">{{ $states->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>{{__('profile.Country')}}</label>
                    <select class="form-control" name="Countrya">
                        @foreach ($country as $countries)
                            <option value="{{ $countries->name }}">{{ $countries->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{__('profile.Email address')}}</h1>

                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input type="text" required placeholder="{{__('profile.E-mail')}}" name="emaila" class="form-control">
                </div>
            </div>

            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{__('profile.How did you hear about us?')}}</h1>
                </div>
                <div class="col-lg-12 col-12 pt-2">
                    <p>{{__('profile.Option')}}</p>
                    <input type="radio" checked name="gendera" value="Friends"> {{__('profile.Friends')}}<br>
                    <input type="radio" name="gendera" value="Airline">{{__('profile.Airline Staff')}}<br>
                    <input type="radio" name="gendera" value="Airport">{{__('profile.Airport Advertisement')}}<br>
                    <input type="radio" name="gendera" value="Google">{{__('profile.Google')}}<br>
                    <input type="radio" name="gendera" value="Other">{{__('profile.Other')}}<br>
                </div>
            </div>

        </div>

        <div class="minorform" style="display: none">
            <div class="row p-5">
                <div class="col-12 ">
                    <h1>{{__('profile.Name Of First Minor')}}</h1>
                </div>


                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Name')}}" name="name" class="form-control">
                    <label for="">{{__('profile.Name')}}</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Second name')}}" name="secondname" class="form-control">
                    <label for="">{{__('profile.Second name')}}</label>
                </div>


                <input type="hidden" name="type" value="minor">
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Surnames')}}" name="surname" class="form-control">
                    <label for="">{{__('profile.Surnames')}}</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input type="text" required placeholder="{{__('profile.Telephone')}}" name="phone" class="form-control">
                    <label for="">{{__('profile.Telephone')}}</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">


                    <select name="Fgender" class="form-control">
                        <option value="male">{{__('profile.Male')}}</option>
                        <option value="female">{{__('profile.Female')}}</option>

                    </select>
                    <label>{{__('profile.Gender:')}}</label>
                </div>

                <div class="col-12 pt-3">
                    <h1>{{__('profile.First Birth Date of Minor')}}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input type="date" required value="date" name="date" class="form-control">
                </div>
                <div class="col-12 pt-5">
                    <h1>{{__('profile.Additional Information of first of the Minor')}}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input type="text" required name="passport" placeholder="{{__('profile.Passport #')}}" class="form-control">
                    <label for="">{{__('profile.Passport #')}}</label>
                </div>
                <div class="col-12 pt-3">
                    <b>{{__('profile.Have you had any of the following symptoms in the past 14 days?')}}</b>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Fever')}}</p>
                    <input type="radio" checked name="fever" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="fever" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Cough (new onset or worsening of chronic cough) *')}}</p>
                    <input type="radio" checked name="Cough" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Cough" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>
                        {{__('profile.Sore Throat')}}</p>
                    <input type="radio" checked name="Throat" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Throat" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Difficulty breathing (dyspnea)')}}</p>
                    <input type="radio" checked name="breathing" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="breathing" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{__('profile.Nausea *')}}</p>
                    <input type="radio" checked name="Nausea" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Nausea" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Abdominal pain *')}}</p>
                    <input type="radio" checked name="Abdominal " value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Abdominal " value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Chills *')}}</p>
                    <input type="radio" checked name="Chills" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Chills" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Headache')}}</p>
                    <input type="radio" checked name="Headache" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Headache" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Muscle aches (myalgia)')}}</p>
                    <input type="radio" checked name="Muscle" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Muscle" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{__('profile.Fatigue *')}}</p>
                    <input type="radio" checked name="Fatigue" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Fatigue" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Runny nose (rhinorrhea) *')}}</p>
                    <input type="radio" checked name="Runny" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Runny" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{__('profile.Vomiting')}}</p>
                    <input type="radio" checked name="Vomiting" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Vomiting" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{__('profile.Diarrhea (3 loose stools / day) *')}}</p>
                    <input type="radio" checked name="Diarrhea" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Diarrhea" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{__('profile.Loss of smell *')}}</p>
                    <input type="radio" checked name="Loss_of_smell" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Loss_of_smell" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{__('profile.Loss of taste')}}</p>
                    <input type="radio" checked name="Loss_of_taste" value="Yes">
                    <label for="html">{{__('profile.Yes')}}</label><br>
                    <input type="radio" name="Loss_of_taste" value="No">
                    <label for="html">{{__('profile.No')}}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="{{__('profile.Other specify')}}" name="specify" class="form-control">
                    <label for="">{{__('profile.Other specify')}}</label>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="{{__('profile.Date of onset of the first symptoms')}}" name="symptoms" class="form-control">
                    <label for="">{{__('profile.Date of onset of the first symptoms')}}</label>
                </div>
                <div class="col-12 pt-5">
                    <h5>
                        {{__('profile.Lab test')}}</h5>
                </div>
                <div class="col-12 pt-5">
                    <b>

                        {{__('profile.Test type: nasal swab (PCR) / antigen / SARS-COV-2')}}</b>
                </div>

                <div class="col-12 pt-3">
                    <p>{{__('profile.Select the test')}}</p>
                    <input type="radio" checked name="Select_the_test" value="ANTIGEN">
                    <label for="html">
                        ANTIGEN</label><br>
                    <input type="radio" name="Select_the_test" value="PCR">
                    <label for="html">PCR</label><br>
                    <input type="radio" name="Select_the_test" value="RT-PCR">
                    <label for="html">RT-PCR
                    </label><br>
                    <input type="radio" name="Select_the_test" value="PCR-24hm">
                    <label for="html">PCR-24hm</label><br>
                    <input type="radio" name="Select_the_test" value="24hrs">
                    <label for="html">RT-PCR 24hrs</label><br>
                </div>

            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 pt-2">
                    <h1>{{__('profile.Address of the Minor')}}</h1>

                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Address')}}" name="address" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Address2')}}" name="address2" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Town')}}" name="town" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{__('profile.Zip Code')}}" name="zip" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>{{__('profile.State / Province')}}</label>
                    <select name="Province" class="form-control">
                        @foreach ($state as $states)
                            <option value="{{ $states->name }}">{{ $states->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>{{__('profile.Country')}}</label>
                    <select name="Country" class="form-control">
                        @foreach ($country as $countries)
                            <option value="{{ $countries->name }}">{{ $countries->name }}</option>
                        @endforeach


                    </select>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{__('profile.Email address')}}</h1>

                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="text" placeholder="{{__('profile.E-mail')}}" name="email" class="form-control">
                </div>
            </div>

            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{__('profile.How did you hear about us?')}}</h1>
                </div>
                <div class="col-lg-12 col-12 pt-2">
                    <p>{{__('profile.Option')}}</p>
                    <input type="radio" name="gender" checked value="Friends"> Friends<br>
                    <input type="radio" name="gender" value="Airline"> Airline Staff<br>
                    <input type="radio" name="gender" value="Airport"> Airport Advertisement<br>
                    <input type="radio" name="gender" value="Google"> Google<br>
                    <input type="radio" name="gender" value="Other"> Other<br>
                </div>
                <div class="col-lg-6 col-12 pt-2">
                    <input required type="text" class="form-control" name="othre_specify"
                        placeholder="{{__('profile.Other specify')}}">
                    <label for="">{{__('profile.Other specify')}}</label>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 ">
                    <h1>{{__('profile.Parent Or Guardian Name')}}</h1>
                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{__('profile.Name')}}" name="Parent_name" class="form-control">
                    <label for="">{{__('profile.Name')}}</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{__('profile.Second name')}}" name="Parent_secondname"
                        class="form-control">
                    <label for="">{{__('profile.Second name')}}</label>

                </div>

                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{__('profile.Surnames')}}" name="Parent_surname" class="form-control">
                    <label for="">{{__('profile.Surnames')}}</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input required type="text" placeholder="{{__('profile.Telephone')}}" name="Parent_phone" class="form-control">
                    <label for="">{{__('profile.Telephone')}}</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">

                    <input required type="date" placeholder="DOB" name="Parent_dob" class="form-control">
                    <label for="">{{__('profile.Date Birth Of Gaurdian')}}</label>

                </div>


            </div>

        </div>



    </div>








    <section>

        <div class="container mb-5">

            <div class="maindata" style="display: none">
                <form action="{{ url('customer/details') }}" method="POST">
                    @csrf
                    <div class="finalResult">

                    </div>
                    <input type="hidden" class="totalCount" name="totalCount" value="" id="">
                    <div class="static">
                        <div class="row p-5 mt-5">
                            <div class="col-12">
                                <h1>{{__('profile.Electronic signature acceptance')}}</h1><br>
                                <input type="checkbox" name="signature" required value="1"> {{__('profile.By checking ts box, you agree that your electronic signature will be used in place of your handwritten signature. If this is not what you want, you have the right to ask to sign a paper copy instead. By checking this box, you warve this right Upon acceptance, you may request in writing that we send you a paper copy of the electronic record. You will not have to pay anything for such a copy, and you do not need any special software or hardware to view it. Your acceptance of electronic signature for any document will remain in effect until such time as you notify us in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will not entall any penalty for you Your acceptance of electronic signature for any document will remain in effect until such time as you notify us in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will not entall any penalty for you Your acceptance of electronic signature for any document will remain in effect until such time as you notify us in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will not entall any penalty for you')}}
                            </div>
                        </div>
                        <center class="mt-5">
                            <input type="submit" class="btn btn-dark" value="{{__('profile.Accept Document')}}">
                        </center>
                    </div>
                </form>
            </div>



        </div>



    </section>

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(".adult_btn").click(function() {

            $('.adult').css('display', 'block');
            $('.maindata').css('display', 'none');
            $('.minors1').css('display', 'none');
            $('.minors51').css('display', 'none');
            $('.minors').css('display', 'none');
            $('.minors22').css('display', 'none');
        });

        $(".continue").click(function() {
            $(this).css('display', 'none');
            $('.maindata').css('display', 'block');


            var html = $('.adultform').html();
            $('.finalResult').empty().append(html);
        });


        //minor
        $(".minor_button1").click(function() {
            $('.maindata').css('display', 'none');
            $('.minorsb').css('display', 'block');





            $('.adult').css('display', 'none');

            $('.minors51').css('display', 'none');
            $('.minors').css('display', 'none');
            $('.minors22').css('display', 'none');

            $('.minors1').css('display', 'block');
            //$('.minors').css('display', 'none');
        });
        $(".minorsb").click(function() {
            $(this).css('display', 'none');

            $('.minors51').css('display', 'block');
        });

        //adult

        $(".minor_button").click(function() {


            $('.minors222').css('display', 'block');

            $('.maindata').css('display', 'none');
            $('.adult').css('display', 'none');

            $('.minors1').css('display', 'none');
            $('.minors51').css('display', 'none');
            $('.minors22').css('display', 'none');

            $('.minors').css('display', 'block');
            //$('.minors').css('display', 'none');
        });



        $(".minors222").click(function() {
            $(this).css('display', 'none');

            $('.minors22').css('display', 'block');
        });


    $(".minororad_btn").click(function () {

        $('.maindata').css('display', 'block');
        $('.finalResult').empty();
    });

        $(".minororad_btn").click(function() {

            $('.maindata').css('display', 'block');
            $('.finalResult').empty();

            var some_var = $(this).attr('att');
            for (let index = 1; index <= some_var; index++) {

                var main = index;

                var id = '#minordata' + index + '';
                var html = '<div id="minordata' + index + '">';
                html += $('.minorform').html();
                html += '</div>';

            $('.finalResult').append(html);

                $('.totalCount').val(main);

                $(id).find('input').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

                });

                $(id).find('select').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

            });


        }
    });


        $(".minor_btn").click(function() {

            $('.maindata').css('display', 'block');
            $('.finalResult').empty();
            var html2 = $('.adultform').html();
            $('.finalResult').append(html2);
            var some_var = $(this).attr('att');
            for (let index = 1; index <= some_var; index++) {


                var main = index;

                var id = '#minordata' + index + '';
                var html = '<div id="minordata' + index + '">';
                html += $('.minorform').html();
                html += '</div>';


                $('.finalResult').append(html);
                $('.totalCount').val(main);

                $(id).find('input').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

                });

                $(id).find('select').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

                });
            }
        });


    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</body>

</html>

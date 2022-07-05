<!doctype html>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{asset('fav.png')}}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
    </script>


</head>
<style>

    .error{
        border: 1px solid red;
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

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
        margin-left: 5px;
        margin-right: 5px;

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

    .adultform,.adultform2 {
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

    .dropdown {
        float: right;
    }

    .btn-secondary {
        color: #fff;
        background-color: transparent !important;
        color: #6c757d !important;
        border: none !important;
        box-shadow: none !important;
    }

    .dropdown-menu {
        left: -50px !important;
    }

    @media only screen and (max-width: 425px) {
        h4 {
            font-size: 1.2rem !important;
        }

        h1 {
            font-size: 1.4rem !important;

        }

        .img-logo {
            width: 100% !important;
            margin-bottom: 15% !important;
        }

    }

    #sig-canvas {
        border: 2px dotted #CCCCCC;
        border-radius: 15px;
        cursor: crosshair;
    }

    .wscrollbar{

	width: 100%;
    background-image: url(https://www.smartwaiver.com/images/waiver/sw_scroll_bar_v2.png);
    background-repeat: repeat-x;
    color: #dbdbdb;
    font: 15pt verdana, helvetica;
    z-index: 3100;
    position: fixed;
    top: 0;
    left: 0;
    display: none;
    margin: 0;
    padding: 0;
	}

	#hscrollbar {
    -moz-animation: cssAnimation 0s ease-in 3s forwards;
    /* Firefox */
    -webkit-animation: cssAnimation 0s ease-in 3s forwards;
    /* Safari and Chrome */
    -o-animation: cssAnimation 0s ease-in 3s forwards;
    /* Opera */
    animation: cssAnimation 0s ease-in 3s forwards;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
}
@keyframes cssAnimation {
    to {
        width:0;
        height:0;
        overflow:hidden;
    }
}
@-webkit-keyframes cssAnimation {
    to {
        width:0;
        height:0;
        visibility:hidden;
    }
}

</style>

<body>
<div class="wscrollbar" id="hscrollbar" style="display: block;"><center><img src="https://waiver.smartwaiver.com/templates/assets/images/sw_scroll_down_v2.en_US.png"></center></div>

    <div class="container pt-4">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-globe"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('/language/en') }}">English</a>
                <a class="dropdown-item" href="{{ url('/language/sp') }}">Spanish</a>

            </div>
        </div>
    </div>
    <div class="container">
        @include('partials.component2')
        <div class="row p-3">
            <div class="col-lg-6  col-12 pt-5 text-right" style="margin: auto">
                <img src="{{ asset('assets/images/header.png') }}" class="img-logo"
                    style="width: 100%; margin-bottom: 5%;" alt="">
            </div>



        </div>
    </div>
    </div>
    <div class="container">






        <div class="row  p-4">
            <div class="col-12">
                <p>{{ __('profile.Please read the following document carefully and sign:') }}</p>
                <div class="paragraph pl-3">
                    <p>{{ __('profile.a. I authorize this Covid-19 Test Center "Family Rehab / Communitel," to acquire a nasopharyngeal sample and to examine the sample for the detection of Covid-19 as required by public health agencies.') }}
                    </p>
                    <p>{{ __('profile.b. I authorize my results to be communicated to any government agency or as required by law. I also authorize the communication of my positive results to airlines and cruise ships as required by Miami-Dade County Government. This authorization is valid for a period of one (1) year from the day it was signed.') }}
                    </p>
                    <p>{{ __('profile.c. I understand that a positive result is an indication that I should quarantine, wear a mask or cover my face so as not to infect others') }}
                    </p>
                    <p>{{ __('profile.d. I understand that this laboratory is not acting as my physician, and does not replace the need for a physicians care when required. I also accept responsibility for my results and what they mean. I agree to obtain a medical consultation with my physician to clarify any concerns I have, to obtain care / treatment if my condition worsens and I understand that like other diagnostic procedures, there is a possibility of a false positive or false negative test for Covid-19') }}
                    </p>
                    <p>{{ __('profile.e. I understand that "Family Rehab and Communitel," are in no way responsible if the client / patient does not arrive on time for their flight / misses it or is quarantined upon arrival at their destination. I understand that the responsibility for choosing the type of proof necessary for my destiny is mine and mine alone.') }}
                    </p>
                    <p>{{ __('profile.f. I understand that "Family Rehab and Communitel," are in no way responsible if the client / patient does not arrive on time for their flight / misses it or is quarantined upon arrival at their destination. I understand that the responsibility to choose the type of test necessary for my destiny is mine and mine alone.') }}
                    </p>
                    <p>{{ __('profile.g. I understand and agree that "Family Rehab and Communitel" do not provide cancellations or refunds once the test has been administered.I, the patient / client, have been informed of the purpose of the test, the procedures, the possible benefits and risks. I have also received a copy of this consent. I have been given the opportunity to ask questions before signing. I accept this Covid-19 test voluntarily, for my personal, business or travel needs') }}
                    </p>

                </div>
                <p>{{ __('profile.I, the undersigned, have been informed about the test purpose, procedures, possible benefits and risks, and I have received a copy of this Informed Consent. I have been given the opportunity to ask questions before I sign, and I have been told that I can ask additional questions at any time. I voluntarily agree to this testing for COVID-19.') }}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-5">
            <div class="col-12 text-center">
                <h1>{{ __('profile.Please select who will participate ...') }}</h1>
            </div>


            <div class="col-lg-4  col-12 p-2 text-center">
                <button class="btn btn-dark adult_btn">{{ __('profile.Adult') }}</button>
            </div>
            <div class="col-lg-4  col-12 p-2   text-center">
                <button class="btn btn-dark  minor_button1">{{ __('profile.Minors') }}</button>
            </div>

            <div class="col-lg-4  col-12 p-2   text-center">
                <button class="btn btn-dark  minor_button">{{ __('profile.Adult and minors') }}</button>
            </div>


            <div class="col-lg-2 offset-lg-1 col-12 minors  pt-2 text-center">
                <button class="btn btn-dark  minors2  minor_btn" att="1">{{ __('profile.1 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="2">{{ __('profile.2 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="3">{{ __('profile.3 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="4">{{ __('profile.4 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="5">{{ __('profile.5 Minor') }}</button>
            </div>
            <div class="col-lg-2 offset-lg-1 col-12 minors  pt-2 text-center">
                <button class="btn btn-dark ml-1  minors2 minors22 minor_btn"
                    att="6">{{ __('profile.6 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn"
                    att="7">{{ __('profile.7 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn"
                    att="8">{{ __('profile.8 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn"
                    att="9">{{ __('profile.9 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn"
                    att="10">{{ __('profile.10 Minor') }}</button>
            </div>

            <div class="col-lg-12  col-12  minors  text-center">
                <div class="row mt-2" style="box-shadow: none;">
                    <div class="col-lg-2 offset-lg-5">
                        <button
                            class="btn btn-dark minor_btn minors2 minors222">{{ __('profile.More Minors') }}</button>

                    </div>
                </div>


            </div>

            <div class="w-100 my-1"><h1 id="adult-text" style="display: none" class="text-center m-auto">This aggrement is for YOU and a MINORS</h1></div>


            {{-- minoor buttons --}}

            <div class="col-lg-2 offset-lg-1 col-12 minors1 pt-2 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="1">{{ __('profile.1 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="2">{{ __('profile.2 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors5   minororad_btn" att="3">{{ __('profile.3 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors5  minororad_btn" att="4">{{ __('profile.4 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="5">{{ __('profile.5 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 offset-lg-1 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="6">{{ __('profile.6 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors51   minororad_btn" att="7">{{ __('profile.7 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors51  minororad_btn" att="8">{{ __('profile.8 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="9">{{ __('profile.9 Minor') }}</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="10">{{ __('profile.10 Minor') }}</button>
            </div>


            <div class="col-lg-12  col-12  minors1 text-center">
                <div class="row mt-2" style="box-shadow: none;">
                    <div class="col-lg-2 offset-lg-5">
                        <button class="btn btn-dark  minors5 minorsb">{{ __('profile.More Minors') }}</button>

                    </div>
                </div>


            </div>

            <div class="w-100 my-1"><h1 id="minor-text" style="display: none" class="text-center m-auto">This aggrement is for a MINORS</h1></div>

            <div class="col-12 pt-5 text-center ma_div">
                <h2>{{ __('profile.This contract is for YOU only') }}</h2>
                <button class="btn btn-dark mt-2 continue">{{ __('profile.Continue') }}</button>


            </div>

            <div class="col-12 pt-5 text-center Minor_div">
                <button class="btn btn-dark mt-2 continue2">{{ __('profile.Continue') }}</button>

            </div>
            <div class="col-12 pt-5 text-center adult">
                <button class="btn btn-dark mt-2 continue3">{{ __('profile.Continue') }}</button>

            </div>


        </div>
    </div>
    <div class="container">
        <div class="adultform">
            <div class="row p-5">
                <div class="col-12 ">
                    <h1>{{ __('profile.Customer name') }}</h1>
                </div>
                <div class="col-lg-4 col-12 pt-2">
                    <input required type="text" placeholder="{{ __('profile.Name') }}" name="namea"
                        class="form-control">
                    <label for="">{{ __('profile.Name') }}*</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" placeholder="{{ __('profile.Second name') }}" name="secondnamea"
                        class="form-control">
                    <label for="">{{ __('profile.Second name') }}</label>
                    <input type="hidden" class="typeadu" name="type" value="adult" id="">


                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{ __('profile.Last name') }}" name="surnamea"
                        class="form-control">
                    <label for="">{{ __('profile.Last name') }}*</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input required type="text" placeholder="{{ __('profile.Telephone') }}" name="phonea"
                        class="form-control">
                    <label for="">{{ __('profile.Telephone') }}*</label>
                </div>

                <div class="col-lg-6  col-12 pt-3">


                    <select name="Fgender" class="form-control">
                        <option value="male">{{ __('profile.Male') }}</option>
                        <option value="female">{{ __('profile.Female') }}</option>

                    </select>
                    <label>{{ __('profile.Gender:') }}</label>
                </div>
                <div class="col-12 pt-3">
                    <h1>{{ __("profile.Client's date of birth") }}*</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="date" name="datea" value="date" class="form-control">
                </div>




                <div class="col-12 pt-5">


                </div>

                <div class="col-12 pt-5">

                    <h1>{{ __('profile.Additional customer information') }}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="text" name="passporta" placeholder="{{ __('profile.Passport #') }}"
                        class="form-control">
                    <label for="">{{ __('profile.Passport #') }}*</label>
                </div>
                <div class="col-12 pt-3">
                    <b>{{ __('profile.Have you had any of the following symptoms in the past 14 days?') }}</b>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Fever') }}*</p>
                    <input type="radio" name="Fevera" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Fevera" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        {{ __('profile.Cough (new onset or worsening of chronic cough) *') }}</p>
                    <input type="radio" name="Cougha" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Cougha" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Throat pain') }}*</p>
                    <input type="radio" name="Throata" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Throata" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Difficulty breathing (dyspnea)') }}*</p>
                    <input type="radio" name="breathinga" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="breathinga" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Nausea *') }}*</p>
                    <input type="radio" name="Nauseaa" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Nauseaa" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Abdominal pain *') }}</p>
                    <input type="radio" name="Abdominala" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Abdominala" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Chills *') }}</p>
                    <input type="radio" name="Chillsa" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Chillsa" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Headache') }}*</p>
                    <input type="radio" name="Headachea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Headachea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Muscle aches (myalgia)') }}*</p>
                    <input type="radio" name="Musclea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Musclea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Fatigue *') }}</p>
                    <input type="radio" name="Fatiguea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Fatiguea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Runny nose (rhinorrhea) *') }}</p>
                    <input type="radio" name="Runnya" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Runnya" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Vomiting') }}*</p>
                    <input type="radio" name="Vomitinga" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Vomitinga" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Diarrhea (3 loose stools / day) *') }}</p>
                    <input type="radio" name="Diarrheaa" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Diarrheaa" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Loss of smell *') }}</p>
                    <input type="radio" name="Loss_of_smella" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Loss_of_smella" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Loss of taste') }}*</p>
                    <input type="radio" name="Loss_of_tastea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Loss_of_tastea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" placeholder="{{ __('profile.Other specify') }}" name="specifya"
                        class="form-control">
                    <label for="">{{ __('profile.Other specify') }}</label>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" placeholder="{{ __('profile.Date of onset of the first symptoms') }}"
                        name="symptomsa" class="form-control">
                    <label for="">{{ __('profile.Date of onset of the first symptoms') }}</label>
                </div>
                <div class="col-12 pt-5">
                    <h5>
                        {{ __('profile.Lab test') }}</h5>
                </div>
                <div class="col-12 pt-5">
                    <b>

                        {{ __('profile.Test type: nasal swab (PCR) / antigen / SARS-COV-2') }}</b>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Select the test') }}*</p>
                    <input type="radio" checked name="Select_the_testa" value="Antigen - CareStart">
                    <label for="html">
                        ANTIGEN</label><br>
                    <input type="radio" checked name="Select_the_testa" value="PCR">
                    <label for="html">PCR</label><br>
                    <input type="radio" name="Select_the_testa" value="RT-PCR - Abbott IDNOW">
                    <label for="RT">RT-PCR
                    </label><br>
                    <input type="radio" name="Select_the_testa" value="PCR - 24hrs">
                    <label for="html">PCR-24hrs</label><br>
                    <input type="radio" name="Select_the_testa" value="RT-PCR 24hrs - Abbott IDNOW">
                    <label for="html">RT-PCR 24hrs</label><br>
                </div>


            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 pt-2">
                    <h1>{{ __('profile.Customer Address') }}</h1>

                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Address') }}" name="addressa"
                        class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" placeholder="{{ __('profile.Address2') }}" name="address2a"
                        class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Town') }}" name="towna"
                        class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Zip Code') }}" name="zipa"
                        class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>{{ __('profile.State / Province') }}</label>
                    <select name="Provincea" class="form-control">
                        @foreach ($state as $states)
                            <option value="{{ $states->name }}">{{ $states->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" style="display: none"  placeholder="{{ __('profile.State / Province') }}" name="Provincea2"
                           class="form-control">
                </div>




                <div class="col-lg-6  col-12 pt-2">
                    <label>{{ __('profile.Country') }}</label>
                    <select class="form-control changecountry"  name="Countrya">
                        @foreach ($country as $countries)
                            <option   @if($countries->name=='United States') selected @endif  value="{{ $countries->name }}">{{ $countries->name }}</option>
                        @endforeach

                    </select>
                </div>





                <div class="col-lg-4 mt-3 col-12 pt-2 ">

                    <input type="button" class="btn btn-dark appSign" value="Click to Sign" required
                        data-toggle="modal" data-target="#exampleModal">
                    {{-- <button type="button" class="btn btn-dark appSign" required data-toggle="modal" data-target="#exampleModal">
                        Click to Sign
                    </button> --}}
                    <div>
                        <input type="hidden" class="SingsLink" name="SingsLinka" value="">

                    </div>
                </div>

                <div class="col-lg-6 mt-3 col-12 pt-2">
                    <div class="img1" style="">
                        <img class="" src="" name="sig-imagea" alt="">
                    </div>
                </div>

            </div>
            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{ __('profile.Email address') }}*</h1>

                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input type="email" required placeholder="{{ __('profile.E-mail') }}" name="emaila"
                        class="form-control">
                </div>
            </div>



            <div class="row p-5 mt-5">


                <h3>   <label class="switch">
                        <input type="checkbox" name="traveling" value="1" id="adult-flight-check">
                        <span class="slider round"></span>
                    </label>{{__('profile.Are you traveling?')}}</h3>

               <div class="w-100 row m-0" id="adult-flight" style="box-shadow: none;display: none">
                   <div class="col-12">
                       <h1>{{__('profile.FLIGHT/CRUISE INFORMATION')}}</h1>
                   </div>
                   <div class="col-lg-6 col-12 pt-3">

                       <label for="">{{__('profile.Airline/CruiseLine*')}}</label>
                       <select  name="CruiseLinea" id="" class="form-control">

                           <option value="Air Lingus (EI)">Air Lingus (EI)</option>
                           <option value="Aeroflot (SU)">Aeroflot (SU) </option>
                           <option value="Aerolineas Argentinas (AR)">Aerolineas Argentinas (AR)</option>
                           <option value="Aeromexico (AM)">Aeromexico (AM)</option>
                           <option value="Air Canada (AC)">Air Canada (AC)</option>

                           <option value="Air Century (Y2)">Air Century (Y2)</option>
                           <option value="Air Europa (UX)">Air Europa (UX)</option>
                           <option value="Air France (AF)">Air France (AF)</option>
                           <option value="Alitalia (AZ)">Alitalia (AZ)</option>
                           <option value="American Airlines (AA)">American Airlines (AA)</option>
                           <option value="Avianca (AV, TA)">Avianca (AV, TA)</option>
                           <option value="Bahamasair (UP)">Bahamasair (UP)</option>
                           <option value="BOA-Boliviana de Aviacion (OB)">BOA-Boliviana de Aviacion (OB)</option>
                           <option value="British Airways (BA)">British Airways (BA)</option>
                           <option value="Caribbean Airlines (BW)">Caribbean Airlines (BW)</option>
                           <option value="Cayman Airways (KX)">Cayman Airways (KX)</option>

                           <option value="COPA Airlines (CM)">COPA Airlines (CM)</option>
                           <option value="Delta Air Lines (DL)">Delta Air Lines (DL)</option>
                           <option value="Eastern Airlines (2D)">Eastern Airlines (2D)</option>
                           <option value="El Al (LY)">El Al (LY)</option>
                           <option value="Emirates (EK)">Emirates (EK)</option>
                           <option value="Finnair (AY)">Finnair (AY)</option>
                           <option value="Frontier Airlines (F9)">Frontier Airlines (F9)</option>
                           <option value="Iberia (IB)">Iberia (IB)</option>
                           <option value="JetBlue (B6)">JetBlue (B6)</option>
                           <option value="KLM (KL)">KLM (KL)</option>
                           <option value="LATAM Airlines (4M, JJ, LA,LP, XP)">LATAM Airlines (4M, JJ, LA,LP, XP)</option>
                           <option value="LOT Polish Airlines (LO)">LOT Polish Airlines (LO)</option>
                           <option value="Lufthansa (LH)">Lufthansa (LH)</option>
                           <option value="Qatar (QR)">Qatar (QR)</option>
                           <option value="SAS (SK)">SAS (SK)</option>
                           <option value="Southwest (WN)">Southwest (WN)</option>
                           <option value="Sun Country (SY)">Sun Country (SY)</option>
                           <option value="Sunwing (WG)">Sunwing (WG)</option>
                           <option value="Surinam Airways (PY)">Surinam Airways (PY)</option>
                           <option value="Swift Air (SWQ)">Swift Air (SWQ)</option>
                           <option value="Swiss International (LX)">Swiss International (LX)</option>
                           <option value="TAP Air Portugal (TP)">TAP Air Portugal (TP)</option>
                           <option value="TUIfly (TB, OR)">TUIfly (TB, OR)</option>
                           <option value="Turkish (TK)">Turkish (TK)</option>
                           <option value="United Airlines (UA)">United Airlines (UA)</option>
                           <option value="Virgin Atlantic (VS)">Virgin Atlantic (VS)</option>
                           <option value="Viva (VH)">Viva (VH)</option>
                           <option value="Volaris (Y4)">Volaris (Y4)</option>
                           <option value="WestJet (WS)">WestJet (WS)</option>
                           <option value="World Atlantic (WAL)">World Atlantic (WAL)</option>
                           <option value="N/A">N/A</option>
                           <option value="Azamara Club Cruises">Azamara Club Cruises</option>
                           <option value="Carnival">Carnival</option>
                           <option value="Celebrity X Cruises">Celebrity X Cruises</option>
                           <option value="Crystal Cruises">Crystal Cruises</option>
                           <option value="Disney Cruise Line">Disney Cruise Line</option>
                           <option value="MSC Cruises">MSC Cruises</option>
                           <option value="Norwegian Cruise Line">Norwegian Cruise Line</option>
                           <option value="Oceania Cruises">Oceania Cruises</option>
                           <option value="Regent Seven Seas Cruises">Regent Seven Seas Cruises</option>
                           <option value="Royal Caribbean International">Royal Caribbean International</option>
                           <option value="Viking Ocean Cruises">Viking Ocean Cruises</option>
                           <option value="Virgin Voyages">Virgin Voyages</option>
                           <option value="AIDA">AIDA</option>
                           <option value="Hapag-Lloyd">Hapag-Lloyd</option>
                           <option value="Hurtigruten">Hurtigruten</option>
                           <option value="PampO Cruises">P&amp;amp;O Cruises</option>
                           <option value="Phoenix">Phoenix</option>
                           <option value="Pricess Cruises">Pricess Cruises</option>
                           <option value="SAGA">SAGA</option>
                           <option value="SCENIC Luxury Cruises">SCENIC Luxury Cruises</option>
                           <option value="SEABOURN">SEABOURN</option>
                           <option value="TUI Cruises">TUI Cruises</option>
                           <option value="Windstar Cruises">Windstar Cruises</option>



                       </select>

                   </div>

                   <div class="col-lg-6 col-12 pt-3">
                       <label for="">{{__('profile.Destination')}}*</label>
                       <input type="text"  placeholder="Destination" name="Destinationa" class="form-control">
                   </div>


                   <div class="col-lg-6 col-12 pt-3">
                       <label for="">{{__('profile.Flight/Cruise #')}} *</label>
                       <input type="text"  placeholder="Flight/Cruise" name="F_Cruisea" class="form-control">
                   </div>
               </div>
               </div>


            <div class="row p-5 mt-5">
                <h3>   <label class="switch">
                        <input type="checkbox" name="insurance" value="1"  id="adult-insurance-check">
                        <span class="slider round"></span>
                    </label>{{__('profile.Insurance Information')}}</h3>

                <div class="w-100 row m-0" id="adult-insurance" style="box-shadow: none;display: none">

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Primary Insurance')}}" name="primary_ins">

                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Secondary Insurance')}}" name="secondary_ins">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Policy Holder Name')}}" name="policy_holder_name1">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Policy Holder Name')}}" name="policy_holder_name2">
                    </div>


                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Relationship Patient')}}" name="relationship_patient1">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Relationship Patient')}}" name="relationship_patient2">
                    </div>


                    <div class="col-lg-6 mb-3">
                        <lable><lable>{{__('profile.Policy Holder DOB')}}</lable></lable>

                        <input type="date" class="form-control" placeholder="{{__('profile.Policy Holder DOB')}}" name="policy_holder_dob1">
                    </div>


                    <div class="col-lg-6 mb-3">
                        <lable>{{__('profile.Policy Holder DOB')}}</lable>
                        <input type="date" class="form-control" placeholder="{{__('profile.Policy Holder DOB')}}" name="policy_holder_dob2">
                    </div>


                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Policy # / Member ID')}}" name="policy_member_id1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control" placeholder="{{__('profile.Policy # / Member ID')}}" name="policy_member_id2">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Group #')}}" name="group1">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Group #')}}" name="group2">
                    </div>


                </div>




            </div>


            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{ __('profile.How did you hear about us?') }}</h1>
                </div>
                <div class="col-lg-12 col-12 pt-2">
                    <p>{{ __('profile.Option') }}</p>
                    <input type="radio" checked name="gendera" value="Friends"> {{ __('profile.Friends') }}<br>
                    <input type="radio" name="gendera" value="Airline Staff">{{ __('profile.Airline Staff') }}<br>
                    <input type="radio" name="gendera" value="Airport Advertisement">{{ __('profile.Airport Advertisement') }}<br>
                    <input type="radio" name="gendera" value="Google">{{ __('profile.Google') }}<br>
                    <input type="radio" name="gendera" value="Other">{{ __('profile.Other') }}<br>
                </div>
            </div>

        </div>


        <div class="adultform2">
            <div class="row p-5">
                <div class="col-12 ">
                    <h1>{{ __('profile.Customer name') }}</h1>
                </div>
                <div class="col-lg-4 col-12 pt-2">
                    <input required type="text" placeholder="{{ __('profile.Name') }}" name="namea"
                           class="form-control">
                    <label for="">{{ __('profile.Name') }}*</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" placeholder="{{ __('profile.Second name') }}" name="secondnamea"
                           class="form-control">
                    <label for="">{{ __('profile.Second name') }}</label>
                    <input type="hidden" class="typeadu" name="type" value="adultminor" id="">


                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{ __('profile.Last name') }}" name="surnamea"
                           class="form-control">
                    <label for="">{{ __('profile.Last name') }}*</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input required type="text" placeholder="{{ __('profile.Telephone') }}" name="phonea"
                           class="form-control">
                    <label for="">{{ __('profile.Telephone') }}*</label>
                </div>

                <div class="col-lg-6  col-12 pt-3">


                    <select name="Fgender" class="form-control">
                        <option value="male">{{ __('profile.Male') }}</option>
                        <option value="female">{{ __('profile.Female') }}</option>

                    </select>
                    <label>{{ __('profile.Gender:') }}</label>
                </div>
                <div class="col-12 pt-3">
                    <h1>{{ __("profile.Client's date of birth") }}*</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="date" name="datea" value="date" class="form-control">
                </div>




                <div class="col-12 pt-5">


                </div>

                <div class="col-12 pt-5">

                    <h1>{{ __('profile.Additional customer information') }}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="text" name="passporta" placeholder="{{ __('profile.Passport #') }}"
                           class="form-control">
                    <label for="">{{ __('profile.Passport #') }}*</label>
                </div>
                <div class="col-12 pt-3">
                    <b>{{ __('profile.Have you had any of the following symptoms in the past 14 days?') }}</b>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Fever') }}*</p>
                    <input type="radio" name="Fevera" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Fevera" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        {{ __('profile.Cough (new onset or worsening of chronic cough) *') }}</p>
                    <input type="radio" name="Cougha" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Cougha" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Throat pain') }}*</p>
                    <input type="radio" name="Throata" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Throata" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Difficulty breathing (dyspnea)') }}*</p>
                    <input type="radio" name="breathinga" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="breathinga" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Nausea *') }}*</p>
                    <input type="radio" name="Nauseaa" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Nauseaa" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Abdominal pain *') }}</p>
                    <input type="radio" name="Abdominala" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Abdominala" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Chills *') }}</p>
                    <input type="radio" name="Chillsa" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Chillsa" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Headache') }}*</p>
                    <input type="radio" name="Headachea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Headachea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Muscle aches (myalgia)') }}*</p>
                    <input type="radio" name="Musclea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Musclea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Fatigue *') }}</p>
                    <input type="radio" name="Fatiguea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Fatiguea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Runny nose (rhinorrhea) *') }}</p>
                    <input type="radio" name="Runnya" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Runnya" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Vomiting') }}*</p>
                    <input type="radio" name="Vomitinga" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Vomitinga" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Diarrhea (3 loose stools / day) *') }}</p>
                    <input type="radio" name="Diarrheaa" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Diarrheaa" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Loss of smell *') }}</p>
                    <input type="radio" name="Loss_of_smella" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Loss_of_smella" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Loss of taste') }}*</p>
                    <input type="radio" name="Loss_of_tastea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Loss_of_tastea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" placeholder="{{ __('profile.Other specify') }}" name="specifya"
                           class="form-control">
                    <label for="">{{ __('profile.Other specify') }}</label>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" placeholder="{{ __('profile.Date of onset of the first symptoms') }}"
                           name="symptomsa" class="form-control">
                    <label for="">{{ __('profile.Date of onset of the first symptoms') }}</label>
                </div>
                <div class="col-12 pt-5">
                    <h5>
                        {{ __('profile.Lab test') }}</h5>
                </div>
                <div class="col-12 pt-5">
                    <b>

                        {{ __('profile.Test type: nasal swab (PCR) / antigen / SARS-COV-2') }}</b>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Select the test') }}*</p>
                    <input type="radio" checked name="Select_the_testa" value="Antigen - CareStart">
                    <label for="html">
                        ANTIGEN</label><br>
                    <input type="radio" checked name="Select_the_testa" value="PCR">
                    <label for="html">PCR</label><br>
                    <input type="radio" name="Select_the_testa" value="RT-PCR - Abbott IDNOW">
                    <label for="RT">RT-PCR
                    </label><br>
                    <input type="radio" name="Select_the_testa" value="PCR - 24hrs">
                    <label for="html">PCR-24hrs</label><br>
                    <input type="radio" name="Select_the_testa" value="RT-PCR 24hrs - Abbott IDNOW">
                    <label for="html">RT-PCR 24hrs</label><br>
                </div>





            </div>


        </div>

        <div class="minorform" style="display: none">
            <div class="row p-5">
                <div class="col-12 ">
                    <h1>{{ __('profile.Name Of First Minor') }}</h1>
                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Name') }}" name="name"
                        class="form-control">
                    <label for="">{{ __('profile.Name') }}*</label>
                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" placeholder="{{ __('profile.Second name') }}" name="secondname"
                        class="form-control">
                    <label for="">{{ __('profile.Second name') }}</label>
                </div>
                <input type="hidden" class="typemin" name="type" value="minor">
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Surnames') }}" name="surname"
                        class="form-control">
                    <label for="">{{ __('profile.Surnames') }}*</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input type="text" required placeholder="{{ __('profile.Telephone') }}" name="phone"
                        class="form-control">
                    <label for="">{{ __('profile.Telephone') }}*</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">


                    <select name="Fgender" class="form-control">
                        <option value="male">{{ __('profile.Male') }}</option>
                        <option value="female">{{ __('profile.Female') }}</option>

                    </select>
                    <label>{{ __('profile.Gender:') }}</label>
                </div>

                <div class="col-12 pt-3">
                    <h1>{{ __('profile.First Birth Date of Minor') }}*</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input type="date" required value="date" name="date" class="form-control">
                </div>
                <div class="col-12 pt-5">
                    <h1>{{ __('profile.Additional Information of first of the Minor') }}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input type="text" name="passport" placeholder="{{ __('profile.Passport #') }}"
                        class="form-control">
                    <label for="">{{ __('profile.Passport #') }}</label>
                </div>
                <div class="col-12 pt-3">
                    <b>{{ __('profile.Have you had any of the following symptoms in the past 14 days?') }}</b>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Fever') }}*</p>
                    <input type="radio" name="fever" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="fever" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Cough (new onset or worsening of chronic cough) *') }}</p>
                    <input type="radio" name="Cough" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Cough" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>
                        {{ __('profile.Sore Throat') }}*</p>
                    <input type="radio" name="Throat" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Throat" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Difficulty breathing (dyspnea)') }}*</p>
                    <input type="radio" name="breathing" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="breathing" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Nausea *') }}</p>
                    <input type="radio" name="Nausea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}*</label><br>
                    <input type="radio" checked name="Nausea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Abdominal pain *') }}</p>
                    <input type="radio" name="Abdominal " value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Abdominal " value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Chills *') }}</p>
                    <input type="radio" name="Chills" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Chills" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Headache') }}*</p>
                    <input type="radio" name="Headache" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Headache" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Muscle aches (myalgia)') }}*</p>
                    <input type="radio" name="Muscle" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Muscle" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Fatigue *') }}</p>
                    <input type="radio" name="Fatigue" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Fatigue" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Runny nose (rhinorrhea) *') }}</p>
                    <input type="radio" name="Runny" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Runny" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>{{ __('profile.Vomiting') }}*</p>
                    <input type="radio" name="Vomiting" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Vomiting" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Diarrhea (3 loose stools / day) *') }}</p>
                    <input type="radio" name="Diarrhea" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Diarrhea" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>{{ __('profile.Loss of smell *') }}</p>
                    <input type="radio" name="Loss_of_smell" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Loss_of_smell" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Loss of taste') }}*</p>
                    <input type="radio" name="Loss_of_taste" value="Yes">
                    <label for="html">{{ __('profile.Yes') }}</label><br>
                    <input type="radio" checked name="Loss_of_taste" value="No">
                    <label for="html">{{ __('profile.No') }}</label><br>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" placeholder="{{ __('profile.Other specify') }}" name="specify"
                        class="form-control">
                    <label for="">{{ __('profile.Other specify') }}</label>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" placeholder="{{ __('profile.Date of onset of the first symptoms') }}"
                        name="symptoms" class="form-control">
                    <label for="">{{ __('profile.Date of onset of the first symptoms') }}</label>
                </div>
                <div class="col-12 pt-5">
                    <h5>
                        {{ __('profile.Lab test') }}</h5>
                </div>
                <div class="col-12 pt-5">
                    <b>

                        {{ __('profile.Test type: nasal swab (PCR) / antigen / SARS-COV-2') }}</b>
                </div>

                <div class="col-12 pt-3">
                    <p>{{ __('profile.Select the test') }}*</p>
                    <input type="radio" checked name="Select_the_test" value="Antigen - CareStart">
                    <label for="html">
                        ANTIGEN</label><br>
                    <input type="radio" checked name="Select_the_test" value="PCR">
                    <label for="html">PCR</label><br>
                    <input type="radio" name="Select_the_test" value="RT-PCR - Abbott IDNOW">
                    <label for="RT">RT-PCR
                    </label><br>
                    <input type="radio" name="Select_the_test" value="PCR - 24hrs">
                    <label for="html">PCR-24hrs</label><br>
                    <input type="radio" name="Select_the_test" value="RT-PCR 24hrs - Abbott IDNOW">
                    <label for="html">RT-PCR 24hrs</label><br>
                </div>

            </div>


        </div>

        <div class="minorform2" style="display: none">

            <div class="row p-5 mt-5">
                <div class="col-12 pt-2">
                    <h1>{{ __('profile.Address of the Minor') }}</h1>

                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Address') }}" name="address"
                           class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" placeholder="{{ __('profile.Address2') }}" name="address2"
                           class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Town') }}" name="town"
                           class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="{{ __('profile.Zip Code') }}" name="zip"
                           class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>{{ __('profile.State / Province') }}*</label>
                    <select name="Province" class="form-control">
                        @foreach ($state as $states)
                            <option value="{{ $states->name }}">{{ $states->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="Provinced" style="display: none" class="form-control" value="" placeholder="{{ __('profile.State / Province') }}">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>{{ __('profile.Country') }}*</label>
                    <select name="Country" class="form-control changecountry2" >
                        @foreach ($country as $countries)
                            <option @if($countries->name=='United States') selected @endif value="{{ $countries->name }}">{{ $countries->name }}</option>
                        @endforeach


                    </select>
                </div>

            </div>
            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{ __('profile.Email address') }}*</h1>

                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <input required type="email" placeholder="{{ __('profile.E-mail') }}" name="email"
                           class="form-control">
                </div>
            </div>


            <div class="row p-5 mt-5">

                <h3>   <label class="switch">
                        <input type="checkbox" name="traveling" value="1"  id="minor-flight-check">
                        <span class="slider round"></span>
                    </label>{{__('profile.Are you traveling?')}}</h3>

                <div class="w-100 row m-0" id="minor-flight" style="box-shadow: none;display: none">

                <div class="col-12">
                    <h1>{{__('profile.FLIGHT/CRUISE INFORMATION')}}</h1>
                </div>
                <div class="col-lg-6 col-12 pt-3">

                    <label for="">{{__('profile.Airline/CruiseLine*')}}</label>
                    <select  name="CruiseLine" id="" class="form-control">


                        <option value="Air Lingus (EI)">Air Lingus (EI)</option>
                        <option value="Aeroflot (SU)">Aeroflot (SU) </option>
                        <option value="Aerolineas Argentinas (AR)">Aerolineas Argentinas (AR)</option>
                        <option value="Aeromexico (AM)">Aeromexico (AM)</option>
                        <option value="Air Canada (AC)">Air Canada (AC)</option>

                        <option value="Air Century (Y2)">Air Century (Y2)</option>
                        <option value="Air Europa (UX)">Air Europa (UX)</option>
                        <option value="Air France (AF)">Air France (AF)</option>
                        <option value="Alitalia (AZ)">Alitalia (AZ)</option>
                        <option value="American Airlines (AA)">American Airlines (AA)</option>
                        <option value="Avianca (AV, TA)">Avianca (AV, TA)</option>
                        <option value="Bahamasair (UP)">Bahamasair (UP)</option>
                        <option value="BOA-Boliviana de Aviacion (OB)">BOA-Boliviana de Aviacion (OB)</option>
                        <option value="British Airways (BA)">British Airways (BA)</option>
                        <option value="Caribbean Airlines (BW)">Caribbean Airlines (BW)</option>
                        <option value="Cayman Airways (KX)">Cayman Airways (KX)</option>

                        <option value="COPA Airlines (CM)">COPA Airlines (CM)</option>
                        <option value="Delta Air Lines (DL)">Delta Air Lines (DL)</option>
                        <option value="Eastern Airlines (2D)">Eastern Airlines (2D)</option>
                        <option value="El Al (LY)">El Al (LY)</option>
                        <option value="Emirates (EK)">Emirates (EK)</option>
                        <option value="Finnair (AY)">Finnair (AY)</option>
                        <option value="Frontier Airlines (F9)">Frontier Airlines (F9)</option>
                        <option value="Iberia (IB)">Iberia (IB)</option>
                        <option value="JetBlue (B6)">JetBlue (B6)</option>
                        <option value="KLM (KL)">KLM (KL)</option>
                        <option value="LATAM Airlines (4M, JJ, LA,LP, XP)">LATAM Airlines (4M, JJ, LA,LP, XP)</option>
                        <option value="LOT Polish Airlines (LO)">LOT Polish Airlines (LO)</option>
                        <option value="Lufthansa (LH)">Lufthansa (LH)</option>
                        <option value="Qatar (QR)">Qatar (QR)</option>
                        <option value="SAS (SK)">SAS (SK)</option>
                        <option value="Southwest (WN)">Southwest (WN)</option>
                        <option value="Sun Country (SY)">Sun Country (SY)</option>
                        <option value="Sunwing (WG)">Sunwing (WG)</option>
                        <option value="Surinam Airways (PY)">Surinam Airways (PY)</option>
                        <option value="Swift Air (SWQ)">Swift Air (SWQ)</option>
                        <option value="Swiss International (LX)">Swiss International (LX)</option>
                        <option value="TAP Air Portugal (TP)">TAP Air Portugal (TP)</option>
                        <option value="TUIfly (TB, OR)">TUIfly (TB, OR)</option>
                        <option value="Turkish (TK)">Turkish (TK)</option>
                        <option value="United Airlines (UA)">United Airlines (UA)</option>
                        <option value="Virgin Atlantic (VS)">Virgin Atlantic (VS)</option>
                        <option value="Viva (VH)">Viva (VH)</option>
                        <option value="Volaris (Y4)">Volaris (Y4)</option>
                        <option value="WestJet (WS)">WestJet (WS)</option>
                        <option value="World Atlantic (WAL)">World Atlantic (WAL)</option>
                        <option value="N/A">N/A</option>
                        <option value="Azamara Club Cruises">Azamara Club Cruises</option>
                        <option value="Carnival">Carnival</option>
                        <option value="Celebrity X Cruises">Celebrity X Cruises</option>
                        <option value="Crystal Cruises">Crystal Cruises</option>
                        <option value="Disney Cruise Line">Disney Cruise Line</option>
                        <option value="MSC Cruises">MSC Cruises</option>
                        <option value="Norwegian Cruise Line">Norwegian Cruise Line</option>
                        <option value="Oceania Cruises">Oceania Cruises</option>
                        <option value="Regent Seven Seas Cruises">Regent Seven Seas Cruises</option>
                        <option value="Royal Caribbean International">Royal Caribbean International</option>
                        <option value="Viking Ocean Cruises">Viking Ocean Cruises</option>
                        <option value="Virgin Voyages">Virgin Voyages</option>
                        <option value="AIDA">AIDA</option>
                        <option value="Hapag-Lloyd">Hapag-Lloyd</option>
                        <option value="Hurtigruten">Hurtigruten</option>
                        <option value="PampO Cruises">P&amp;amp;O Cruises</option>
                        <option value="Phoenix">Phoenix</option>
                        <option value="Pricess Cruises">Pricess Cruises</option>
                        <option value="SAGA">SAGA</option>
                        <option value="SCENIC Luxury Cruises">SCENIC Luxury Cruises</option>
                        <option value="SEABOURN">SEABOURN</option>
                        <option value="TUI Cruises">TUI Cruises</option>
                        <option value="Windstar Cruises">Windstar Cruises</option>



                    </select>

                </div>

                <div class="col-lg-6 col-12 pt-3">
                    <label for="">{{__('profile.Destination')}}*</label>
                    <input type="text"  placeholder="Destination" name="Destination" class="form-control">
                </div>


                <div class="col-lg-6 col-12 pt-3">
                    <label for="">{{__('profile.Flight/Cruise #')}} *</label>
                    <input type="text"  placeholder="Flight/Cruise" name="F_Cruise" class="form-control">
                </div>
            </div>
            </div>



            <div class="row p-5 mt-5">
                <h3>   <label class="switch">
                        <input type="checkbox" name="insurance" value="1"  id="minor-insurance-check">
                        <span class="slider round"></span>
                    </label>{{__('profile.Insurance Information')}}</h3>

                <div class="w-100 row m-0" id="minor-insurance" style="box-shadow: none;display: none">

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Primary Insurance')}}" name="primary_ins">

                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Secondary Insurance')}}" name="secondary_ins">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Policy Holder Name')}}" name="policy_holder_name1">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Policy Holder Name')}}" name="policy_holder_name2">
                    </div>


                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Relationship Patient')}}" name="relationship_patient1">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Relationship Patient')}}" name="relationship_patient2">
                    </div>


                    <div class="col-lg-6 mb-3">
                        <lable>{{__('profile.Policy Holder DOB')}}</lable>
                        <input type="date" class="form-control" placeholder="{{__('profile.Policy Holder DOB')}}" name="policy_holder_dob1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <lable>{{__('profile.Policy Holder DOB')}}</lable>
                        <input type="date" class="form-control" placeholder="{{__('profile.Policy Holder DOB')}}" name="policy_holder_dob2">
                    </div>


                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Policy # / Member ID')}}" name="policy_member_id1">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Policy # / Member ID')}}" name="policy_member_id2">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Group #')}}" name="group1">
                    </div>

                    <div class="col-lg-6 mb-3">

                        <input type="text" class="form-control" placeholder="{{__('profile.Group #')}}" name="group2">
                    </div>


                </div>




            </div>

            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>{{ __('profile.How did you hear about us?') }}</h1>
                </div>
                <div class="col-lg-12 col-12 pt-2">
                    <p>{{ __('profile.Option') }}</p>
                    <input type="radio" name="gender" checked value="Friends"> Friends<br>
                    <input type="radio" name="gender" value="Airline Staff"> Airline Staff<br>
                    <input type="radio" name="gender" value="Airport Advertisement"> Airport Advertisement<br>
                    <input type="radio" name="gender" value="Google"> Google<br>
                    <input type="radio" name="gender" value="Other"> Other<br>
                </div>
                <div class="col-lg-6 col-12 pt-2">
                    <input type="text" class="form-control" name="othre_specify"
                           placeholder="{{ __('profile.Other specify') }}">
                    <label for="">{{ __('profile.Other specify') }}</label>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 ">
                    <h1>{{ __('profile.Parent Or Guardian Name') }}</h1>
                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{ __('profile.Name') }}" name="Parent_name"
                           class="form-control">
                    <label for="">{{ __('profile.Name') }}*</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" placeholder="{{ __('profile.Second name') }}" name="Parent_secondname"
                           class="form-control">
                    <label for="">{{ __('profile.Second name') }}</label>

                </div>

                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="{{ __('profile.Surnames') }}" name="Parent_surname"
                           class="form-control">
                    <label for="">{{ __('profile.Surnames') }}*</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input required type="text" placeholder="{{ __('profile.Telephone') }}" name="Parent_phone"
                           class="form-control">
                    <label for="">{{ __('profile.Telephone') }}*</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">

                    <input required type="date" placeholder="DOB" name="Parent_dob" class="form-control">
                    <label for="">{{ __('profile.Date Birth Of Gaurdian') }}</label>

                </div>


                <div class="col-lg-4 mt-3 col-12 pt-2 ">
                    <button type="button" required class="btn btn-dark appSignM" nameatt="nameatt" name="appSignM"
                            data-toggle="modal" data-target="#exampleModalAPP">
                        Click to Sign
                    </button>
                    <input type="hidden" class="SingsLink" name="SingsLink" value="">




                </div>


                <div class="col-lg-6 mt-3 col-12 pt-2">
                    <div name="">
                        <img class="imgAPP" src="" name="sig-image">
                    </div>
                </div>



            </div>

        </div>





    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signature*</h5>
                    <button type="button" class="close" data-dismiss="modal" required aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body Sings">

                </div>

            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModalAPP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body Sings2">

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
                                <h1>{{ __('profile.Electronic signature acceptance') }}*</h1><br>
                                <input type="checkbox" name="signature" required value="1">
                                {{ __(
                                    'profile.By checking ts box, you agree that your electronic signature will be used in place of your handwritten signature. If this is not what you want, you have the right to ask to sign a paper copy instead. By checking this box, you warve this right Upon acceptance, you may request in writing that we send you a paper copy of the electronic record. You will not have to pay anything for such a copy, and you do not need any special software or hardware to view it. Your acceptance of electronic signature for any document will remain in effect until such time as you notify us in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will not entall any penalty for you Your acceptance of electronic signature for any document will remain in effect until such time as you notify us in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will not entall any penalty for you Your acceptance of electronic signature for any document will remain in effect until such time as you notify us in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will not entall any penalty for you',
                                ) }}
                            </div>
                        </div>
                        <center class="mt-5">
                            <input id="subdatabtn" type="submit" class="btn btn-dark acceptt"
                                value="{{ __('profile.Accept Document') }}">
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
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);

            $('.ma_div').css('display', 'block');
            $('.Minor_div').css('display', 'none');
            $('.adult').css('display', 'none');


            $('.maindata').css('display', 'none');
            $('.minors1').css('display', 'none');
            $('.minors51').css('display', 'none');
            $('.minors').css('display', 'none');
            $('.minors22').css('display', 'none');
            $('#minor-text').css('display', 'none');
            $('#adult-text').css('display', 'none');
        });

        $(".continue").click(function() {


            // $(this).css('display', 'none');
            $('.maindata').css('display', 'block');

            var html = $('.adultform').html();

            $('.finalResult').empty().append(html);
            $('html, body').animate({

                scrollTop: $(".maindata").offset().top
            }, 1000);
          //  $('html,body').animate({ scrollTop: 1700 }, 'slow');
        });

        $(".continue2").click(function() {
            $('.maindata').css('display', 'block');
            $('html, body').animate({
                scrollTop: $(".maindata").offset().top
            }, 1000);
        });

        $(".continue3").click(function() {
            $('.maindata').css('display', 'block');
            $('html, body').animate({

                scrollTop: $(".maindata").offset().top
            }, 1000);
        });




        //minor
        $(".minor_button1").click(function() {
            $('.maindata').css('display', 'none');
            $('.minorsb').css('display', 'block');


            $('.ma_div').css('display', 'none');
            $('.adult').css('display', 'none');
            $('.Minor_div').css('display', 'block');

            $('.ma_div').css('display', 'none');

            $('.minors51').css('display', 'none');
            $('.minors').css('display', 'none');
            $('.minors22').css('display', 'none');

            $('.minors1').css('display', 'block');
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);

            $('#minor-text').css('display', 'block');
            $('#adult-text').css('display', 'none');
@if(Session::get('lang')=='en')
$('#minor-text').text('This aggrement is for a MINORS');
    @else
    $('#minor-text').text('Este contrato es para un MENOR');

@endif


            //$('.minors').css('display', 'none');
        });
        $(".minorsb").click(function() {

            $(this).css('display', 'none');

            $('.minors51').css('display', 'block');

        });

        //adult

        $(".minor_button").click(function() {

            $('.ma_div').css('display', 'none');
            $('.adult').css('display', 'block');
            $('.Minor_div').css('display', 'none');

            $("html, body").animate({ scrollTop: $(document).height() }, 1000);

            $('.minors222').css('display', 'block');

            $('.maindata').css('display', 'none');
            $('.minors1').css('display', 'none');
            $('.minors51').css('display', 'none');
            $('.minors22').css('display', 'none');

            $('.minors').css('display', 'block');

            $('#minor-text').css('display', 'none');
            $('#adult-text').css('display', 'block');

            @if(Session::get('lang')=='en')
            $('#adult-text').text('This aggrement is for YOU and a MINORS');
            @else
            $('#adult-text').text('Este contrato es para USTED y un MENOR');

            @endif

            //$('.minors').css('display', 'none');
        });



        $(".minors222").click(function() {
            $(this).css('display', 'none');

            $('.minors22').css('display', 'block');
        });




        $(".minororad_btn").click(function() {

            $('.maindata').css('display', 'none');
            $('.finalResult').empty();

            var some_var = $(this).attr('att');


            @if(Session::get('lang')=='en')
            $('#minor-text').text('This aggrement is for '+some_var+' MINORS');
            @else
            $('#minor-text').text('Este contrato es para '+some_var+' MENORES');

            @endif
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
                    var val2 = $(this).attr('pos',main);
                    val = $(this).attr('name', val + '_' + main);

                });

                $(id).find('img').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

                });
                $(id).find('.appSignM').each(function(index, value) {
                    var val = $(this).attr('nameatt');
                    val = $(this).attr('nameatt', main);

                });
            }

            $("input[name=SingsLink]").empty();
            $("img[name=sig-image]").empty();
          var html2=  $('.minorform2').html();
            $('.finalResult').append(html2);

            $('html,body').animate({ scrollTop: 1700 }, 'slow');


        });


        $(".minor_btn").click(function() {

            $('.maindata').css('display', 'none');
            $('.finalResult').empty();

            var some_var = $(this).attr('att');

            @if(Session::get('lang')=='en')
            $('#adult-text').text('This aggrement is for YOU and '+some_var+' MINORS');
            @else
            $('#adult-text').text('Este contrato es para USTED y '+some_var+' MENORES');

            @endif


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

                $(id).find('img').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);
                });

                $(id).find('.appSignM').each(function(index, value) {
                    var val = $(this).attr('nameatt');
                    val = $(this).attr('nameatt', main);

                });


            }
            $("input[name=SingsLink]").empty();
            $("img[name=sig-image]").empty();
            var html2=  $('.minorform2').html();
            $('.finalResult').append(html2);

            var html2 = $('.adultform2').html();
            $('.finalResult').append(html2);

            $('html,body').animate({ scrollTop: 1700 }, 'slow');

        });
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        $(document).ready(function() {

            $(document).on('click', '.appSign', function() {
                $.ajax({
                    type: "GEt",
                    url: "{{ url('append/signature') }}",
                    success: function(res) {

                        $('.Sings').empty().append(res);

                    }
                });

            });
            $(document).on('click', '#sig-submitBtn', function() {

                var signurl = $('#sig-dataUrl').text();
                $("input[name=SingsLinka]").empty();

                $('input[name=SingsLinka]').val(signurl);
                // $('.sig-imagea').empty();

                // $('.sig-imagea').empty();
                $("img[name=sig-imagea]").empty().attr('src', signurl);




            });


        });
    </script>


    <script>
        var nameatt = 0;
        $(document).ready(function() {

            $(document).on('click', '.appSignM', function() {

                nameatt = $(this).attr('nameatt');


                $.ajax({
                    type: "GEt",
                    url: "{{ url('append/signature2') }}",
                    success: function(res) {

                        $('.Sings2').empty().append(res);


                    }
                });

            });
            $(document).on('click', '#sig-submitBtn2', function() {


                var signurl = $('#sig-dataUrl2').text();

                // alert(nameatt);

                $("input[name=SingsLink]").empty();
                $("input[name=SingsLink]").val(signurl);

                $("img[name=sig-image]").empty();
                $("img[name=sig-image]").attr('src', signurl);


            });


        });
    </script>

    <script>
        //    var nameat11t = 0;
        $(document).ready(function() {

            // var adult = $('.typeadu').val();

            $(document).on('click', '.acceptt', function() {


                $('.finalResult').find('img').each(function(index, value) {
                    var imgsrc = $(this).attr('src');

                    // alert(imgsrc);

                    if(imgsrc == '')
                    {
                        alert('Signature is required');
                        event.preventDefault();
                        return false;
                    }
                    else
                    {
                        console.log(imgsrc);
                    // alert(imgsrc);
                    }

                });



            });




            $(document).on('change', '.changecountry', function() {

            if ($(this).val()!='United States')
            {
                $("input[name='Provincea2']").show();
                $("input[name='Provincea2']").prop('required',true);
                $("select[name='Provincea']").hide();
                $("input[name='Provincea2']").val('');

            }
            else  {
                $("input[name='Provincea2']").hide();
                $("select[name='Provincea']").show();
                $("input[name='Provincea2']").val('');
                $("input[name='Provincea2']").prop('required',false);
            }


            });

            $(document).on('change', '.changecountry2', function() {

                if ($(this).val()!='United States')
                {
                    $("select[name='Province']").hide();
                    $("input[name='Provinced']").prop('required',true);
                    $("input[name='Provinced']").show();
                    $("input[name='Provinced']").val('');

                }
                else  {
                    $("select[name='Province']").show();
                    $("input[name='Provinced']").prop('required',false);
                    $("input[name='Provinced']").hide();
                    $("input[name='Provinced']").val('');


                }


            });


            $(document).on('change', '#adult-flight-check', function() {

                if ($(this).is(':checked'))
                {

$(this).parent().parent().next().show();
                }
                else  {

                    $(this).parent().parent().next().hide();

                }


            });


            $(document).on('change', '#minor-flight-check', function() {

                if ($(this).is(':checked'))
                {

                    $(this).parent().parent().next().show();
                }
                else  {

                    $(this).parent().parent().next().hide();

                }


            });


            $(document).on('change', '#adult-insurance-check', function() {

                if ($(this).is(':checked'))
                {

                    $(this).parent().parent().next().show();
                }
                else  {

                    $(this).parent().parent().next().hide();

                }


            });



            $(document).on('change', '#minor-insurance-check', function() {

                if ($(this).is(':checked'))
                {

                    $(this).parent().parent().next().show();
                }
                else  {

                    $(this).parent().parent().next().hide();

                }


            });




            {{--$(document).on( 'change','input[type="email"]',function() {--}}
            {{--   var  email=$(this).val();--}}
            {{--   var data=$(this);--}}

            {{--    $.ajax({--}}
            {{--        type: 'post',--}}
            {{--        url: "{{url('emailVerify')}}",--}}
            {{--        data: { 'email': email},--}}


            {{--        success: function (response) {--}}
            {{--  if(response==true)--}}
            {{--  {--}}

            {{--      data.removeClass('error');--}}
            {{--      $('#subdatabtn').prop('disabled',false);--}}
            {{--  }--}}
            {{--  else  {--}}


            {{--     data.addClass('error');--}}
            {{--      $('#subdatabtn').prop('disabled',true);--}}
            {{--  }--}}
            {{--        }--}}
            {{--    });--}}


            {{--});--}}



        });
    </script>

</body>


</html>

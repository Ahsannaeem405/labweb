<!DOCTYPE html>
<html>

<head>
    {{-- <style type="text/css">
        body
        {
            counter-reset: page;
        }
        #pageFooter
        {
            page-break-before: always;
            counter-increment: page;
        }
        #pageFooter:after
        {
            display: block;
            text-align: right;
            content: "Page " counter(page);
        }
        #pageFooter.first.page
        {
            page-break-before: avoid;
        }
    </style> --}}
</head>

<body>




    {{-- @dd(1) --}}


    {{-- For Adult --}}


    <?php

    $request = $request2;

    ?>

@if ($request->type == 'adult')


    <div style="border: 2px solid #80808061;     border-radius: 12px; padding:0px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;    padding: 37px;">
                    <img src="{{ asset('assets/waview.png') }}" style="width: 100%;height: 197px;" alt="">
                    </p>
                </td>

                {{-- @dd($request) --}}



            </tr>





        </table>

    </div>

    <div style="border: 2px solid #80808061;    margin-top: 21px;    border-radius: 12px; padding:0px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;    padding: 37px;">
                    <p>Please carefully read and sign the following Informed Consent:
                        <br><br>
                        a. I authorize this COVID-19 testing unit to conduct collection and testing for COVID-19 through
                        a nasopharyngeal
                        swab or blood draw, as ordered by an authorized medical provider or public health official.
                        <br><br>
                        b. I authorize my test results to be disclosed to the county, state, or to any other
                        governmental entity as may be required
                        by law. I also authorize the disclosure of my test results, in the case of a positive test
                        result, to the airlines as required by
                        the Miami-Dade Aviation Department. This authorization is valid for one (1) year from the date
                        this authorization is
                        signed.
                        <br><br>
                        c. I acknowledge that a positive test result is an indication that I must self-isolate and/or
                        wear a mask or face covering
                        as directed in an effort to avoid infecting others. <br><br>
                        d. I understand the testing unit is not acting as my medical provider, this testing does not
                        replace treatment by my
                        medical provider, and I assume complete and full responsibility to take appropriate action with
                        regards to my test
                        results. I agree I will seek medical advice, care and treatment from my medical provider if I
                        have questions or concerns,
                        or if my condition worsens. <br><br>
                        e. I understand that, as with any medical test, there is the potential for a false positive or
                        false negative COVID-19 test
                        result. <br><br>
                        f. Customer understands and acknowledges that Family Rehab and Communitel are not responsible in
                        any way if the
                        customer misses, is quarantine and/or is late to their flight. It is the ultimate responsibility
                        of the customer to determine
                        and confirm with the airline and/or destination country regarding which type of test is
                        required. <br><br>
                        g. Customer understands and acknowledges that there shall be no cancellations and/or refunds
                        given once the test is
                        performed. <br><br>
                        h. Customer understands and acknowledges that Family Rehab cannot guarantee that customers will
                        receive their test
                        results electronically due to possible spotty internet connections and email security protocols
                        that may reject or send test
                        results to a spam folder. Family Rehab highly recommends that each customer requests and obtains
                        a printed copy of
                        their test results. I, the undersigned, have been informed about the test purpose, procedures,
                        possible benefits and risks, and I have received a
                        copy of this Informed Consent. I have been given the opportunity to ask questions before I sign,
                        and I have been told that I can
                        ask additional questions at any time. I voluntarily agree to this testing for COVID-19.

                    </p>
                    </p>
                </td>

                {{-- @dd($request) --}}



            </tr>





        </table>

    </div>

    <div style="border: 2px solid #80808061;    margin-top: 21px; border-radius: 12px;padding: 37px;width: 100%">


        <p style="
        margin-top: 0px;

        font-size: 24px;
    "> &nbsp;
            Customer name</p>




        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->namea }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Name </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->secondnamea }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Second name </label>
                    </p>
                </td>
            </tr>



            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->surnamea }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Last name </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->phonea }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Phone </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span
                        style="    font-size: 20px; background: #80808061; padding:3px;">{{ $request->Fgender }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Gender: </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <p style="" class="alignleft" style="display: inline-block;width: 100%;"><label
                            style="    font-size: 22px;" for=""> Client's date of birth </label>
                    </p>
                    <span
                        style="  margin-top: 8px;  font-size: 20px; background: #80808061; padding:3px;">{{ $request->datea }}</span><br>

                </td>
            </tr>

            <tr>
                <td>

                    <p class="alignleft" style="display: inline-block;width: 100%;margin-top:40px;"><label
                            style="    font-size: 22px;" for=""> Additional customer information</label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->passporta }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Passport# </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td>

                    <p class="alignleft" style="display: inline-block;width: 100%;margin-top:40px;"><label
                            style="    font-size: px;18px" for="">Have you had any of the following symptoms in the past
                            14 days?</label>
                    </p>
                </td>
            </tr>


        </table>





        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Fever: </label> <br><br>


                    <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Fevera == 'Yes') checked  @endif> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Fevera == 'No') checked  @endif> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Cough (new onset or worsening of chronic cough) * </label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Cougha == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Cougha == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Throat pain </label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Throata == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Throata == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Difficulty breathing (dyspnea)</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->breathinga == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->breathinga == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Nausea *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Nausea == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Nausea == 'Yes') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Abdominal pain *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Abdomina == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Abdomina == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Chills *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Chillsa == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Chillsa == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Headache</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Headachea == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Headachea == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Muscle aches (myalgia)</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Musclea == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Musclea == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Fatigue *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Fatiguea == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Fatiguea == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Runny nose (rhinorrhea) *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Runnya == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Runnya == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <td style="width: 30%;">
                <label for="">Vomiting</label> <br><br>

                <input style="   font-size:13px;   width: 1%;" @if ($request->Vomitinga == 'Yes') checked  @endif type="radio"> Yes <br>
                <input style="   font-size:13px;   width: 1%;" @if ($request->Vomitinga == 'No') checked  @endif type="radio"> No
            </td>

            <td style="width: 35%; visibility: hidden;">
                <br> <input style="   font-size:13px;   width: 91%;" type="date">
            </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Diarrhea (3 loose stools / day) *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Diarrheaa == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Diarrheaa == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Loss of smell *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_smella == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_smella == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Loss of taste</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_tastea == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_tastea == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>


        <table id="upp" style=" width: 100%;">

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->specifya }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Other Specify </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->symptomsa }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for="">Date of onset
                            of
                            the first symptoms </label>
                    </p>
                </td>
            </tr>


        </table>

        </table>
        <br>

        <p style="   font-size:18px; margin-top:0px;font-weight: 700; "> &nbsp; Lab test
        </p>

        <br>
        <br>
        <p style="    font-size:18px; margin-top:0px;font-weight: 700;"> &nbsp; Test type: nasal swab
            (PCR)
            / antigen / SARS-COV-2
        </p>

        <br>



        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Select the test</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_testa == 'ANTIGEN') checked  @endif type="radio"> ANTIGEN
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_testa == 'RT-PCR') checked  @endif type="radio"> RT-PCR
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_testa == 'PCR-24hrs') checked  @endif type="radio"> PCR-24hrs
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_testa == '24hrs') checked  @endif type="radio"> PCR-24hrs
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_testa == 'PCR') checked  @endif type="radio"> PCR <br>
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>

            <tr>
                <td style="text-align: center;">
                    <div style="margin-top: 28px;    margin-bottom: 8px;border:2px solid #80808061;padding: 23px;">

                        {{ $request->SingsLinka }}

                    </div>

                    <label for="" style="    font-size: 18px;font-weight: 600;">Customer Signature</label>
                </td>
            </tr>
        </table>

    </div>

    <br>

    <br>


    <div style="border: 2px solid #80808061;     border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;  ">
                    <label for="" style="    font-size: 20px;font-weight: 700;"> Customer Address</label>
                    </p>
                </td>


            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Address:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->addressa }} </label>
                    </span>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Address2:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->address2a }} </label>
                    </span>
                </td>
            </tr>
            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Zip Code:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->zipa }} </label>
                    </span>
                </td>
            </tr>


            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">State / Province:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->Provincea }}</label>
                    </span>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Country:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->zipa }} </label>
                    </span>
                </td>
            </tr>


        </table>

    </div>


    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;  ">
                    <label for="" style="    font-size: 20px;font-weight: 700;"> Email Address
                    </label>
                    </p>
                </td>


            </tr>




        </table>

    </div>



    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->emaila }} </span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Email </label>
                    </p>
                </td>
            </tr>





        </table>

    </div>




    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">

            <tr>
                <td style="width: 100%;  ">
                    <label for="" style="    font-size: 20px;font-weight: 700;"> FLIGHT/CRUISE INFORMATION
                    </label>
                    </p>
                </td>


            </tr>
            <tr>
                <td style="width: 100%;">
                    <span
                        style="    font-size: 20px; background: #80808061; padding:3px;">{{ $request->CruiseLinea }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Airline/CruiseLine* </label>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->Destinationa }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Destination </label>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->F_Cruisea }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Flight/Cruise # </label>
                    </p>
                </td>
            </tr>




        </table>

    </div>







    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">



            <tr>

                <label for="" style="    font-size: 20px;font-weight: 700;"> &nbsp; Electronic signature
                    acceptance
                </label>
                <br>
                <br>

                <input type="checkbox" @if ($request->signature == '1') checked @endif name=" " id="">

                By checking ts box, you agree that your electronic signature will be used in place of your handwritten
                signature. If this is not what you want, you have the right to ask to sign a paper copy instead. By
                checking
                this box, you warve this right Upon acceptance, you may request in writing that we send you a paper copy
                of
                the electronic record. You will not have to pay anything for such a copy, and you do not need any
                special
                software or hardware to view it. Your acceptance of electronic signature for any document will remain in
                effect until such time as you notify us in veriting that you no longer wish to use electronic signature.
                The
                revocation of your acceptance will not entall any penalty for you Your acceptance of electronic
                signature
                for any document will remain in effect until such time as you notify us in veriting that you no longer
                wish
                to use electronic signature. The revocation of your acceptance will not entall any penalty for you Your
                acceptance of electronic signature for any document will remain in effect until such time as you notify
                us
                in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will
                not
                entall any penalty for you
            </tr>




        </table>

    </div>






    {{-- For Adult --}}



    @else


    <div style="border: 2px solid #80808061;     border-radius: 12px; padding:0px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;    padding: 37px;">
                    <img src="{{ asset('assets/waview.png') }}" style="width: 100%;height: 197px;" alt="">
                    </p>
                </td>

                {{-- @dd($request) --}}



            </tr>





        </table>

    </div>

    <div style="border: 2px solid #80808061;    margin-top: 21px;    border-radius: 12px; padding:0px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;    padding: 37px;">
                    <p>Please carefully read and sign the following Informed Consent:
                        <br><br>
                        a. I authorize this COVID-19 testing unit to conduct collection and testing for COVID-19 through
                        a nasopharyngeal
                        swab or blood draw, as ordered by an authorized medical provider or public health official.
                        <br><br>
                        b. I authorize my test results to be disclosed to the county, state, or to any other
                        governmental entity as may be required
                        by law. I also authorize the disclosure of my test results, in the case of a positive test
                        result, to the airlines as required by
                        the Miami-Dade Aviation Department. This authorization is valid for one (1) year from the date
                        this authorization is
                        signed.
                        <br><br>
                        c. I acknowledge that a positive test result is an indication that I must self-isolate and/or
                        wear a mask or face covering
                        as directed in an effort to avoid infecting others. <br><br>
                        d. I understand the testing unit is not acting as my medical provider, this testing does not
                        replace treatment by my
                        medical provider, and I assume complete and full responsibility to take appropriate action with
                        regards to my test
                        results. I agree I will seek medical advice, care and treatment from my medical provider if I
                        have questions or concerns,
                        or if my condition worsens. <br><br>
                        e. I understand that, as with any medical test, there is the potential for a false positive or
                        false negative COVID-19 test
                        result. <br><br>
                        f. Customer understands and acknowledges that Family Rehab and Communitel are not responsible in
                        any way if the
                        customer misses, is quarantine and/or is late to their flight. It is the ultimate responsibility
                        of the customer to determine
                        and confirm with the airline and/or destination country regarding which type of test is
                        required. <br><br>
                        g. Customer understands and acknowledges that there shall be no cancellations and/or refunds
                        given once the test is
                        performed. <br><br>
                        h. Customer understands and acknowledges that Family Rehab cannot guarantee that customers will
                        receive their test
                        results electronically due to possible spotty internet connections and email security protocols
                        that may reject or send test
                        results to a spam folder. Family Rehab highly recommends that each customer requests and obtains
                        a printed copy of
                        their test results. I, the undersigned, have been informed about the test purpose, procedures,
                        possible benefits and risks, and I have received a
                        copy of this Informed Consent. I have been given the opportunity to ask questions before I sign,
                        and I have been told that I can
                        ask additional questions at any time. I voluntarily agree to this testing for COVID-19.

                    </p>
                    </p>
                </td>

                {{-- @dd($request) --}}



            </tr>





        </table>

    </div>

    <div style="border: 2px solid #80808061;    margin-top: 21px; border-radius: 12px;padding: 37px;width: 100%">


        <p style="
        margin-top: 0px;

        font-size: 24px;
    "> &nbsp;
            Name Of First Minor</p>




        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->name }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Name </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->secondname }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Second name </label>
                    </p>
                </td>
            </tr>



            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->surname }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Last name </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->phone }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Phone </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span
                        style="    font-size: 20px; background: #80808061; padding:3px;">{{ $request->gender }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Gender: </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <p style="" class="alignleft" style="display: inline-block;width: 100%;"><label
                            style="    font-size: 22px;" for="">First Birth Date of Minor</label>
                    </p>
                    <span
                        style="  margin-top: 8px;  font-size: 20px; background: #80808061; padding:3px;">{{ $request->dob }}</span><br>

                </td>
            </tr>

            <tr>
                <td>

                    <p class="alignleft" style="display: inline-block;width: 100%;margin-top:40px;"><label
                            style="    font-size: 22px;" for=""> Additional Information of first of the Minor</label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->passport }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Passport# </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td>

                    <p class="alignleft" style="display: inline-block;width: 100%;margin-top:40px;"><label
                            style="    font-size: px;18px" for="">Have you had any of the following symptoms in the past
                            14 days?</label>
                    </p>
                </td>
            </tr>


        </table>








        <table style=" width: 100%;">





        </table>


        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Fever: </label> <br><br>


                    <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Fever == 'Yes') checked  @endif> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Fever == 'No') checked  @endif> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Cough (new onset or worsening of chronic cough) * </label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Cough == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Cough == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Throat pain </label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Throat == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Throat == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Difficulty breathing (dyspnea)</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->breathing == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->breathing == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Nausea *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Nause == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Nause == 'Yes') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Abdominal pain *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Abdomin == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Abdomin == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Chills *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Chills == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Chills == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>



        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Headache</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Headache == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Headache == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Muscle aches (myalgia)</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Muscle == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Muscle == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Fatigue *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Fatigue == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Fatigue == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Runny nose (rhinorrhea) *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Runny == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Runny == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <td style="width: 30%;">
                <label for="">Vomiting</label> <br><br>

                <input style="   font-size:13px;   width: 1%;" @if ($request->Vomiting == 'Yes') checked  @endif type="radio"> Yes <br>
                <input style="   font-size:13px;   width: 1%;" @if ($request->Vomiting == 'No') checked  @endif type="radio"> No
            </td>

            <td style="width: 35%; visibility: hidden;">
                <br> <input style="   font-size:13px;   width: 91%;" type="date">
            </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Diarrhea (3 loose stools / day) *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Diarrhea == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Diarrhea == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>


        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Loss of smell *</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_smell == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_smell == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Loss of taste</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_taste == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Loss_of_taste == 'No') checked  @endif type="radio"> No
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>
        </table>

        <br>


        <table id="upp" style=" width: 100%;">

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->specify }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Other Specify </label>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->symptoms }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for="">Date of onset
                            of
                            the first symptoms </label>
                    </p>
                </td>
            </tr>


        </table>

        </table>
        <br>

        <p style="   font-size:18px; margin-top:0px;font-weight: 700; "> &nbsp; Lab test
        </p>

        <br>
        <br>
        <p style="    font-size:18px; margin-top:0px;font-weight: 700;"> &nbsp; Test type: nasal swab
            (PCR)
            / antigen / SARS-COV-2
        </p>

        <br>



        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Select the test</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_test == 'ANTIGEN') checked  @endif type="radio"> ANTIGEN
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_test == 'RT-PCR') checked  @endif type="radio"> RT-PCR
                    <br>Select_the_test
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_test == 'PCR-24hrs') checked  @endif type="radio"> PCR-24hrs
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_test == '24hrs') checked  @endif type="radio"> PCR-24hrs
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_test == 'PCR') checked  @endif type="radio"> PCR <br>
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>

            <tr>
                <td style="text-align: center;">
                    <div style="margin-top: 28px;    margin-bottom: 8px;border:2px solid #80808061;padding: 23px;">

                        {{ $request->SingsLink }}

                    </div>

                    <label for="" style="    font-size: 18px;font-weight: 600;">Customer Signature</label>
                </td>
            </tr>
        </table>

    </div>

    <br>

    <br>


    <div style="border: 2px solid #80808061;     border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;  ">
                    <label for="" style="    font-size: 20px;font-weight: 700;"> Address of the Minor</label>
                    </p>
                </td>


            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Address:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->address }} </label>
                    </span>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Address2:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->address2 }} </label>
                    </span>
                </td>
            </tr>
            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Zip Code:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->zip }} </label>
                    </span>
                </td>
            </tr>


            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">State / Province:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->Province }}</label>
                    </span>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Country:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->zip }} </label>
                    </span>
                </td>
            </tr>


        </table>

    </div>


    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;  ">
                    <label for="" style="    font-size: 20px;font-weight: 700;"> Email Address
                    </label>
                    </p>
                </td>


            </tr>




        </table>

    </div>



    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->email }} </span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Email </label>
                    </p>
                </td>
            </tr>





        </table>

    </div>




    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">

            <tr>
                <td style="width: 100%;  ">
                    <label for="" style="    font-size: 20px;font-weight: 700;"> FLIGHT/CRUISE INFORMATION
                    </label>
                    </p>
                </td>


            </tr>
            <tr>
                <td style="width: 100%;">
                    <span
                        style="    font-size: 20px; background: #80808061; padding:3px;">{{ $request->CruiseLine }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Airline/CruiseLine* </label>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->Destination }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Destination </label>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100%;">
                    <span style="    font-size: 20px;font-weight: bold;">{{ $request->F_Cruise }}</span><br>
                    <p style="margin-top: 8px;" class="alignleft" style="display: inline-block;width: 100%;"><label
                            for=""> Flight/Cruise # </label>
                    </p>
                </td>
            </tr>




        </table>

    </div>



    <div style="border: 2px solid #80808061;     border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">
            <tr>
                <td style="width: 100%;  ">
                    <label for="" style="    font-size: 20px;font-weight: 700;"> Parent Or Guardian Name</label>
                    </p>
                </td>


            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Name:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->Parent_name }} </label>
                    </span>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Second name:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->Parent_secondname }} </label>
                    </span>
                </td>
            </tr>
            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Last name:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->Parent_surname }} </label>
                    </span>
                </td>
            </tr>


            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Telephone</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->Parent_phone }}</label>
                    </span>
                </td>
            </tr>

            <tr>
                <td style="width: 100%;
                    padding: 10px;
                ">
                    <span style="  font-size: 18px;  ">Gender:</span> &nbsp;&nbsp;&nbsp;
                    <span style="margin-top: 8px;" class="alignleft"
                        style="display: inline-block;width: 100%;"><label style=" font-size: 20px;font-weight: bold;"
                            for=""> {{ $request->gender2 }} </label>
                    </span>
                </td>
            </tr>


        </table>

    </div>






    <div style="border: 2px solid #80808061;     margin-top: 21px;    border-radius: 12px; padding:30px;width: 100%">

        <table style=" width: 100%;">



            <tr>

                <label for="" style="    font-size: 20px;font-weight: 700;"> &nbsp; Electronic signature
                    acceptance
                </label>
                <br>
                <br>

                <input type="checkbox" @if ($request->signature == '1') checked @endif name=" " id="">

                By checking ts box, you agree that your electronic signature will be used in place of your handwritten
                signature. If this is not what you want, you have the right to ask to sign a paper copy instead. By
                checking
                this box, you warve this right Upon acceptance, you may request in writing that we send you a paper copy
                of
                the electronic record. You will not have to pay anything for such a copy, and you do not need any
                special
                software or hardware to view it. Your acceptance of electronic signature for any document will remain in
                effect until such time as you notify us in veriting that you no longer wish to use electronic signature.
                The
                revocation of your acceptance will not entall any penalty for you Your acceptance of electronic
                signature
                for any document will remain in effect until such time as you notify us in veriting that you no longer
                wish
                to use electronic signature. The revocation of your acceptance will not entall any penalty for you Your
                acceptance of electronic signature for any document will remain in effect until such time as you notify
                us
                in veriting that you no longer wish to use electronic signature. The revocation of your acceptance will
                not
                entall any penalty for you
            </tr>




        </table>

    </div>



    @endif


    {{-- for minor --}}

    {{-- @dd(1) --}}





    {{-- For Minors --}}


</body>

</html>

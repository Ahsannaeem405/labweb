<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <?php

    $request = $request2;

    ?>




    {{-- @dd(1) --}}

    @if ($request->type == 'adult')

        {{-- For Adult --}}


        <div style="border: 2px solid black; padding:0px;width: 100%">


            <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
                Customer name</h3>




            <table style=" width: 100%;">
                <tr>
                    <td style="width: 35%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Name </label>
                            <br> <input style="   font-size:13px;   width: 91%;" type="text"
                                value="{{ $request->namea }}">
                        </p>
                    </td>

                    {{-- @dd($request) --}}

                    <td style="width: 35%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Second name
                            </label> <br> <input style="   font-size:13px;   width: 91%;" type="text"
                                value="{{ $request->secondnamea }}">
                        </p>
                    </td>

                    <td style="width: 35%;">
                        <div style="    text-align: start;">

                            <p class="alignright" style="display: inline-block; width: 100%; "> <label for="">Last
                                    name
                                </label>
                                <br> <input type="text" value="{{ $request->surnamea }}"
                                    style=" font-size:13px;   width: 98%;">
                            </p>
                        </div>

                    </td>
                </tr>





            </table>

            <table id="upp" style=" width: 100%;">
                <tr>
                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Telephone
                            </label> <br> <input style="   font-size:13px;   width: 91%;"
                                value="{{ $request->phonea }}" type="text">
                        </p>
                    </td>

                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for="">Gender:
                            </label>
                            <br> <input style="   font-size:13px;   width: 91%;" value="{{ $request->Fgender }}"
                                type="text">
                        </p>
                    </td>

                </tr>
            </table>


            <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
                Client's date of birth</h3>





            <table style=" width: 100%;">
                <tr>
                    <td style="width: 30%;">

                        <br> <input style="   font-size:13px;   width: 91%;" value="{{ $request->datea }}" type="text">
                    </td>

                    <td style="width: 35%; visibility: hidden;">
                        <br> <input style="   font-size:13px;   width: 91%;" type="date">
                    </td>


                </tr>





            </table>


            <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
                Additional customer information</h3>





            <table style=" width: 100%;">
                <tr>
                    <td style="width: 30%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for="">Passport#:
                            </label>
                            <br> <input style="   font-size:13px;   width: 91%;" value="{{ $request->passporta }}"
                                type="text">
                        </p>
                    </td>

                    <td style="width: 35%; visibility: hidden;">
                        <br> <input style="   font-size:13px;   width: 91%;" type="date">
                    </td>


                </tr>





            </table>


            <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
                Have you had any of the following symptoms in the past 14 days?</h3>





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

                        <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Nauseaa == 'Yes') checked  @endif> Yes <br>
                        <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Nauseaa == 'No') checked  @endif> No
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
                        <input style="   font-size:13px;   width: 1%;" @if ($request->Abdominala == 'No') checked  @endif type="radio"> No
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
                <tr>
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
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Other Specify
                            </label> <br> <input style="   font-size:13px;   width: 99%;"
                                value="{{ $request->specifya }}" type="text">
                        </p>
                    </td>


                </tr>
            </table>



            <table id="upp" style=" width: 100%;">
                <tr>
                    <td style="width: 100%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Date of onset
                                of
                                the first symptoms
                            </label> <br> <input style="   font-size:13px;   width: 99%;"
                                value="{{ $request->symptomsa }}" type="text">
                        </p>
                    </td>


                </tr>
            </table>

            <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Lab test
            </h3>

            <br>
            <br>
            <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Test type: nasal swab
                (PCR)
                / antigen / SARS-COV-2
            </h3>




            <br>
            <table style=" width: 100%;">
                <tr>
                    <td style="width: 30%;">
                        <label for="">Select the test</label> <br><br>

                        <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_testa == 'ANTÍGENO') checked  @endif type="radio"> ANTÍGENO
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
            </table>

            <br>

            <br>

            <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
                Customer Address
            </h3>





            <table style=" width: 100%;">
                <tr>
                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Address
                            </label>
                            <br> <input style="   font-size:13px;   width: 98%;" value="{{ $request->addressa }}"
                                type="text">
                        </p>
                    </td>

                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Address2
                            </label> <br> <input style="   font-size:13px;   width: 98%;" type="text"
                                value="{{ $request->address2a }}">
                        </p>
                    </td>


                </tr>



                <tr>
                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Town
                            </label>
                            <br> <input style="   font-size:13px;   width: 98%;" type="text"
                                value="{{ $request->towna }}">
                        </p>
                    </td>

                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Zip Code
                            </label> <br> <input style="   font-size:13px;   width: 98%;" type="text"
                                value="{{ $request->zipa }}">
                        </p>
                    </td>


                </tr>



                <tr>
                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> State /
                                Province
                            </label>
                            <br> <input style="   font-size:13px;   width: 98%;" type="text"
                                value="{{ $request->Provincea }}">
                        </p>
                    </td>

                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Country
                            </label> <br> <input style="   font-size:13px;   width: 98%;"
                                value="{{ $request->Countrya }}" type="text">
                        </p>
                    </td>


                </tr>


                <tr>
                    <td style="width: 50%;">
                        <label for=""> Signature</label>
                        <img src="{{ $request->SingsLinka }}" alt="klsd   ">
                    </td>

                </tr>



                <tr>
                    <td style="width: 50%;">
                        <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Email
                                address
                            </label>
                            <br> <input style="   font-size:13px;   width: 98%;" value="{{ $request->emaila }}"
                                type="text">
                        </p>
                    </td>



                </tr>



            </table>


            <h2 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Electronic signature
                acceptance
            </h2>


            <div>

                <input type="checkbox" name=" " @if ($request->signature == '1') checked @endif id="">

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

            </div>
        </div>


        {{-- For Adult --}}
    @else










{{-- @dd(1) --}}


    <div style="border: 2px solid black; padding:0px;width: 100%">


        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
            Name Of First Minor</h3>




        <table style=" width: 100%;">
            <tr>
                <td style="width: 35%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Name </label>
                        <br> <input style="   font-size:13px;   width: 91%;" type="text"
                            value="{{ $request->name }}">
                    </p>
                </td>

                {{-- @dd($request) --}}

                <td style="width: 35%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Second name
                        </label> <br> <input style="   font-size:13px;   width: 91%;" type="text"
                            value="{{ $request->secondname }}">
                    </p>
                </td>

                <td style="width: 35%;">
                    <div style="    text-align: start;">

                        <p class="alignright" style="display: inline-block; width: 100%; "> <label for="">Last
                                name
                            </label>
                            <br> <input type="text" value="{{ $request->surname }}"
                                style=" font-size:13px;   width: 98%;">
                        </p>
                    </div>

                </td>
            </tr>





        </table>

        <table id="upp" style=" width: 100%;">
            <tr>
                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Telephone
                        </label> <br> <input style="   font-size:13px;   width: 91%;"
                            value="{{ $request->phone }}" type="text">
                    </p>
                </td>

                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for="">Gender:
                        </label>
                        <br> <input style="   font-size:13px;   width: 91%;" value="{{ $request->gender }}"
                            type="text">
                    </p>
                </td>

            </tr>
        </table>


        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
            First Birth Date of Minor</h3>




        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">

                    <br> <input style="   font-size:13px;   width: 91%;" value="{{ $request->dob }}" type="text">
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>





        </table>


        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
            Additional Information of first of the Minor</h3>





        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for="">Passport#:
                        </label>
                        <br> <input style="   font-size:13px;   width: 91%;" value="{{ $request->passport }}"
                            type="text">
                    </p>
                </td>

                <td style="width: 35%; visibility: hidden;">
                    <br> <input style="   font-size:13px;   width: 91%;" type="date">
                </td>


            </tr>





        </table>


        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
            Have you had any of the following symptoms in the past 14 days?</h3>





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

                    <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Nausea == 'Yes') checked  @endif> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" type="radio" @if ($request->Nausea == 'No') checked  @endif> No
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
            <tr>
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

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Diarrhe == 'Yes') checked  @endif type="radio"> Yes <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Diarrhe == 'No') checked  @endif type="radio"> No
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
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Other Specify
                        </label> <br> <input style="   font-size:13px;   width: 99%;"
                            value="{{ $request->specify }}" type="text">
                    </p>
                </td>


            </tr>
        </table>



        <table id="upp" style=" width: 100%;">
            <tr>
                <td style="width: 100%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Date of onset
                            of
                            the first symptoms
                        </label> <br> <input style="   font-size:13px;   width: 99%;"
                            value="{{ $request->symptoms }}" type="text">
                    </p>
                </td>


            </tr>
        </table>

        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Lab test
        </h3>

        <br>
        <br>
        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Test type: nasal swab
            (PCR)
            / antigen / SARS-COV-2
        </h3>




        <br>
        <table style=" width: 100%;">
            <tr>
                <td style="width: 30%;">
                    <label for="">Select the test</label> <br><br>

                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_test == 'ANTÍGENO') checked  @endif type="radio"> ANTÍGENO
                    <br>
                    <input style="   font-size:13px;   width: 1%;" @if ($request->Select_the_test == 'RT-PCR') checked  @endif type="radio"> RT-PCR
                    <br>
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
        </table>

        <br>

        <br>

        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
            Address of the Minor
        </h3>





        <table style=" width: 100%;">
            <tr>
                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Address
                        </label>
                        <br> <input style="   font-size:13px;   width: 98%;" value="{{ $request->address }}"
                            type="text">
                    </p>
                </td>

                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Address2
                        </label> <br> <input style="   font-size:13px;   width: 98%;" type="text"
                            value="{{ $request->address2 }}">
                    </p>
                </td>


            </tr>



            <tr>
                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Town
                        </label>
                        <br> <input style="   font-size:13px;   width: 98%;" type="text"
                            value="{{ $request->town }}">
                    </p>
                </td>

                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Zip Code
                        </label> <br> <input style="   font-size:13px;   width: 98%;" type="text"
                            value="{{ $request->zip }}">
                    </p>
                </td>


            </tr>



            <tr>
                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> State /
                            Province
                        </label>
                        <br> <input style="   font-size:13px;   width: 98%;" type="text"
                            value="{{ $request->Province }}">
                    </p>
                </td>

                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Country
                        </label> <br> <input style="   font-size:13px;   width: 98%;"
                            value="{{ $request->Country }}" type="text">
                    </p>
                </td>


            </tr>


            <tr>
                <td style="width: 50%;">
                    <label for=""> Signature</label>
                    <img src="{{ $request->signature }}" alt="klsd   ">
                </td>

            </tr>



            <tr>
                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Email
                            address
                        </label>
                        <br> <input style="   font-size:13px;   width: 98%;" value="{{ $request->email }}"
                            type="text">
                    </p>
                </td>



            </tr>



        </table>



        <h3 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
            Parent Or Guardian Name</h3>





        <table style=" width: 100%;">
            <tr>
                <td style="width: 35%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Name
                        </label>
                        <br> <input value="{{$request->Parent_name}}" style="   font-size:13px;   width: 91%;" type="text">
                    </p>
                </td>

                <td style="width: 35%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Second name
                        </label> <br> <input value="{{$request->Parent_secondname}}" style="   font-size:13px;   width: 91%;" type="text">
                    </p>
                </td>

                <td style="width: 35%;">
                    <div style="    text-align: start;">

                        <p class="alignright" style="display: inline-block; width: 100%; "> <label for="">Last
                                name
                            </label>
                            <br> <input type="text"  value="{{$request->Parent_surname}}" style=" font-size:13px;   width: 98%;">
                        </p>
                    </div>

                </td>
            </tr>





        </table>


        <table id="upp" style=" width: 100%;">
            <tr>
                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> Telephone
                        </label> <br> <input value="{{$request->Parent_phone}}"  style="   font-size:13px;   width: 91%;" type="text">
                    </p>
                </td>

                <td style="width: 50%;">
                    <p class="alignleft" style="display: inline-block;width: 100%;"><label for="">Gender:
                        </label>
                        <br> <input  value="{{$request->gender2}}"   style="   font-size:13px;   width: 91%;" type="text">
                    </p>
                </td>

            </tr>
        </table>




        <h2 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Electronic signature
            acceptance
        </h2>


        <div>

            <input type="checkbox" name=" " @if ($request->signature == '1') checked @endif id="">

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

        </div>
    </div>








        {{-- For Minors --}}


    @endif


</body>

</html>

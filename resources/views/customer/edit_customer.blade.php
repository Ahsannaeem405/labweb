@extends('admin.layouts.default')
@section('content')
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')


    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layouts.header')


    {{-- for google search suggesstions --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Google Maps JavaScript library -->
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBOLi3SFcaV2UKrQXxAWbIlNeKEzadbo0A">
    </script>
    {{-- for google search suggesstions --}}

    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->


    <div class="br-mainpanel">

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Edit Customer </h4>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Customer</h6>

                <div class="form-layout form-layout-1">
                    @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp
                    @if ($cus->added_by != null)
                        <form method="POST" action="{{ url('' . $role . '/customer/update') }}">
                            @csrf @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif


                            <div class="row mg-b-25">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Name: <span class="tx-danger"></span></label>
                                        <input class="form-control" value="{{ $cus->name }}" type="text" required
                                            name="firstname" required placeholder="Enter Name">
                                    </div>
                                </div><!-- col-4 -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email address: <span
                                                class="tx-danger"></span></label>
                                        <input class="form-control" type="email" value="{{ $cus->email }}" name="email"
                                            required value="" required placeholder="Enter Email Address">
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Address: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{ $cus->address }}"
                                            name="address" required id="address" value="" required
                                            placeholder="Enter Address">
                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Phone Number: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{ $cus->phone }}" name="phone"
                                            required id="phone" value="" required placeholder="Enter Number">
                                    </div>
                                </div><!-- col-8 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Date of Birth: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="date" value="{{ $cus->dob }}" name="dob"
                                            required id="dob" value="" required placeholder="Enter Date of Birth">
                                    </div>
                                </div><!-- col-8 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Select Gender:</p>
                                        <input type="radio" @if ($cus->gender == 'Male') checked @endif id="Male" name="gender" value="Male">
                                        <label for="Male">Male</label><br>
                                        <input type="radio" id="Female" @if ($cus->gender == 'Female') checked @endif name="gender"
                                            value="Female">
                                        <label for="Female">Female</label><br>

                                    </div>
                                </div><!-- col-8 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Passport: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{ $cus->passport }}"
                                            name="passport" id="passport" value="" required placeholder="Enter Passport">
                                    </div>
                                </div><!-- col-8 -->


                                <input type="hidden" name="id" value="{{ $cus->id }}" id="">

                            </div><!-- row -->

                            <div class="form-layout-footer">
                                <input type="submit" class="btn btn-info" value="Submit">
                            </div><!-- form-layout-footer -->


                </div><!-- form-layout -->
                </form>
            @else
                @if ($cus->show->type == 'adult')
                    <form method="POST" action="{{ url('' . $role . '/customer/update_adult') }}">
                        @csrf @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


                        <div class="row mg-b-25">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Name: <span class="tx-danger"></span></label>
                                    <input class="form-control" value="{{ $cus->show->name }}" type="text" required
                                        name="name" required placeholder="Enter Name">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Second Name: <span
                                            class="tx-danger"></span></label>
                                    <input class="form-control" type="text" value="{{ $cus->show->secondname }}"
                                        name="secondname" required value="" required placeholder="Secondname ">
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Surname : <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $cus->show->surname }}"
                                        name="surname" required placeholder="Enter surname ">
                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Phone: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $cus->show->phone }}"
                                        name="phone" required placeholder="Phone">
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>DOB:</p>
                                    <input type="date" value="{{ $cus->show->datee }}" name="datee" class="form-control" required>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Passport:</p>
                                    <input type="text" value="{{ $cus->show->passport }}" name="passport"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Fever :</p>
                                    <input type="text" value="{{ $cus->show->Fever }}" name="Fever"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Cough :</p>
                                    <input type="text" value="{{ $cus->show->Cough }}" name="Cough"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Throat :</p>
                                    <input type="text" value="{{ $cus->show->Throat }}" name="Throat"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Breathing :</p>
                                    <input type="text" value="{{ $cus->show->breathing }}" name="breathing"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Nausea:</p>
                                    <input type="text" value="{{ $cus->show->Nausea }}" name="Nausea"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Abdominal :</p>
                                    <input type="text" value="{{ $cus->show->Abdominal }}" name="Abdominal"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Chills :</p>
                                    <input type="text" value="{{ $cus->show->Chills }}" name="Chills"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Headache :</p>
                                    <input type="text" value="{{ $cus->show->Headache }}" name="Headache"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Muscle :</p>
                                    <input type="text" value="{{ $cus->show->Muscle }}" name="Muscle"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Fatigue:</p>
                                    <input type="text" value="{{ $cus->show->Fatigue }}" name="Fatigue"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Runny :</p>
                                    <input type="text" value="{{ $cus->show->Runny }}" name="Runny"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Vomiting :</p>
                                    <input type="text" value="{{ $cus->show->Vomiting }}" name="Vomiting"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Diarrhea:</p>
                                    <input type="text" value="{{ $cus->show->Diarrhea }}" name="Diarrhea"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Loss_of_smell :</p>
                                    <input type="text" value="{{ $cus->show->Loss_of_smell }}" name="Loss_of_smell"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Loss_of_taste :</p>
                                    <input type="text" value="{{ $cus->show->Loss_of_taste }}" name="Loss_of_taste"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Specify :</p>
                                    <input type="text" value="{{ $cus->show->specify }}" name="specify"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Symptoms :</p>
                                    <input type="text" value="{{ $cus->show->symptoms }}" name="symptoms"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->



                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Select_the_test :</p>
                                    <input type="radio" @if ($cus->show->Select_the_test == 'ANTIGEN') checked @endif name="Select_the_test" value="ANTIGEN" checked>
                                    <label for="Female">PCR</label><br>
                                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR') checked @endif name="Select_the_test" value="PCR">
                                    <label for="Female">PCR</label><br>




                                    <input type="radio" @if ($cus->show->Select_the_test == 'RT-PCR') checked @endif name="Select_the_test" value="RT-PCR">
                                    <label for="Female">RT-PCR</label><br>

                                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR-24hm') checked @endif name="Select_the_test" value="PCR-24hm">
                                    <label for="Female">PCR-24hm</label><br>

                                    <input type="radio" @if ($cus->show->Select_the_test == 'RT-PCR 24hrs') checked @endif name="Select_the_test"
                                        value="RT-PCR 24hrs">
                                    <label for="Female">RT-PCR 24hrs</label><br>



                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Address :</p>
                                    <input type="text" value="{{ $cus->show->address }}" name="address"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Address2 :</p>
                                    <input type="text" value="{{ $cus->show->address2 }}" name="address2"
                                        class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Town:</p>
                                    <input type="text" value="{{ $cus->show->town }}" name="town" class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Zip :</p>
                                    <input type="text" value="{{ $cus->show->zip }}" name="zip" class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Province :</p>
                                    <select name="Province" class="form-control">

                                        <option value="UK" @if ($cus->show->Province == 'UK')
                                            selected
                @endif>UK</option>

                </select>

            </div>
        </div><!-- col-8 -->

        <div class="col-lg-6">
            <div class="form-group mg-b-10-force">

                <p>Country :</p>
                <select name="Country" class="form-control">

                    <option value="America" @if ($cus->show->Country == 'America')
                        selected
                        @endif>America</option>

                </select>

            </div>
        </div><!-- col-8 -->

        <div class="col-lg-6">
            <div class="form-group mg-b-10-force">

                <p>Email:</p>
                <input type="email" value="{{ $cus->show->email }}" name="email" class="form-control">

            </div>
        </div><!-- col-8 -->
        <div class="col-lg-6">
            <div class="form-group mg-b-10-force">

                <p>How did you hear about us?</p>
                <input type="radio" @if ($cus->show->gender2 == 'Friends') checked @endif name="gender2" value="Friends" checked>
                <label for="Female">Friends</label><br>

                <input type="radio" @if ($cus->show->gender2 == 'Airline Staff') checked @endif name="gender2" value="Airline Staff">
                <label for="Female">Airline Staff</label><br>

                <input type="radio" @if ($cus->show->gender2 == 'Airport Advertisement') checked @endif name="gender2" value="Airport Advertisement">
                <label for="Female">Airport Advertisement</label><br>

                <input type="radio" @if ($cus->show->gender2 == 'Google') checked @endif name="gender2" value="Google">
                <label for="Female">Google</label><br>

                <input type="radio" @if ($cus->show->gender2 == 'Other') checked @endif name="gender2" value="Other">
                <label for="Female">Other</label><br>








            </div>
        </div><!-- col-8 -->
        <div class="col-lg-6">
            <div class="form-group mg-b-10-force">

                <p>Signature :</p>
                <input type="text" value="{{ $cus->show->signature }}" name="signature" class="form-control">

            </div>
        </div><!-- col-8 -->





        <input type="hidden" name="id" value="{{ $cus->show->id }}" id="">

    </div><!-- row -->

    <div class="form-layout-footer">
        <input type="submit" class="btn btn-info" value="Submit">
    </div><!-- form-layout-footer -->


    </div><!-- form-layout -->
    </form>


@else

    @endif
    @endif



    </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
    @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->



    <script>
        var searchInput = 'address';
        $(document).ready(function() {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
                /*componentRestrictions: {
                 country: "USA"
                }*/
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var near_place = autocomplete.getPlace();
            });
        });
    </script>

@endsection

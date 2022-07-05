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
                                        <label class="form-control-label">First Name: <span class="tx-danger"></span></label>
                                        <input class="form-control" value="{{$cus->name}}" type="text" required
                                            name="firstname" required placeholder="Enter Name">
                                    </div>
                                </div><!-- col-4 -->


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Middle Name: <span class="tx-danger"></span></label>
                                        <input class="form-control" value="{{$cus->middle_name}}" type="text"
                                               name="middle_name"  placeholder="Enter Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Last Name: <span class="tx-danger"></span></label>
                                        <input class="form-control" value="{{$cus->last_name}}" type="text" required
                                            name="Last_name" required placeholder="Enter Last Name">
                                    </div>
                                </div>

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
                                </div>



                                <div class="col-lg-6  ">
                                    <label class="form-control-label"> Address 2: <span
                                            class="tx-danger"></span></label>
                                    <input type="text" value="{{$cus->address2}}"  placeholder="{{ __('profile.Address2') }}" name="address2"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label class="form-control-label"> City: <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" value="{{$cus->town}}"  required placeholder="{{ __('profile.Town') }}" name="town"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6  col-12 mt-2">
                                    <label class="form-control-label"> Zip code: <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" value="{{$cus->zip}}"  required placeholder="{{ __('profile.Zip Code') }}" name="zip"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6  mt-2">
                                    <label>{{ __('profile.State / Province') }} <span
                                            class="tx-danger">*</span></label>

                                    <input type="text" value="{{$cus->state}}" required  placeholder="{{ __('profile.State / Province') }}" name="Province"
                                           class="form-control">
                                </div>


                                <div class="col-lg-6  pt-2">
                                    <label>{{ __('profile.Country') }} <span
                                            class="tx-danger">*</span></label>
                                    <select class="form-control changecountry"  required name="country">
                                        @foreach ($Country as $countries)
                                            <option   @if($countries->name==$cus->country) selected @endif  value="{{ $countries->name }}">{{ $countries->name }}</option>
                                        @endforeach

                                    </select>
                                </div>


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
                                        <label class="form-control-label"> Passport: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{ $cus->passport }}"
                                               name="passport" id="passport" value="" required placeholder="Enter Passport">
                                    </div>
                                </div>

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


                           <!-- col-8 -->


                                <input type="hidden" name="id" value="{{ $cus->id }}" id="">

                            </div>


                            <div class="row ">


                                <div class="col-lg-6 mb-3">
                                    <lable>Primary Insurance : </lable>
                                    <input type="text" class="form-control" value="{{$cus->primary_ins}}" placeholder="Primary Insurance"
                                           name="primary_ins">

                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Secondary Insurance :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->secondary_ins}}" placeholder="Secondary Insurance"
                                           name="secondary_ins">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder Name : </lable>
                                    <input type="text" class="form-control" value="{{$cus->policy_holder_name1}}" placeholder="Policy Holder Name"
                                           name="policy_holder_name1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder Name :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->policy_holder_name2}}" placeholder="Policy Holder Name"
                                           name="policy_holder_name2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Relationship Patient :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->relationship_patient1}}" placeholder="Relationship Patient"
                                           name="relationship_patient1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Relationship Patient :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->relationship_patient2}}" placeholder="Relationship Patient"
                                           name="relationship_patient2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder DOB : </lable>
                                    <input type="text" class="form-control" value="{{$cus->policy_holder_dob1}}" placeholder="Policy Holder DOB"
                                           name="policy_holder_dob1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder DOB</lable>

                                    <input type="text" class="form-control" value="{{$cus->policy_holder_dob2}}" placeholder="Policy Holder DOB"
                                           name="policy_holder_dob2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Policy # / Member ID : </lable>
                                    <input type="text" class="form-control" value="{{$cus->policy_member_id1}}" placeholder="Policy # / Member ID"
                                           name="policy_member_id1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy # / Member ID : </lable>
                                    <input type="text" class="form-control" value="{{$cus->policy_member_id2}}" placeholder="Policy # / Member ID"
                                           name="policy_member_id2">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Group # : </lable>
                                    <input type="text" class="form-control" value="{{$cus->group1}}" placeholder="Group #" name="group1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Group # : </lable>
                                    <input type="text" class="form-control" value="{{$cus->group2}}" placeholder="Group #" name="group2">
                                </div>


                            </div>

                            <!-- row -->

                            <div class="form-layout-footer">
                                <input type="submit" class="btn btn-info" value="Submit">
                            </div><!-- form-layout-footer -->


                </div><!-- form-layout -->
                </form>
            @else
                @if ($cus->show->type == 'adult')

                    <form method="POST" action="{{ url('' . $role . '/customer/update_adult') }}">
                        @csrf
                        @if (session()->has('success'))
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
                                    <label class="form-control-label">Middle Name: <span
                                            class="tx-danger"></span></label>
                                    <input class="form-control" type="text" value="{{ $cus->show->secondname }}"
                                        name="secondname"   placeholder="Middle Name ">
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Last name : <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ $cus->show->surname }}"
                                        name="surname" required placeholder="Last name">
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
                                    <input type="date" value="{{ $cus->show->datee }}" name="datee"
                                        class="form-control" required>

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



                                    <p>Gender :</p>


                                    <input type="radio" @if ($cus->show->gender2 == 'male') checked @endif name="gender" value="male" checked>
                                    <label for="Female">male</label><br>
                                    <input type="radio" @if ($cus->show->gender2 == 'female') checked @endif name="gender" value="female">
                                    <label for="Female">female</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Fever :</p>


                                    <input type="radio" @if ($cus->show->Fever == 'Yes') checked @endif name="Fever" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Fever == 'No') checked @endif name="Fever" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Cough :</p>


                                    <input type="radio" @if ($cus->show->Cough == 'Yes') checked @endif name="Cough" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Cough == 'No') checked @endif name="Cough" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Throat :</p>


                                    <input type="radio" @if ($cus->show->Throat == 'Yes') checked @endif name="Throat" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Throat == 'No') checked @endif name="Throat" value="No">
                                    <label for="Female">No</label><br>


                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">




                                    <p>Breathing :</p>


                                    <input type="radio" @if ($cus->show->breathing == 'Yes') checked @endif name="breathing" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->breathing == 'No') checked @endif name="breathing" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Nausea :</p>


                                    <input type="radio" @if ($cus->show->Nausea == 'Yes') checked @endif name="Nausea" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Nausea == 'No') checked @endif name="Nausea" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Abdominal :</p>


                                    <input type="radio" @if ($cus->show->Abdominal == 'Yes') checked @endif name="Abdominal" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Abdominal == 'No') checked @endif name="Abdominal" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Chills :</p>


                                    <input type="radio" @if ($cus->show->Chills == 'Yes') checked @endif name="Chills" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Chills == 'No') checked @endif name="Chills" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Headache :</p>


                                    <input type="radio" @if ($cus->show->Headache == 'Yes') checked @endif name="Headache" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Headache == 'No') checked @endif name="Headache" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Muscle :</p>


                                    <input type="radio" @if ($cus->show->Muscle == 'Yes') checked @endif name="Muscle" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Muscle == 'No') checked @endif name="Muscle" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">




                                    <p>Fatigue :</p>


                                    <input type="radio" @if ($cus->show->Fatigue == 'Yes') checked @endif name="Fatigue" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Fatigue == 'No') checked @endif name="Fatigue" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">




                                    <p>Runny :</p>


                                    <input type="radio" @if ($cus->show->Runny == 'Yes') checked @endif name="Runny" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Runny == 'No') checked @endif name="Runny" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Vomiting :</p>


                                    <input type="radio" @if ($cus->show->Vomiting == 'Yes') checked @endif name="Vomiting" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Vomiting == 'No') checked @endif name="Vomiting" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Diarrhea :</p>


                                    <input type="radio" @if ($cus->show->Diarrhea == 'Yes') checked @endif name="Diarrhea" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Diarrhea == 'No') checked @endif name="Diarrhea" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Loss_of_smell :</p>


                                    <input type="radio" @if ($cus->show->Loss_of_smell == 'Yes') checked @endif name="Loss_of_smell" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Loss_of_smell == 'No') checked @endif name="Loss_of_smell" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">



                                    <p>Loss_of_taste :</p>


                                    <input type="radio" @if ($cus->show->Loss_of_taste == 'Yes') checked @endif name="Loss_of_taste" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Loss_of_taste == 'No') checked @endif name="Loss_of_taste" value="No">
                                    <label for="Female">No</label><br>


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
                                    <input type="radio" @if ($cus->show->Select_the_test == 'Antigen - CareStart') checked @endif name="Select_the_test" value="Antigen - CareStart"
                                        checked>
                                    <label for="Female">ANTIGENO</label><br>
                                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR') checked @endif name="Select_the_test" value="PCR">
                                    <label for="Female">PCR</label><br>
                                    <input type="radio" @if ($cus->show->Select_the_test == 'RT-PCR - Abbott IDNOW') checked @endif name="Select_the_test" value="RT-PCR - Abbott IDNOW">
                                    <label for="Female">RT-PCR</label><br>

                                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR - 24hrs') checked @endif name="Select_the_test" value="PCR - 24hrs">
                                    <label for="Female">PCR-24hrs</label><br>

                                    <input type="radio" @if ($cus->show->Select_the_test == 'RT-PCR 24hrs - Abbott IDNOW') checked @endif name="Select_the_test"
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

                                    <p>city:</p>
                                    <input type="text" value="{{ $cus->show->town }}" name="town"
                                        class="form-control">

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

                                    <p>State / Province :</p>
                                    <input name="Province" value="{{$cus->show->Province}}" class="form-control">


                                </div>
        </div><!-- col-8 -->

        <div class="col-lg-6">
            <div class="form-group mg-b-10-force">

                <p>Country :</p>
                <select name="Country" class="form-control">

                    @foreach ($Country as $Country )


                    <option value="{{$Country->name}}" @if($cus->show->Country == $Country->name) selected @endif>{{$Country->name}}</option>
                        @endforeach
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

                                    <p>Destination: </p>
                                    <input type="text" value="{{ $cus->show->Destination }}" name="Destination"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Flight/Cruise #:</p>
                                    <input type="text" value="{{ $cus->show->F_Cruise }}" name="F_Cruise"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->





        <div class="col-lg-6">
            <div class="form-group mg-b-10-force">

                <p>How did you hear about us?</p>
                <input type="radio" @if ($cus->show->gender == 'Friends') checked @endif name="gender2" value="Friends" >
                <label for="Female">Friends</label><br>

                <input type="radio" @if ($cus->show->gender == 'Airline Staff') checked @endif name="gender2" value="Airline Staff">
                <label for="Female">Airline Staff</label><br>

                <input type="radio" @if ($cus->show->gender == 'Airport Advertisement') checked @endif name="gender2" value="Airport Advertisement">
                <label for="Female">Airport Advertisement</label><br>

                <input type="radio" @if ($cus->show->gender == 'Google') checked @endif name="gender2" value="Google">
                <label for="Female">Google</label><br>

                <input type="radio" @if ($cus->show->gender == 'Other') checked @endif name="gender2" value="Other">
                <label for="Female">Other</label><br>








            </div>
        </div><!-- col-8 -->






        <input type="hidden" name="id" value="{{ $cus->show->id }}" id="">



                            <div class="row ">


                                <div class="col-lg-6 mb-3">
                                    <lable>Primary Insurance : </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->primary_ins}}" placeholder="Primary Insurance"
                                           name="primary_ins">

                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Secondary Insurance :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->secondary_ins}}" placeholder="Secondary Insurance"
                                           name="secondary_ins">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder Name : </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name1}}" placeholder="Policy Holder Name"
                                           name="policy_holder_name1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder Name :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name2}}" placeholder="Policy Holder Name"
                                           name="policy_holder_name2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Relationship Patient :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient1}}" placeholder="Relationship Patient"
                                           name="relationship_patient1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Relationship Patient :  </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient2}}" placeholder="Relationship Patient"
                                           name="relationship_patient2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder DOB : </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob1}}" placeholder="Policy Holder DOB"
                                           name="policy_holder_dob1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder DOB</lable>

                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob2}}" placeholder="Policy Holder DOB"
                                           name="policy_holder_dob2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Policy # / Member ID : </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id1}}" placeholder="Policy # / Member ID"
                                           name="policy_member_id1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy # / Member ID : </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id2}}" placeholder="Policy # / Member ID"
                                           name="policy_member_id2">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Group # : </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->group1}}" placeholder="Group #" name="group1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Group # : </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->group2}}" placeholder="Group #" name="group2">
                                </div>


                            </div>

    </div><!-- row -->

    <div class="form-layout-footer">
        <input type="submit" class="btn btn-info" value="Submit">
    </div><!-- form-layout-footer -->


    </div><!-- form-layout -->
    </form>


@else
    <form method="POST" action="{{ url('' . $role . '/customer/update_minor') }}">
        @csrf
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif


        <div class="row mg-b-25">

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label">Name: <span class="tx-danger"></span></label>
                    <input class="form-control" value="{{ $cus->show->name }}" type="text" required name="name"
                        required placeholder="Enter Name">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label">Middle Name: <span class="tx-danger"></span></label>
                    <input class="form-control" type="text" value="{{ $cus->show->secondname }}" name="secondname"
                         placeholder="Middle Name ">
                </div>
            </div><!-- col-4 -->


            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Last name : <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" value="{{ $cus->show->surname }}" name="surname" required
                        placeholder="Last Name">
                </div>
            </div><!-- col-8 -->


            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Phone: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" value="{{ $cus->show->phone }}" name="phone" required
                        placeholder="Phone">
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
                    <input type="text" value="{{ $cus->show->passport }}" name="passport" class="form-control">

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Gender :</p>


                    <input type="radio" @if ($cus->show->gender2 == 'male') checked @endif name="gender" value="male" checked>
                    <label for="Female">male</label><br>
                    <input type="radio" @if ($cus->show->gender2 == 'female') checked @endif name="gender" value="female">
                    <label for="Female">female</label><br>

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Fever :</p>


                    <input type="radio" @if ($cus->show->Fever == 'Yes') checked @endif name="Fever" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Fever == 'No') checked @endif name="Fever" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Cough :</p>


                    <input type="radio" @if ($cus->show->Cough == 'Yes') checked @endif name="Cough" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Cough == 'No') checked @endif name="Cough" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Throat :</p>


                    <input type="radio" @if ($cus->show->Throat == 'Yes') checked @endif name="Throat" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Throat == 'No') checked @endif name="Throat" value="No">
                    <label for="Female">No</label><br>


                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">




                    <p>Breathing :</p>


                    <input type="radio" @if ($cus->show->breathing == 'Yes') checked @endif name="breathing" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->breathing == 'No') checked @endif name="breathing" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Nausea :</p>


                    <input type="radio" @if ($cus->show->Nausea == 'Yes') checked @endif name="Nausea" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Nausea == 'No') checked @endif name="Nausea" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Abdominal :</p>


                    <input type="radio" @if ($cus->show->Abdominal == 'Yes') checked @endif name="Abdominal" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Abdominal == 'No') checked @endif name="Abdominal" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->


            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">


                    <p>Chills :</p>


                    <input type="radio" @if ($cus->show->Chills == 'Yes') checked @endif name="Chills" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Chills == 'No') checked @endif name="Chills" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Headache :</p>


                    <input type="radio" @if ($cus->show->Headache == 'Yes') checked @endif name="Headache" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Headache == 'No') checked @endif name="Headache" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">


                    <p>Muscle :</p>


                    <input type="radio" @if ($cus->show->Muscle == 'Yes') checked @endif name="Muscle" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Muscle == 'No') checked @endif name="Muscle" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">




                    <p>Fatigue :</p>


                    <input type="radio" @if ($cus->show->Fatigue == 'Yes') checked @endif name="Fatigue" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Fatigue == 'No') checked @endif name="Fatigue" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">




                    <p>Runny :</p>


                    <input type="radio" @if ($cus->show->Runny == 'Yes') checked @endif name="Runny" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Runny == 'No') checked @endif name="Runny" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Vomiting :</p>


                    <input type="radio" @if ($cus->show->Vomiting == 'Yes') checked @endif name="Vomiting" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Vomiting == 'No') checked @endif name="Vomiting" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">


                    <p>Diarrhea :</p>


                    <input type="radio" @if ($cus->show->Diarrhea == 'Yes') checked @endif name="Diarrhea" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Diarrhea == 'No') checked @endif name="Diarrhea" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Loss_of_smell :</p>


                    <input type="radio" @if ($cus->show->Loss_of_smell == 'Yes') checked @endif name="Loss_of_smell" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Loss_of_smell == 'No') checked @endif name="Loss_of_smell" value="No">
                    <label for="Female">No</label><br>

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">



                    <p>Loss_of_taste :</p>


                    <input type="radio" @if ($cus->show->Loss_of_taste == 'Yes') checked @endif name="Loss_of_taste" value="Yes" checked>
                    <label for="Female">Yes</label><br>
                    <input type="radio" @if ($cus->show->Loss_of_taste == 'No') checked @endif name="Loss_of_taste" value="No">
                    <label for="Female">No</label><br>


                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Specify :</p>
                    <input type="text" value="{{ $cus->show->specify }}" name="specify" class="form-control">

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Symptoms :</p>
                    <input type="text" value="{{ $cus->show->symptoms }}" name="symptoms" class="form-control">

                </div>
            </div><!-- col-8 -->



            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Select_the_test :</p>
                    <input type="radio" @if ($cus->show->Select_the_test == 'Antigen - CareStart') checked @endif name="Select_the_test" value="Antigen - CareStart"
                           checked>
                    <label for="Female">ANTIGENO</label><br>
                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR') checked @endif name="Select_the_test" value="PCR">
                    <label for="Female">PCR</label><br>




                    <input type="radio" @if ($cus->show->Select_the_test == 'RT-PCR - Abbott IDNOW') checked @endif name="Select_the_test" value="RT-PCR - Abbott IDNOW">
                    <label for="Female">RT-PCR</label><br>

                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR - 24hrs') checked @endif name="Select_the_test" value="PCR - 24hrs">
                    <label for="Female">PCR-24hrs</label><br>

                    <input type="radio" @if ($cus->show->Select_the_test == 'RT-PCR 24hrs - Abbott IDNOW') checked @endif name="Select_the_test"
                           value="RT-PCR 24hrs">
                    <label for="Female">RT-PCR 24hrs</label><br>




                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Address :</p>
                    <input type="text" value="{{ $cus->show->address }}" name="address" class="form-control">

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Address2 :</p>
                    <input type="text" value="{{ $cus->show->address2 }}" name="address2" class="form-control">

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>city:</p>
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

                    <p>State / Province :</p>
                    <input name="Province" value="{{$cus->show->Province}}" class="form-control">

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Country :</p>
                    <select name="Country" required class="form-control">

                        @foreach ($Country as $Country )


                        <option value="{{$Country->name}}" @if($cus->show->Country == $Country->name) selected @endif>{{$Country->name}}</option>
                            @endforeach
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

                    <p>Parent First Name:</p>
                    <input  type="text" value="{{ $cus->show->Parent_name }}" name="Parent_name" class="form-control">

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Parent Middle Name:</p>
                    <input  type="text" value="{{ $cus->show->Parent_secondname }}" name="Parent_secondname"
                        class="form-control">

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Parent Last Name :</p>
                    <input  type="text" value="{{ $cus->show->Parent_surname }}" name="Parent_surname"
                        class="form-control">

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Parent Phone :</p>
                    <input  type="text" value="{{ $cus->show->Parent_phone }}" name="Parent_phone"
                        class="form-control">

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Parent DOB :</p>
                    <input  type="date" value="{{ $cus->show->Parent_dob }}" name="Parent_dob"
                        class="form-control">

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Destination: </p>
                    <input type="text" value="{{ $cus->show->Destination }}" name="Destination"
                           class="form-control">

                </div>
            </div><!-- col-8 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>Flight/Cruise #: </p>
                    <input type="text" value="{{ $cus->show->F_Cruise }}" name="F_Cruise"
                           class="form-control">

                </div>
            </div><!-- col-8 -->

            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">

                    <p>How did you hear about us?</p>
                    <input  type="radio" @if ($cus->show->gender == 'Friends') checked @endif name="gender2" value="Friends" >
                    <label for="Female">Friends</label><br>

                    <input  type="radio" @if ($cus->show->gender == 'Airline Staff') checked @endif name="gender2" value="Airline Staff">
                    <label for="Female">Airline Staff</label><br>

                    <input  type="radio" @if ($cus->show->gender == 'Airport Advertisement') checked @endif name="gender2" value="Airport Advertisement">
                    <label for="Female">Airport Advertisement</label><br>

                    <input  type="radio" @if ($cus->show->gender == 'Google') checked @endif name="gender2" value="Google">
                    <label for="Female">Google</label><br>

                    <input  type="radio" @if ($cus->show->gender == 'Other') checked @endif name="gender2" value="Other">
                    <label for="Female">Other</label><br>








                </div>
            </div><!-- col-8 -->


            <input  type="hidden" name="id" value="{{ $cus->show->id }}" id="">



            <div class="row ">


                <div class="col-lg-6 mb-3">
                    <lable>Primary Insurance : </lable>
                    <input type="text" class="form-control" value="{{$cus->show->primary_ins}}" placeholder="Primary Insurance"
                           name="primary_ins">

                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Secondary Insurance :  </lable>
                    <input type="text" class="form-control" value="{{$cus->show->secondary_ins}}" placeholder="Secondary Insurance"
                           name="secondary_ins">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder Name : </lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name1}}" placeholder="Policy Holder Name"
                           name="policy_holder_name1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder Name :  </lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name2}}" placeholder="Policy Holder Name"
                           name="policy_holder_name2">
                </div>


                <div class="col-lg-6 mb-3">
                    <lable>Relationship Patient :  </lable>
                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient1}}" placeholder="Relationship Patient"
                           name="relationship_patient1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Relationship Patient :  </lable>
                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient2}}" placeholder="Relationship Patient"
                           name="relationship_patient2">
                </div>


                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder DOB : </lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob1}}" placeholder="Policy Holder DOB"
                           name="policy_holder_dob1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder DOB</lable>

                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob2}}" placeholder="Policy Holder DOB"
                           name="policy_holder_dob2">
                </div>


                <div class="col-lg-6 mb-3">
                    <lable>Policy # / Member ID : </lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id1}}" placeholder="Policy # / Member ID"
                           name="policy_member_id1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy # / Member ID : </lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id2}}" placeholder="Policy # / Member ID"
                           name="policy_member_id2">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Group # : </lable>
                    <input type="text" class="form-control" value="{{$cus->show->group1}}" placeholder="Group #" name="group1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Group # : </lable>
                    <input type="text" class="form-control" value="{{$cus->show->group2}}" placeholder="Group #" name="group2">
                </div>


            </div>

        </div><!-- row -->

        <div class="form-layout-footer">
            <input type="submit" class="btn btn-info" value="Submit">
        </div><!-- form-layout-footer -->


        </div><!-- form-layout -->
    </form>



    @endif
    @endif



    </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
    @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->





@endsection

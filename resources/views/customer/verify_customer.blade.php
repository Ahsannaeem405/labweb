@extends('admin.layouts.default')
@section('newcustomer1')
    active
@endsection

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
            <h4 class="tx-gray-800 mg-b-5">Verify Customer </h4>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Verify Customer</h6>

                <div class="form-layout form-layout-1">
                    @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp


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
                                        <label class="form-control-label">Name: <span class="tx-danger">*</span><i
                                                style="color: red; padding-left: 8px;"
                                                class="fas fa-check forverify forverify1"></i> </label>
                                        <input class="form-control" value="{{ $cus->show->name }}" type="text" required
                                               name="name" required placeholder="Enter Name">
                                    </div>
                                </div><!-- col-4 -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Middle Name:
                                            <span class="tx-danger"></span> <i style="color: red; padding-left: 8px;"
                                                                               class="fas fa-check forverify "></i>
                                        </label>
                                        <input class="form-control" type="text" value="{{ $cus->show->secondname }}"
                                               name="secondname" placeholder="Middle Name ">
                                    </div>
                                </div><!-- col-4 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Last Name : <span
                                                class="tx-danger">*</span><i
                                                style="color: red; padding-left: 8px;"
                                                class="fas fa-check forverify forverify1"></i>
                                        </label>
                                        <input class="form-control" type="text" value="{{ $cus->show->surname }}"
                                               name="surname" required placeholder="Last Name">
                                    </div>
                                </div><!-- col-8 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Phone: <span class="tx-danger"></span><i
                                                style="color: red; padding-left: 8px;"
                                                class="fas fa-check forverify"></i>
                                        </label>
                                        <input class="form-control" type="text" value="{{ $cus->show->phone }}"
                                               name="phone" required placeholder="Phone">
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>DOB: <span class="tx-danger">*</span><i
                                                style="color: red; padding-left: 8px;"
                                                class="fas fa-check forverify forverify1"></i></p>
                                        <input type="date" value="{{ $cus->show->datee }}" name="datee"
                                               class="form-control" required>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Passport: <i style="color: red; padding-left: 8px;"
                                                        class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->passport }}" name="passport"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Gender : <span class="tx-danger">*</span> <i
                                                style="color: red; padding-left: 8px;"
                                                class="fas fa-check forverify forverify1"></i></p>


                                        <input type="radio" @if ($cus->show->gender2 == 'male') checked
                                               @endif name="gender" value="male"
                                               checked>
                                        <label for="Female">male</label><br>
                                        <input type="radio" @if ($cus->show->gender2 == 'female') checked
                                               @endif name="gender"
                                               value="female">
                                        <label for="Female">female</label><br>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Fever : <i style="color: red; padding-left: 8px;"
                                                      class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Fever == 'Yes') checked
                                               @endif name="Fever" value="Yes"
                                               checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Fever == 'No') checked
                                               @endif name="Fever" value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Cough : <i style="color: red; padding-left: 8px;"
                                                      class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Cough == 'Yes') checked
                                               @endif name="Cough" value="Yes"
                                               checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Cough == 'No') checked
                                               @endif name="Cough" value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Throat : <i style="color: red; padding-left: 8px;"
                                                       class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Throat == 'Yes') checked
                                               @endif name="Throat" value="Yes"
                                               checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Throat == 'No') checked
                                               @endif name="Throat" value="No">
                                        <label for="Female">No</label><br>


                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Breathing : <i style="color: red; padding-left: 8px;"
                                                          class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->breathing == 'Yes') checked
                                               @endif name="breathing"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->breathing == 'No') checked
                                               @endif name="breathing"
                                               value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Nausea : <i style="color: red; padding-left: 8px;"
                                                       class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Nausea == 'Yes') checked
                                               @endif name="Nausea" value="Yes"
                                               checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Nausea == 'No') checked
                                               @endif name="Nausea" value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Abdominal : <i style="color: red; padding-left: 8px;"
                                                          class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Abdominal == 'Yes') checked
                                               @endif name="Abdominal"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Abdominal == 'No') checked
                                               @endif name="Abdominal"
                                               value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Chills : <i style="color: red; padding-left: 8px;"
                                                       class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Chills == 'Yes') checked
                                               @endif name="Chills" value="Yes"
                                               checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Chills == 'No') checked
                                               @endif name="Chills" value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Headache : <i style="color: red; padding-left: 8px;"
                                                         class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Headache == 'Yes') checked
                                               @endif name="Headache"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Headache == 'No') checked
                                               @endif name="Headache"
                                               value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Muscle : <i style="color: red; padding-left: 8px;"
                                                       class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Muscle == 'Yes') checked
                                               @endif name="Muscle" value="Yes"
                                               checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Muscle == 'No') checked
                                               @endif name="Muscle" value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Fatigue : <i style="color: red; padding-left: 8px;"
                                                        class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Fatigue == 'Yes') checked
                                               @endif name="Fatigue"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Fatigue == 'No') checked
                                               @endif name="Fatigue"
                                               value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Runny : <i style="color: red; padding-left: 8px;"
                                                      class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Runny == 'Yes') checked
                                               @endif name="Runny" value="Yes"
                                               checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Runny == 'No') checked
                                               @endif name="Runny" value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Vomiting : <i style="color: red; padding-left: 8px;"
                                                         class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Vomiting == 'Yes') checked
                                               @endif name="Vomiting"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Vomiting == 'No') checked
                                               @endif name="Vomiting"
                                               value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Diarrhea : <i style="color: red; padding-left: 8px;"
                                                         class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Diarrhea == 'Yes') checked
                                               @endif name="Diarrhea"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Diarrhea == 'No') checked
                                               @endif name="Diarrhea"
                                               value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Loss_of_smell : <i style="color: red; padding-left: 8px;"
                                                              class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Loss_of_smell == 'Yes') checked
                                               @endif name="Loss_of_smell"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Loss_of_smell == 'No') checked
                                               @endif name="Loss_of_smell"
                                               value="No">
                                        <label for="Female">No</label><br>

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">


                                        <p>Loss_of_taste : <i style="color: red; padding-left: 8px;"
                                                              class="fas fa-check forverify"></i></p>


                                        <input type="radio" @if ($cus->show->Loss_of_taste == 'Yes') checked
                                               @endif name="Loss_of_taste"
                                               value="Yes" checked>
                                        <label for="Female">Yes</label><br>
                                        <input type="radio" @if ($cus->show->Loss_of_taste == 'No') checked
                                               @endif name="Loss_of_taste"
                                               value="No">
                                        <label for="Female">No</label><br>


                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Specify : <i style="color: red; padding-left: 8px;"
                                                        class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->specify }}" name="specify"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Symptoms : <i style="color: red; padding-left: 8px;"
                                                         class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->symptoms }}" name="symptoms"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Select_the_test : <i style="color: red; padding-left: 8px;"
                                                                class="fas fa-check forverify"></i></p>


                                        <input type="radio"
                                               @if ($cus->show->Select_the_test == 'Antigen - CareStart') checked
                                               @endif name="Select_the_test" value="Antigen - CareStart"
                                               checked>
                                        <label for="Female">ANTIGENO</label><br>
                                        <input type="radio" @if ($cus->show->Select_the_test == 'PCR') checked
                                               @endif name="Select_the_test" value="PCR">
                                        <label for="Female">PCR</label><br>


                                        <input type="radio"
                                               @if ($cus->show->Select_the_test == 'RT-PCR - Abbott IDNOW') checked
                                               @endif name="Select_the_test" value="RT-PCR - Abbott IDNOW">
                                        <label for="Female">RT-PCR</label><br>

                                        <input type="radio" @if ($cus->show->Select_the_test == 'PCR - 24hrs') checked
                                               @endif name="Select_the_test" value="PCR - 24hrs">
                                        <label for="Female">PCR-24hrs</label><br>

                                        <input type="radio"
                                               @if ($cus->show->Select_the_test == 'RT-PCR 24hrs - Abbott IDNOW') checked
                                               @endif name="Select_the_test"
                                               value="RT-PCR 24hrs">
                                        <label for="Female">RT-PCR 24hrs</label><br>


                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Address : <i style="color: red; padding-left: 8px;"
                                                        class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->address }}" name="address"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Address2 : <i style="color: red; padding-left: 8px;"
                                                         class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->address2 }}" name="address2"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>city: <i style="color: red; padding-left: 8px;"
                                                    class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->town }}" name="town"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Zip : <i style="color: red; padding-left: 8px;"
                                                    class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->zip }}" name="zip"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>State / Province : <i style="color: red; padding-left: 8px;"
                                                                 class="fas fa-check forverify"></i></p>
                                        <input name="Province" value="{{$cus->show->Province}}" class="form-control">


                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Country : <i style="color: red; padding-left: 8px;"
                                                        class="fas fa-check forverify"></i></p>
                                        <select name="Country" class="form-control">


                                            @foreach ($Country as $Country)

                                                <option value="{{ $Country->name }}"
                                                        @if ($cus->show->Country == $Country->name) selected @endif>
                                                    {{ $Country->name }}</option>

                                            @endforeach

                                        </select>

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Email: <i style="color: red; padding-left: 8px;"
                                                     class="fas fa-check forverify"></i></p>
                                        <input type="email" value="{{ $cus->show->email }}" name="email"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Destination: <i style="color: red; padding-left: 8px;"
                                                           class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->Destination }}" name="Destination"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Flight/Cruise #: <i style="color: red; padding-left: 8px;"
                                                               class="fas fa-check forverify"></i></p>
                                        <input type="text" value="{{ $cus->show->F_Cruise }}" name="F_Cruise"
                                               class="form-control">

                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>Airlin/CruiseLine: <i style="color: red; padding-left: 8px;"
                                                                 class="fas fa-check forverify"></i></p>


                                        <select required name="CruiseLine" id="" class="form-control">


                                            <option value="Air Lingus (EI)"
                                                    @if ($cus->show->CruiseLine == 'Air Lingus (EI)') selected @endif>
                                                Air Lingus (EI)
                                            </option>
                                            <option value="Aeroflot (SU)"
                                                    @if ($cus->show->CruiseLine == 'Aeroflot (SU)') selected @endif>
                                                Aeroflot (SU)
                                            </option>
                                            <option value="Aerolineas Argentinas (AR)"
                                                    @if ($cus->show->CruiseLine == 'Aerolineas Argentinas (AR)') selected @endif>
                                                Aerolineas
                                                Argentinas (AR)
                                            </option>
                                            <option value="Aeromexico (AM)"
                                                    @if ($cus->show->CruiseLine == 'Aeromexico (AM)') selected @endif>
                                                Aeromexico (AM)
                                            </option>
                                            <option value="Air Canada (AC)"
                                                    @if ($cus->show->CruiseLine == 'Air Canada (AC)') selected @endif>
                                                Air Canada (AC)
                                            </option>

                                            <option value="Air Century (Y2)"
                                                    @if ($cus->show->CruiseLine == 'Air Century (Y2)') selected @endif>
                                                Air Century (Y2)
                                            </option>
                                            <option value="Air Europa (UX)"
                                                    @if ($cus->show->CruiseLine == 'Air Europa (UX)') selected @endif>
                                                Air Europa (UX)
                                            </option>
                                            <option value="Air France (AF)"
                                                    @if ($cus->show->CruiseLine == 'Air France (AF)') selected @endif>
                                                Air France (AF)
                                            </option>
                                            <option value="Alitalia (AZ)"
                                                    @if ($cus->show->CruiseLine == 'Alitalia (AZ)') selected @endif>
                                                Alitalia (AZ)
                                            </option>
                                            <option value="American Airlines (AA)"
                                                    @if ($cus->show->CruiseLine == 'American Airlines (AA)') selected @endif>
                                                American
                                                Airlines (AA)
                                            </option>
                                            <option value="Avianca (AV, TA)"
                                                    @if ($cus->show->CruiseLine == 'Avianca (AV, TA)') selected @endif>
                                                Avianca (AV, TA)
                                            </option>
                                            <option value="Bahamasair (UP)"
                                                    @if ($cus->show->CruiseLine == 'Bahamasair (UP)') selected @endif>
                                                Bahamasair (UP)
                                            </option>
                                            <option value="BOA-Boliviana de Aviacion (OB)"
                                                    @if ($cus->show->CruiseLine == 'BOA-Boliviana de Aviacion (OB)') selected @endif>
                                                BOA-Boliviana de Aviacion (OB)
                                            </option>
                                            <option value="British Airways (BA)"
                                                    @if ($cus->show->CruiseLine == 'British Airways (BA)') selected @endif>
                                                British Airways
                                                (BA)
                                            </option>
                                            <option value="Caribbean Airlines (BW)"
                                                    @if ($cus->show->CruiseLine == 'Caribbean Airlines (BW)') selected @endif>
                                                Caribbean
                                                Airlines (BW)
                                            </option>
                                            <option value="Cayman Airways (KX)"
                                                    @if ($cus->show->CruiseLine == 'Cayman Airways (KX)') selected @endif>
                                                Cayman Airways
                                                (KX)
                                            </option>

                                            <option value="COPA Airlines (CM)"
                                                    @if ($cus->show->CruiseLine == 'COPA Airlines (CM)') selected @endif>
                                                COPA Airlines (CM)
                                            </option>
                                            <option value="Delta Air Lines (DL)"
                                                    @if ($cus->show->CruiseLine == 'Delta Air Lines (DL)') selected @endif>
                                                Delta Air Lines
                                                (DL)
                                            </option>
                                            <option value="Eastern Airlines (2D)"
                                                    @if ($cus->show->CruiseLine == 'Eastern Airlines (2D)') selected @endif>
                                                Eastern Airlines
                                                (2D)
                                            </option>
                                            <option value="El Al (LY)"
                                                    @if ($cus->show->CruiseLine == 'El Al (LY)') selected @endif>El Al
                                                (LY)
                                            </option>
                                            <option value="Emirates (EK)"
                                                    @if ($cus->show->CruiseLine == 'Air Lingus (EI)') selected @endif>
                                                Emirates (EK)
                                            </option>
                                            <option value="Finnair (AY)"
                                                    @if ($cus->show->CruiseLine == 'Finnair (AY)') selected @endif>
                                                Finnair (AY)
                                            </option>
                                            <option value="Frontier Airlines (F9)"
                                                    @if ($cus->show->CruiseLine == 'Frontier Airlines (F9)') selected @endif>
                                                Frontier
                                                Airlines (F9)
                                            </option>
                                            <option value="Iberia (IB)"
                                                    @if ($cus->show->CruiseLine == 'Iberia (IB)') selected @endif>Iberia
                                                (IB)
                                            </option>
                                            <option value="JetBlue (B6)"
                                                    @if ($cus->show->CruiseLine == 'JetBlue (B6)') selected @endif>
                                                JetBlue (B6)
                                            </option>
                                            <option value="KLM (KL)"
                                                    @if ($cus->show->CruiseLine == 'KLM (KL)') selected @endif>KLM (KL)
                                            </option>
                                            <option value="LATAM Airlines (4M, JJ, LA,LP, XP)"
                                                    @if ($cus->show->CruiseLine == 'LATAM Airlines (4M, JJ, LA,LP, XP)') selected @endif>
                                                LATAM Airlines (4M, JJ, LA,LP, XP)
                                            </option>
                                            <option value="LOT Polish Airlines (LO)"
                                                    @if ($cus->show->CruiseLine == 'Air Lingus (EI)') selected @endif>
                                                LOT Polish
                                                Airlines (LO)
                                            </option>
                                            <option value="Lufthansa (LH)"
                                                    @if ($cus->show->CruiseLine == 'Lufthansa (LH)') selected @endif>
                                                Lufthansa (LH)
                                            </option>
                                            <option value="Qatar (QR)"
                                                    @if ($cus->show->CruiseLine == 'Qatar (QR)') selected @endif>Qatar
                                                (QR)
                                            </option>
                                            <option value="SAS (SK)"
                                                    @if ($cus->show->CruiseLine == 'SAS (SK)') selected @endif>SAS (SK)
                                            </option>
                                            <option value="Southwest (WN)"
                                                    @if ($cus->show->CruiseLine == 'Southwest (WN)') selected @endif>
                                                Southwest (WN)
                                            </option>
                                            <option value="Sun Country (SY)"
                                                    @if ($cus->show->CruiseLine == 'Sun Country (SY)') selected @endif>
                                                Sun Country (SY)
                                            </option>
                                            <option value="Sunwing (WG)"
                                                    @if ($cus->show->CruiseLine == 'Sunwing (WG)') selected @endif>
                                                Sunwing (WG)
                                            </option>
                                            <option value="Surinam Airways (PY)"
                                                    @if ($cus->show->CruiseLine == 'Surinam Airways (PY)') selected @endif>
                                                Surinam Airways
                                                (PY)
                                            </option>
                                            <option value="Swift Air (SWQ)"
                                                    @if ($cus->show->CruiseLine == 'Swift Air (SWQ)') selected @endif>
                                                Swift Air (SWQ)
                                            </option>
                                            <option value="Swiss International (LX)"
                                                    @if ($cus->show->CruiseLine == 'Swiss International (LX)') selected @endif>
                                                Swiss
                                                International (LX)
                                            </option>
                                            <option value="TAP Air Portugal (TP)"
                                                    @if ($cus->show->CruiseLine == 'TAP Air Portugal (TP)') selected @endif>
                                                TAP Air Portugal
                                                (TP)
                                            </option>
                                            <option value="TUIfly (TB, OR)"
                                                    @if ($cus->show->CruiseLine == 'TUIfly (TB, OR)') selected @endif>
                                                TUIfly (TB, OR)
                                            </option>
                                            <option value="Turkish (TK)"
                                                    @if ($cus->show->CruiseLine == 'Turkish (TK)') selected @endif>
                                                Turkish (TK)
                                            </option>
                                            <option value="United Airlines (UA)"
                                                    @if ($cus->show->CruiseLine == 'United Airlines (UA)') selected @endif>
                                                United Airlines
                                                (UA)
                                            </option>
                                            <option value="Virgin Atlantic (VS)"
                                                    @if ($cus->show->CruiseLine == 'Virgin Atlantic (VS)') selected @endif>
                                                Virgin Atlantic
                                                (VS)
                                            </option>
                                            <option value="Viva (VH)"
                                                    @if ($cus->show->CruiseLine == 'Viva (VH)') selected @endif>Viva
                                                (VH)
                                            </option>
                                            <option value="Volaris (Y4)"
                                                    @if ($cus->show->CruiseLine == 'Volaris (Y4)') selected @endif>
                                                Volaris (Y4)
                                            </option>
                                            <option value="WestJet (WS)"
                                                    @if ($cus->show->CruiseLine == 'WestJet (WS)') selected @endif>
                                                WestJet (WS)
                                            </option>
                                            <option value="World Atlantic (WAL)"
                                                    @if ($cus->show->CruiseLine == 'World Atlantic (WAL)') selected @endif>
                                                World Atlantic
                                                (WAL)
                                            </option>
                                            <option value="N/A" @if ($cus->show->CruiseLine == 'N/A') selected @endif>
                                                N/A
                                            </option>
                                            <option value="Azamara Club Cruises"
                                                    @if ($cus->show->CruiseLine == 'Azamara Club Cruises') selected @endif>
                                                Azamara Club
                                                Cruises
                                            </option>
                                            <option value="Carnival"
                                                    @if ($cus->show->CruiseLine == 'Carnival') selected @endif>Carnival
                                            </option>
                                            <option value="Celebrity X Cruises"
                                                    @if ($cus->show->CruiseLine == 'Celebrity X Cruises') selected @endif>
                                                Celebrity X
                                                Cruises
                                            </option>
                                            <option value="Crystal Cruises"
                                                    @if ($cus->show->CruiseLine == 'Crystal Cruises') selected @endif>
                                                Crystal Cruises
                                            </option>
                                            <option value="Disney Cruise Line"
                                                    @if ($cus->show->CruiseLine == 'Disney Cruise Line') selected @endif>
                                                Disney Cruise Line
                                            </option>
                                            <option value="MSC Cruises"
                                                    @if ($cus->show->CruiseLine == 'MSC Cruises') selected @endif>MSC
                                                Cruises
                                            </option>
                                            <option value="Norwegian Cruise Line"
                                                    @if ($cus->show->CruiseLine == 'Norwegian Cruise Line') selected @endif>
                                                Norwegian Cruise
                                                Line
                                            </option>
                                            <option value="Oceania Cruises"
                                                    @if ($cus->show->CruiseLine == 'Oceania Cruises') selected @endif>
                                                Oceania Cruises
                                            </option>
                                            <option value="Regent Seven Seas Cruises"
                                                    @if ($cus->show->CruiseLine == 'Regent Seven Seas Cruises') selected @endif>
                                                Regent Seven
                                                Seas Cruises
                                            </option>
                                            <option value="Royal Caribbean International"
                                                    @if ($cus->show->CruiseLine == 'Royal Caribbean International') selected @endif>
                                                Royal
                                                Caribbean International
                                            </option>
                                            <option value="Viking Ocean Cruises"
                                                    @if ($cus->show->CruiseLine == 'Viking Ocean Cruises') selected @endif>
                                                Viking Ocean
                                                Cruises
                                            </option>
                                            <option value="Virgin Voyages"
                                                    @if ($cus->show->CruiseLine == 'Virgin Voyages') selected @endif>
                                                Virgin Voyages
                                            </option>
                                            <option value="AIDA" @if ($cus->show->CruiseLine == 'AIDA') selected @endif>
                                                AIDA
                                            </option>
                                            <option value="Hapag-Lloyd"
                                                    @if ($cus->show->CruiseLine == 'Hapag-Lloyd') selected @endif>
                                                Hapag-Lloyd
                                            </option>
                                            <option value="Hurtigruten"
                                                    @if ($cus->show->CruiseLine == 'Hurtigruten') selected @endif>
                                                Hurtigruten
                                            </option>
                                            <option value="PampO Cruises"
                                                    @if ($cus->show->CruiseLine == 'PampO Cruises') selected @endif>P&amp;amp;O
                                                Cruises
                                            </option>
                                            <option value="Phoenix"
                                                    @if ($cus->show->CruiseLine == 'Phoenix') selected @endif>Phoenix
                                            </option>
                                            <option value="Pricess Cruises"
                                                    @if ($cus->show->CruiseLine == 'Pricess Cruises') selected @endif>
                                                Pricess Cruises
                                            </option>
                                            <option value="SAGA" @if ($cus->show->CruiseLine == 'SAGA') selected @endif>
                                                SAGA
                                            </option>
                                            <option value="SCENIC Luxury Cruises"
                                                    @if ($cus->show->CruiseLine == 'SCENIC Luxury Cruises') selected @endif>
                                                SCENIC Luxury
                                                Cruises
                                            </option>
                                            <option value="SEABOURN"
                                                    @if ($cus->show->CruiseLine == 'SEABOURN') selected @endif>SEABOURN
                                            </option>
                                            <option value="TUI Cruises"
                                                    @if ($cus->show->CruiseLine == 'TUI Cruises') selected @endif>TUI
                                                Cruises
                                            </option>
                                            <option value="Windstar Cruises"
                                                    @if ($cus->show->CruiseLine == 'Windstar Cruises') selected @endif>
                                                Windstar Cruises
                                            </option>


                                        </select>


                                    </div>
                                </div><!-- col-8 -->


                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">

                                        <p>How did you hear about us? <i style="color: red; padding-left: 8px;"
                                                                         class="fas fa-check forverify"></i></p>
                                        <input type="radio" @if ($cus->show->gender == 'Friends') checked
                                               @endif name="gender2"
                                               value="Friends" checked>
                                        <label for="Female">Friends</label><br>

                                        <input type="radio" @if ($cus->show->gender == 'Airline Staff') checked
                                               @endif name="gender2"
                                               value="Airline Staff">
                                        <label for="Female">Airline Staff </label><br>

                                        <input type="radio" @if ($cus->show->gender == 'Airport Advertisement') checked
                                               @endif name="gender2"
                                               value="Airport Advertisement">
                                        <label for="Female">Airport Advertisement </label><br>

                                        <input type="radio" @if ($cus->show->gender == 'Google') checked
                                               @endif name="gender2"
                                               value="Google">
                                        <label for="Female">Google</label><br>

                                        <input type="radio" @if ($cus->show->gender == 'Other') checked
                                               @endif name="gender2"
                                               value="Other">
                                        <label for="Female">Other </label><br>


                                    </div>
                                </div><!-- col-8 -->


                                <input type="hidden" name="id" value="{{ $cus->show->id }}" id="">

                            </div>


                            <div class="row ">


                                <div class="col-lg-6 mb-3">
                                    <lable>Primary Insurance : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                                    <input type="text" class="form-control" value="{{$cus->show->primary_ins}}" placeholder="Primary Insurance"
                                           name="primary_ins">

                                </div>

                                <div class="col-lg-6 mb-3">
          <lable>Secondary Insurance : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->secondary_ins}}" placeholder="Secondary Insurance"
                                           name="secondary_ins">
                                </div>

                                <div class="col-lg-6 mb-3">
<lable>Policy Holder Name : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name1}}" placeholder="Policy Holder Name"
                                           name="policy_holder_name1">
                                </div>

                                <div class="col-lg-6 mb-3">
<lable>Policy Holder Name : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name2}}" placeholder="Policy Holder Name"
                                           name="policy_holder_name2">
                                </div>


                                <div class="col-lg-6 mb-3">
<lable>Relationship Patient : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient1}}" placeholder="Relationship Patient"
                                           name="relationship_patient1">
                                </div>

                                <div class="col-lg-6 mb-3">
<lable>Relationship Patient : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient2}}" placeholder="Relationship Patient"
                                           name="relationship_patient2">
                                </div>


                                <div class="col-lg-6 mb-3">
<lable>Policy Holder DOB : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob1}}" placeholder="Policy Holder DOB"
                                           name="policy_holder_dob1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder DOB</lable>

                                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob2}}" placeholder="Policy Holder DOB"
                                           name="policy_holder_dob2">
                                </div>


                                <div class="col-lg-6 mb-3">
<lable>Policy # / Member ID : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id1}}" placeholder="Policy # / Member ID"
                                           name="policy_member_id1">
                                </div>

                                <div class="col-lg-6 mb-3">
<lable>Policy # / Member ID : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id2}}" placeholder="Policy # / Member ID"
                                           name="policy_member_id2">
                                </div>

                                <div class="col-lg-6 mb-3">
<lable>Group # : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                                    <input type="text" class="form-control" value="{{$cus->show->group1}}" placeholder="Group #" name="group1">
                                </div>

                                <div class="col-lg-6 mb-3">
<lable>Group # : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                                    <input type="text" class="form-control" value="{{$cus->show->group2}}" placeholder="Group #" name="group2">
                                </div>


                            </div>

                            <div class="form-layout-footer">
                                <input type="submit" class="btn btn-info Verify" disabled value="Submit">

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
                                    <label class="form-control-label">Name:<span class="tx-danger">*</span><i
                                            style="color: red; padding-left: 8px;"
                                            class="fas fa-check forverify forverify1"></i> </label>
                                    <input class="form-control" value="{{ $cus->show->name }}" type="text" required
                                           name="name" required placeholder="Enter Name">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Middle Name: <span class="tx-danger"></span><i
                                            style="color: red; padding-left: 8px;" class="fas fa-check forverify "></i>
                                    </label>
                                    <input class="form-control" type="text" value="{{ $cus->show->secondname }}"
                                           name="secondname" placeholder="Middle Name ">
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Last Name : <span class="tx-danger">*</span><i
                                            style="color: red; padding-left: 8px;"
                                            class="fas fa-check forverify forverify1"></i>
                                    </label>
                                    <input class="form-control" type="text" value="{{ $cus->show->surname }}"
                                           name="surname" required placeholder="Last Name">
                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Phone: <span class="tx-danger"></span><i
                                            style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i>
                                    </label>
                                    <input class="form-control" type="text" value="{{ $cus->show->phone }}" name="phone"
                                           required placeholder="Phone">
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>DOB:<span class="tx-danger">*</span> <i style="color: red; padding-left: 8px;"
                                                                               class="fas fa-check forverify forverify1"></i>
                                    </p>
                                    <input type="date" value="{{ $cus->show->datee }}" name="datee" class="form-control"
                                           required>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Passport: <i style="color: red; padding-left: 8px;"
                                                    class="fas fa-check forverify"></i>
                                    </p>
                                    <input type="text" value="{{ $cus->show->passport }}" name="passport"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Gender : <span class="tx-danger">*</span> <i
                                            style="color: red; padding-left: 8px;"
                                            class="fas fa-check forverify forverify1"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->gender2 == 'male') checked @endif name="gender"
                                           value="male" checked>
                                    <label for="Female">male</label><br>
                                    <input type="radio" @if ($cus->show->gender2 == 'female')
                                    checked
                                           @endif name="gender" value="female">
                                    <label for="Female">female</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Fever : <i style="color: red; padding-left: 8px;"
                                                  class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Fever == 'Yes') checked @endif name="Fever"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Fever == 'No') checked @endif name="Fever"
                                           value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Cough : <i style="color: red; padding-left: 8px;"
                                                  class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Cough == 'Yes') checked @endif name="Cough"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Cough == 'No') checked @endif name="Cough"
                                           value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Throat : <i style="color: red; padding-left: 8px;"
                                                   class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Throat == 'Yes') checked @endif name="Throat"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Throat == 'No') checked @endif name="Throat"
                                           value="No">
                                    <label for="Female">No</label><br>


                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Breathing : <i style="color: red; padding-left: 8px;"
                                                      class="fas fa-check forverify"></i></p>


                                    <input type="radio" @if ($cus->show->breathing == 'Yes')
                                    checked
                                           @endif name="breathing" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->breathing == 'No')
                                    checked
                                           @endif name="breathing" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Nausea : <i style="color: red; padding-left: 8px;"
                                                   class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Nausea == 'Yes') checked @endif name="Nausea"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Nausea == 'No') checked @endif name="Nausea"
                                           value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Abdominal : <i style="color: red; padding-left: 8px;"
                                                      class="fas fa-check forverify"></i></p>


                                    <input type="radio" @if ($cus->show->Abdominal == 'Yes')
                                    checked
                                           @endif name="Abdominal" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Abdominal == 'No')
                                    checked
                                           @endif name="Abdominal" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Chills : <i style="color: red; padding-left: 8px;"
                                                   class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Chills == 'Yes') checked @endif name="Chills"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Chills == 'No') checked @endif name="Chills"
                                           value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Headache : <i style="color: red; padding-left: 8px;"
                                                     class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Headache == 'Yes')
                                    checked
                                           @endif name="Headache" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Headache == 'No')
                                    checked
                                           @endif name="Headache" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Muscle : <i style="color: red; padding-left: 8px;"
                                                   class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Muscle == 'Yes') checked @endif name="Muscle"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Muscle == 'No') checked @endif name="Muscle"
                                           value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Fatigue : <i style="color: red; padding-left: 8px;"
                                                    class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Fatigue == 'Yes') checked @endif name="Fatigue"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Fatigue == 'No') checked @endif name="Fatigue"
                                           value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Runny : <i style="color: red; padding-left: 8px;"
                                                  class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Runny == 'Yes') checked @endif name="Runny"
                                           value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Runny == 'No') checked @endif name="Runny"
                                           value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Vomiting : <i style="color: red; padding-left: 8px;"
                                                     class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Vomiting == 'Yes')
                                    checked
                                           @endif name="Vomiting" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Vomiting == 'No')
                                    checked
                                           @endif name="Vomiting" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Diarrhea : <i style="color: red; padding-left: 8px;"
                                                     class="fas fa-check forverify"></i>
                                    </p>


                                    <input type="radio" @if ($cus->show->Diarrhea == 'Yes')
                                    checked
                                           @endif name="Diarrhea" value="Yes" checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Diarrhea == 'No')
                                    checked
                                           @endif name="Diarrhea" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Loss_of_smell : <i style="color: red; padding-left: 8px;"
                                                          class="fas fa-check forverify"></i></p>


                                    <input type="radio" @if ($cus->show->Loss_of_smell == 'Yes')
                                    checked
                                           @endif name="Loss_of_smell" value="Yes"
                                           checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Loss_of_smell == 'No')
                                    checked
                                           @endif name="Loss_of_smell" value="No">
                                    <label for="Female">No</label><br>

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Loss_of_taste : <i style="color: red; padding-left: 8px;"
                                                          class="fas fa-check forverify"></i></p>


                                    <input type="radio" @if ($cus->show->Loss_of_taste == 'Yes')
                                    checked
                                           @endif name="Loss_of_taste" value="Yes"
                                           checked>
                                    <label for="Female">Yes</label><br>
                                    <input type="radio" @if ($cus->show->Loss_of_taste == 'No')
                                    checked
                                           @endif name="Loss_of_taste" value="No">
                                    <label for="Female">No</label><br>


                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Specify : <i style="color: red; padding-left: 8px;"
                                                    class="fas fa-check forverify"></i>
                                    </p>
                                    <input type="text" value="{{ $cus->show->specify }}" name="specify"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Symptoms : <i style="color: red; padding-left: 8px;"
                                                     class="fas fa-check forverify"></i>
                                    </p>
                                    <input type="text" value="{{ $cus->show->symptoms }}" name="symptoms"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Select_the_test : <i style="color: red; padding-left: 8px;"
                                                            class="fas fa-check forverify"></i></p>

                                    <input type="radio"
                                           @if ($cus->show->Select_the_test == 'Antigen - CareStart') checked
                                           @endif name="Select_the_test" value="Antigen - CareStart"
                                           checked>
                                    <label for="Female">ANTIGENO</label><br>
                                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR') checked
                                           @endif name="Select_the_test" value="PCR">
                                    <label for="Female">PCR</label><br>


                                    <input type="radio"
                                           @if ($cus->show->Select_the_test == 'RT-PCR - Abbott IDNOW') checked
                                           @endif name="Select_the_test" value="RT-PCR - Abbott IDNOW">
                                    <label for="Female">RT-PCR</label><br>

                                    <input type="radio" @if ($cus->show->Select_the_test == 'PCR - 24hrs') checked
                                           @endif name="Select_the_test" value="PCR - 24hrs">
                                    <label for="Female">PCR-24hrs</label><br>

                                    <input type="radio"
                                           @if ($cus->show->Select_the_test == 'RT-PCR 24hrs - Abbott IDNOW') checked
                                           @endif name="Select_the_test"
                                           value="RT-PCR 24hrs">
                                    <label for="Female">RT-PCR 24hrs</label><br>


                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Address : <i style="color: red; padding-left: 8px;"
                                                    class="fas fa-check forverify"></i>
                                    </p>
                                    <input type="text" value="{{ $cus->show->address }}" name="address"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Address2 : <i style="color: red; padding-left: 8px;"
                                                     class="fas fa-check forverify"></i>
                                    </p>
                                    <input type="text" value="{{ $cus->show->address2 }}" name="address2"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>city: <i style="color: red; padding-left: 8px;"
                                                class="fas fa-check forverify"></i>
                                    </p>
                                    <input type="text" value="{{ $cus->show->town }}" name="town"
                                           class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Zip : <i style="color: red; padding-left: 8px;"
                                                class="fas fa-check forverify"></i>
                                    </p>
                                    <input type="text" value="{{ $cus->show->zip }}" name="zip" class="form-control">

                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>State / Province : <i style="color: red; padding-left: 8px;"
                                                             class="fas fa-check forverify"></i>
                                    </p>
                                    <input name="Province" value="{{$cus->show->Province}}" class="form-control">


                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">


                                    <p>Country : <i style="color: red; padding-left: 8px;"
                                                    class="fas fa-check forverify"></i>
                                    </p>
                                    <select name="Country" required class="form-control">

                                        @foreach ($Country as $Countries)

                                            <option value="{{ $Countries->name }}"
                                                    @if ($cus->show->Country == $Countries->name) selected @endif>
                                                {{ $Countries->name }}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div><!-- col-8 -->


                        </div>

            </div><!-- row -->

            <div class="row">


                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Email: <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i>
                        </p>
                        <input type="email" value="{{ $cus->show->email }}" name="email" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Parent First Name: <i style="color: red; padding-left: 8px;"
                                                 class="fas fa-check forverify"></i>
                        </p>
                        <input type="text" value="{{ $cus->show->Parent_name }}" name="Parent_name"
                               class="form-control">

                    </div>
                </div><!-- col-8 -->

                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Parent Middle Name: <i style="color: red; padding-left: 8px;"
                                                  class="fas fa-check forverify"></i></p>
                        <input type="text" value="{{ $cus->show->Parent_secondname }}" name="Parent_secondname"
                               class="form-control">

                    </div>
                </div><!-- col-8 -->

                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Parent Last Name : <i style="color: red; padding-left: 8px;"
                                                 class="fas fa-check forverify"></i></p>
                        <input type="text" value="{{ $cus->show->Parent_surname }}" name="Parent_surname"
                               class="form-control">

                    </div>
                </div><!-- col-8 -->

                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Parent Phone : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i>
                        </p>
                        <input type="text" value="{{ $cus->show->Parent_phone }}" name="Parent_phone"
                               class="form-control">

                    </div>
                </div><!-- col-8 -->

                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Parent DOB : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i>
                        </p>
                        <input type="date" value="{{ $cus->show->Parent_dob }}" name="Parent_dob"
                               class="form-control">

                    </div>
                </div><!-- col-8 -->

                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Destination: <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i>
                        </p>
                        <input type="text" value="{{ $cus->show->Destination }}" name="Destination"
                               class="form-control">

                    </div>
                </div><!-- col-8 -->
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>Flight/Cruise #: <i style="color: red; padding-left: 8px;"
                                               class="fas fa-check forverify"></i></p>
                        <input type="text" value="{{ $cus->show->F_Cruise }}" name="F_Cruise"
                               class="form-control">

                    </div>

                </div><!-- col-8 -->

                <div class="col-lg-6">

                    <p>Airlin/CruiseLine: <i style="color: red; padding-left: 8px;"
                                             class="fas fa-check forverify"></i></p>
                    <select required name="CruiseLine" id="" class="form-control">


                        <option value="Air Lingus (EI)"
                                @if ($cus->show->CruiseLine == 'Air Lingus (EI)') selected @endif>Air Lingus (EI)
                        </option>
                        <option value="Aeroflot (SU)" @if ($cus->show->CruiseLine == 'Aeroflot (SU)') selected @endif>
                            Aeroflot (SU)
                        </option>
                        <option value="Aerolineas Argentinas (AR)"
                                @if ($cus->show->CruiseLine == 'Aerolineas Argentinas (AR)') selected @endif>Aerolineas
                            Argentinas (AR)
                        </option>
                        <option value="Aeromexico (AM)"
                                @if ($cus->show->CruiseLine == 'Aeromexico (AM)') selected @endif>Aeromexico (AM)
                        </option>
                        <option value="Air Canada (AC)"
                                @if ($cus->show->CruiseLine == 'Air Canada (AC)') selected @endif>Air Canada (AC)
                        </option>

                        <option value="Air Century (Y2)"
                                @if ($cus->show->CruiseLine == 'Air Century (Y2)') selected @endif>Air Century (Y2)
                        </option>
                        <option value="Air Europa (UX)"
                                @if ($cus->show->CruiseLine == 'Air Europa (UX)') selected @endif>Air Europa (UX)
                        </option>
                        <option value="Air France (AF)"
                                @if ($cus->show->CruiseLine == 'Air France (AF)') selected @endif>Air France (AF)
                        </option>
                        <option value="Alitalia (AZ)" @if ($cus->show->CruiseLine == 'Alitalia (AZ)') selected @endif>
                            Alitalia (AZ)
                        </option>
                        <option value="American Airlines (AA)"
                                @if ($cus->show->CruiseLine == 'American Airlines (AA)') selected @endif>American
                            Airlines (AA)
                        </option>
                        <option value="Avianca (AV, TA)"
                                @if ($cus->show->CruiseLine == 'Avianca (AV, TA)') selected @endif>Avianca (AV, TA)
                        </option>
                        <option value="Bahamasair (UP)"
                                @if ($cus->show->CruiseLine == 'Bahamasair (UP)') selected @endif>Bahamasair (UP)
                        </option>
                        <option value="BOA-Boliviana de Aviacion (OB)"
                                @if ($cus->show->CruiseLine == 'BOA-Boliviana de Aviacion (OB)') selected @endif>
                            BOA-Boliviana de
                            Aviacion (OB)
                        </option>
                        <option value="British Airways (BA)"
                                @if ($cus->show->CruiseLine == 'British Airways (BA)') selected @endif>British Airways
                            (BA)
                        </option>
                        <option value="Caribbean Airlines (BW)"
                                @if ($cus->show->CruiseLine == 'Caribbean Airlines (BW)') selected @endif>Caribbean
                            Airlines (BW)
                        </option>
                        <option value="Cayman Airways (KX)"
                                @if ($cus->show->CruiseLine == 'Cayman Airways (KX)') selected @endif>Cayman Airways
                            (KX)
                        </option>

                        <option value="COPA Airlines (CM)"
                                @if ($cus->show->CruiseLine == 'COPA Airlines (CM)') selected @endif>COPA Airlines (CM)
                        </option>
                        <option value="Delta Air Lines (DL)"
                                @if ($cus->show->CruiseLine == 'Delta Air Lines (DL)') selected @endif> Delta Air Lines
                            (DL)
                        </option>
                        <option value="Eastern Airlines (2D)"
                                @if ($cus->show->CruiseLine == 'Eastern Airlines (2D)') selected @endif>Eastern Airlines
                            (2D)
                        </option>
                        <option value="El Al (LY)" @if ($cus->show->CruiseLine == 'El Al (LY)') selected @endif>El Al
                            (LY)
                        </option>
                        <option value="Emirates (EK)" @if ($cus->show->CruiseLine == 'Air Lingus (EI)') selected @endif>
                            Emirates (EK)
                        </option>
                        <option value="Finnair (AY)" @if ($cus->show->CruiseLine == 'Finnair (AY)') selected @endif>
                            Finnair (AY)
                        </option>
                        <option value="Frontier Airlines (F9)"
                                @if ($cus->show->CruiseLine == 'Frontier Airlines (F9)') selected @endif>Frontier
                            Airlines (F9)
                        </option>
                        <option value="Iberia (IB)" @if ($cus->show->CruiseLine == 'Iberia (IB)') selected @endif>Iberia
                            (IB)
                        </option>
                        <option value="JetBlue (B6)" @if ($cus->show->CruiseLine == 'JetBlue (B6)') selected @endif>
                            JetBlue (B6)
                        </option>
                        <option value="KLM (KL)" @if ($cus->show->CruiseLine == 'KLM (KL)') selected @endif>KLM (KL)
                        </option>
                        <option value="LATAM Airlines (4M, JJ, LA,LP, XP)"
                                @if ($cus->show->CruiseLine == 'LATAM Airlines (4M, JJ, LA,LP, XP)') selected @endif>
                            LATAM Airlines
                            (4M, JJ, LA,LP, XP)
                        </option>
                        <option value="LOT Polish Airlines (LO)"
                                @if ($cus->show->CruiseLine == 'Air Lingus (EI)') selected @endif>LOT Polish Airlines
                            (LO)
                        </option>
                        <option value="Lufthansa (LH)" @if ($cus->show->CruiseLine == 'Lufthansa (LH)') selected @endif>
                            Lufthansa (LH)
                        </option>
                        <option value="Qatar (QR)" @if ($cus->show->CruiseLine == 'Qatar (QR)') selected @endif>Qatar
                            (QR)
                        </option>
                        <option value="SAS (SK)" @if ($cus->show->CruiseLine == 'SAS (SK)') selected @endif>SAS (SK)
                        </option>
                        <option value="Southwest (WN)" @if ($cus->show->CruiseLine == 'Southwest (WN)') selected @endif>
                            Southwest (WN)
                        </option>
                        <option value="Sun Country (SY)"
                                @if ($cus->show->CruiseLine == 'Sun Country (SY)') selected @endif>Sun Country (SY)
                        </option>
                        <option value="Sunwing (WG)" @if ($cus->show->CruiseLine == 'Sunwing (WG)') selected @endif>
                            Sunwing (WG)
                        </option>
                        <option value="Surinam Airways (PY)"
                                @if ($cus->show->CruiseLine == 'Surinam Airways (PY)') selected @endif>Surinam Airways
                            (PY)
                        </option>
                        <option value="Swift Air (SWQ)"
                                @if ($cus->show->CruiseLine == 'Swift Air (SWQ)') selected @endif>Swift Air (SWQ)
                        </option>
                        <option value="Swiss International (LX)"
                                @if ($cus->show->CruiseLine == 'Swiss International (LX)') selected @endif>Swiss
                            International (LX)
                        </option>
                        <option value="TAP Air Portugal (TP)"
                                @if ($cus->show->CruiseLine == 'TAP Air Portugal (TP)') selected @endif>TAP Air Portugal
                            (TP)
                        </option>
                        <option value="TUIfly (TB, OR)"
                                @if ($cus->show->CruiseLine == 'TUIfly (TB, OR)') selected @endif>TUIfly (TB, OR)
                        </option>
                        <option value="Turkish (TK)" @if ($cus->show->CruiseLine == 'Turkish (TK)') selected @endif>
                            Turkish (TK)
                        </option>
                        <option value="United Airlines (UA)"
                                @if ($cus->show->CruiseLine == 'United Airlines (UA)') selected @endif>United Airlines
                            (UA)
                        </option>
                        <option value="Virgin Atlantic (VS)"
                                @if ($cus->show->CruiseLine == 'Virgin Atlantic (VS)') selected @endif>Virgin Atlantic
                            (VS)
                        </option>
                        <option value="Viva (VH)" @if ($cus->show->CruiseLine == 'Viva (VH)') selected @endif>Viva
                            (VH)
                        </option>
                        <option value="Volaris (Y4)" @if ($cus->show->CruiseLine == 'Volaris (Y4)') selected @endif>
                            Volaris (Y4)
                        </option>
                        <option value="WestJet (WS)" @if ($cus->show->CruiseLine == 'WestJet (WS)') selected @endif>
                            WestJet (WS)
                        </option>
                        <option value="World Atlantic (WAL)"
                                @if ($cus->show->CruiseLine == 'World Atlantic (WAL)') selected @endif>World Atlantic
                            (WAL)
                        </option>
                        <option value="N/A" @if ($cus->show->CruiseLine == 'N/A') selected @endif>N/A</option>
                        <option value="Azamara Club Cruises"
                                @if ($cus->show->CruiseLine == 'Azamara Club Cruises') selected @endif>Azamara Club
                            Cruises
                        </option>
                        <option value="Carnival" @if ($cus->show->CruiseLine == 'Carnival') selected @endif>Carnival
                        </option>
                        <option value="Celebrity X Cruises"
                                @if ($cus->show->CruiseLine == 'Celebrity X Cruises') selected @endif>Celebrity X
                            Cruises
                        </option>
                        <option value="Crystal Cruises"
                                @if ($cus->show->CruiseLine == 'Crystal Cruises') selected @endif>Crystal Cruises
                        </option>
                        <option value="Disney Cruise Line"
                                @if ($cus->show->CruiseLine == 'Disney Cruise Line') selected @endif>Disney Cruise Line
                        </option>
                        <option value="MSC Cruises" @if ($cus->show->CruiseLine == 'MSC Cruises') selected @endif>MSC
                            Cruises
                        </option>
                        <option value="Norwegian Cruise Line"
                                @if ($cus->show->CruiseLine == 'Norwegian Cruise Line') selected @endif>Norwegian Cruise
                            Line
                        </option>
                        <option value="Oceania Cruises"
                                @if ($cus->show->CruiseLine == 'Oceania Cruises') selected @endif>Oceania Cruises
                        </option>
                        <option value="Regent Seven Seas Cruises"
                                @if ($cus->show->CruiseLine == 'Regent Seven Seas Cruises') selected @endif>Regent Seven
                            Seas Cruises
                        </option>
                        <option value="Royal Caribbean International"
                                @if ($cus->show->CruiseLine == 'Royal Caribbean International') selected @endif>Royal
                            Caribbean
                            International
                        </option>
                        <option value="Viking Ocean Cruises"
                                @if ($cus->show->CruiseLine == 'Viking Ocean Cruises') selected @endif>Viking Ocean
                            Cruises
                        </option>
                        <option value="Virgin Voyages" @if ($cus->show->CruiseLine == 'Virgin Voyages') selected @endif>
                            Virgin Voyages
                        </option>
                        <option value="AIDA" @if ($cus->show->CruiseLine == 'AIDA') selected @endif>AIDA</option>
                        <option value="Hapag-Lloyd" @if ($cus->show->CruiseLine == 'Hapag-Lloyd') selected @endif>
                            Hapag-Lloyd
                        </option>
                        <option value="Hurtigruten" @if ($cus->show->CruiseLine == 'Hurtigruten') selected @endif>
                            Hurtigruten
                        </option>
                        <option value="PampO Cruises" @if ($cus->show->CruiseLine == 'PampO Cruises') selected @endif>P&amp;amp;O
                            Cruises
                        </option>
                        <option value="Phoenix" @if ($cus->show->CruiseLine == 'Phoenix') selected @endif>Phoenix
                        </option>
                        <option value="Pricess Cruises"
                                @if ($cus->show->CruiseLine == 'Pricess Cruises') selected @endif>Pricess Cruises
                        </option>
                        <option value="SAGA" @if ($cus->show->CruiseLine == 'SAGA') selected @endif>SAGA</option>
                        <option value="SCENIC Luxury Cruises"
                                @if ($cus->show->CruiseLine == 'SCENIC Luxury Cruises') selected @endif>SCENIC Luxury
                            Cruises
                        </option>
                        <option value="SEABOURN" @if ($cus->show->CruiseLine == 'SEABOURN') selected @endif>SEABOURN
                        </option>
                        <option value="TUI Cruises" @if ($cus->show->CruiseLine == 'TUI Cruises') selected @endif>TUI
                            Cruises
                        </option>
                        <option value="Windstar Cruises"
                                @if ($cus->show->CruiseLine == 'Windstar Cruises') selected @endif>Windstar Cruises
                        </option>


                    </select>

                </div>
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">

                        <p>How did you hear about us? <i style="color: red; padding-left: 8px;"
                                                         class="fas fa-check forverify"></i></p>
                        <input type="radio" @if ($cus->show->gender == 'Friends') checked
                               @endif name="gender2" value="Friends"
                               checked>
                        <label for="Female">Friends</label><br>

                        <input type="radio" @if ($cus->show->gender == 'Airline Staff') checked
                               @endif name="gender2" value="Airline Staff">
                        <label for="Female">Airline Staff</label><br>

                        <input type="radio" @if ($cus->show->gender == 'Airport Advertisement') checked
                               @endif name="gender2"
                               value="Airport Advertisement">
                        <label for="Female">Airport Advertisement</label><br>

                        <input type="radio" @if ($cus->show->gender == 'Google') checked
                               @endif name="gender2" value="Google">
                        <label for="Female">Google</label><br>

                        <input type="radio" @if ($cus->show->gender == 'Other') checked
                               @endif name="gender2" value="Other">
                        <label for="Female">Other</label><br>


                    </div>
                </div><!-- col-8 -->
            </div>

            <input type="hidden" name="id" value="{{ $cus->show->id }}" id="">


            <div class="row ">


                <div class="col-lg-6 mb-3">
                    <lable>Primary Insurance : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                    <input type="text" class="form-control" value="{{$cus->show->primary_ins}}" placeholder="Primary Insurance"
                           name="primary_ins">

                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Secondary Insurance : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                    <input type="text" class="form-control" value="{{$cus->show->secondary_ins}}" placeholder="Secondary Insurance"
                           name="secondary_ins">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder Name : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name1}}" placeholder="Policy Holder Name"
                           name="policy_holder_name1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder Name : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_name2}}" placeholder="Policy Holder Name"
                           name="policy_holder_name2">
                </div>


                <div class="col-lg-6 mb-3">
                    <lable>Relationship Patient : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient1}}" placeholder="Relationship Patient"
                           name="relationship_patient1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Relationship Patient : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i> </lable>
                    <input type="text" class="form-control" value="{{$cus->show->relationship_patient2}}" placeholder="Relationship Patient"
                           name="relationship_patient2">
                </div>


                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder DOB : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob1}}" placeholder="Policy Holder DOB"
                           name="policy_holder_dob1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy Holder DOB</lable>

                    <input type="text" class="form-control" value="{{$cus->show->policy_holder_dob2}}" placeholder="Policy Holder DOB"
                           name="policy_holder_dob2">
                </div>


                <div class="col-lg-6 mb-3">
                    <lable>Policy # / Member ID : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id1}}" placeholder="Policy # / Member ID"
                           name="policy_member_id1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Policy # / Member ID : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                    <input type="text" class="form-control" value="{{$cus->show->policy_member_id2}}" placeholder="Policy # / Member ID"
                           name="policy_member_id2">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Group # : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                    <input type="text" class="form-control" value="{{$cus->show->group1}}" placeholder="Group #" name="group1">
                </div>

                <div class="col-lg-6 mb-3">
                    <lable>Group # : <i style="color: red; padding-left: 8px;" class="fas fa-check forverify"></i></lable>
                    <input type="text" class="form-control" value="{{$cus->show->group2}}" placeholder="Group #" name="group2">
                </div>


            </div>



            <div class="form-layout-footer">
                <input type="submit" class="btn btn-info Verify" disabled value="Submit" name="" id="">
            </div><!-- form-layout-footer -->


        </div><!-- form-layout -->
        </form>
        @endif


    </div><!-- br-section-wrapper -->
    <!-- br-pagebody -->
    @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            $(".forverify").click(function () {
                $(this).css('color', 'green');

                $(this).removeClass("forverify");
                $(this).removeClass("forverify1");


                var length = $('.forverify1').length;
                // alert(length)
                if (length == 0) {
                    $('.Verify').prop("disabled", false);
                    ;


                } else {
                    $('.Verify').prop("disabled", true);
                    ;

                }
                // alert(length);


            });


        });
    </script>


@endsection

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
            <h4 class="tx-gray-800 mg-b-5">Add Customer </h4>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Customer</h6>

                <div class="form-layout form-layout-1">
                    @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp
                    <form method="POST" action="{{ url("$role/add_customer") }}">
                        @csrf @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


                        <div class="row mg-b-25">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">First Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" required name="firstname" required
                                        placeholder="Enter First Name">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Middle Name: <span
                                            class="tx-danger"></span></label>
                                    <input class="form-control" type="text"  name="middle_name"
                                           placeholder="Enter Last Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Last Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" required name="Last_name" required
                                        placeholder="Enter Last Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email address: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" required value="" required
                                        placeholder="Enter Email Address">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Address: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="address" required id="address" value="" required
                                        placeholder="Enter Address">
                                </div>
                            </div>



                            <div class="col-lg-6  ">
                                <label class="form-control-label"> Address 2: <span
                                        class="tx-danger"></span></label>
                                <input type="text"  placeholder="{{ __('profile.Address2') }}" name="address2"
                                       class="form-control">
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label class="form-control-label"> City: <span
                                        class="tx-danger">*</span></label>
                                <input type="text" required placeholder="{{ __('profile.Town') }}" name="town"
                                       class="form-control">
                            </div>
                            <div class="col-lg-6  col-12 mt-2">
                                <label class="form-control-label"> Zip code: <span
                                        class="tx-danger">*</span></label>
                                <input type="text" required placeholder="{{ __('profile.Zip Code') }}" name="zip"
                                       class="form-control">
                            </div>
                            <div class="col-lg-6  mt-2">
                                <label>{{ __('profile.State / Province') }} <span
                                        class="tx-danger">*</span></label>
                                <select name="Provinced" required  class="form-control">
                                    @foreach ($state as $states)
                                        <option value="{{ $states->name }}">{{ $states->name }}</option>
                                    @endforeach
                                </select>
                                <input type="text" style="display: none"  placeholder="{{ __('profile.State / Province') }}" name="Province"
                                       class="form-control">
                            </div>


                            <div class="col-lg-6  pt-2">
                                <label>{{ __('profile.Country') }} <span
                                        class="tx-danger">*</span></label>
                                <select class="form-control changecountry"  required name="country">
                                    @foreach ($country as $countries)
                                        <option   @if($countries->name=='United States') selected @endif  value="{{ $countries->name }}">{{ $countries->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-lg-6 mt-2">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Phone Number: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone" required id="phone" value="" required
                                        placeholder="Enter Number">
                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6 mt-2" >
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Date of Birth: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="date" name="dob" required id="dob" value="" required
                                        placeholder="Enter Date of Birth">
                                </div>
                            </div><!-- col-8 -->

<!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Passport: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" required     name="passport" id="passport" value="" required
                                        placeholder="Enter Passport">
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Select Gender:</p>
                                      <input type="radio" id="Male"checked name="gender" value="Male">
                                      <label for="Male">Male</label><br>
                                      <input type="radio" id="Female" name="gender" value="Female">
                                      <label for="Female">Female</label><br>

                                </div>
                            </div>



                            <div class="row ">

                                <div class="col-lg-6 mb-3">
                                    <lable>Primary Insurance : </lable>
                                    <input type="text" class="form-control" placeholder="Primary Insurance"
                                           name="primary_ins">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Secondary Insurance :  </lable>
                                    <input type="text" class="form-control"  placeholder="Secondary Insurance"
                                           name="secondary_ins">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder Name : </lable>
                                    <input type="text" class="form-control"  placeholder="Policy Holder Name"
                                           name="policy_holder_name1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder Name :  </lable>
                                    <input type="text" class="form-control"  placeholder="Policy Holder Name"
                                           name="policy_holder_name2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Relationship Patient :  </lable>
                                    <input type="text" class="form-control"  placeholder="Relationship Patient"
                                           name="relationship_patient1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Relationship Patient :  </lable>
                                    <input type="text" class="form-control"  placeholder="Relationship Patient"
                                           name="relationship_patient2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder DOB : </lable>
                                    <input type="text" class="form-control"  placeholder="Policy Holder DOB"
                                           name="policy_holder_dob1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy Holder DOB</lable>

                                    <input type="text" class="form-control"  placeholder="Policy Holder DOB"
                                           name="policy_holder_dob2">
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <lable>Policy # / Member ID : </lable>
                                    <input type="text" class="form-control"  placeholder="Policy # / Member ID"
                                           name="policy_member_id1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Policy # / Member ID : </lable>
                                    <input type="text" class="form-control" placeholder="Policy # / Member ID"
                                           name="policy_member_id2">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Group # : </lable>
                                    <input type="text" class="form-control"  placeholder="Group #" name="group1">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <lable>Group # : </lable>
                                    <input type="text" class="form-control"  placeholder="Group #" name="group2">
                                </div>


                            </div>







                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <input type="submit" class="btn btn-info" value="Submit">
                        </div><!-- form-layout-footer -->


                </div><!-- form-layout -->
                </form>


            </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
        $(document).on('change', '.changecountry', function() {

            if ($(this).val()!='United States')
            {
                $("input[name='Province']").show();
                $("input[name='Province']").prop('required',true);
                $("select[name='Provinced']").hide();
                $("input[name='Province']").val('');

            }
            else  {
                $("input[name='Province']").hide();
                $("select[name='Provinced']").show();
                $("input[name='Province']").val('');
                $("input[name='Province']").prop('required',false);
            }


        });
        });
    </script>





@endsection

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

                    <form method="POST" action="{{ url(''.$role.'/customer/update') }}">
                        @csrf @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


                        <div class="row mg-b-25">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Name: <span
                                            class="tx-danger"></span></label>
                                    <input class="form-control" value="{{$cus->name}}" type="text" required name="firstname" required
                                        placeholder="Enter Name">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email address: <span
                                            class="tx-danger"></span></label>
                                    <input class="form-control" type="email" value="{{$cus->email}}"  name="email" required value="" required
                                        placeholder="Enter Email Address">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Address: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{$cus->address}}"  name="address" required id="address" value="" required
                                        placeholder="Enter Address">
                                </div>
                            </div><!-- col-8 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Phone Number: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{$cus->phone}}"  name="phone" required id="phone" value="" required
                                        placeholder="Enter Number">
                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Date of Birth: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="date" value="{{$cus->dob}}"  name="dob" required id="dob" value="" required
                                        placeholder="Enter Date of Birth">
                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">

                                    <p>Select Gender:</p>
                                      <input type="radio"  @if($cus->gender == 'Male' ) checked @endif id="Male" name="gender" value="Male">
                                      <label for="Male">Male</label><br>
                                      <input type="radio" id="Female"  @if($cus->gender == 'Female' ) checked @endif name="gender" value="Female">
                                      <label for="Female">Female</label><br>

                                </div>
                            </div><!-- col-8 -->


                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label"> Passport: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{$cus->passport}}"      name="passport" id="passport" value="" required
                                        placeholder="Enter Passport">
                                </div>
                            </div><!-- col-8 -->


<input type="hidden"  name="id" value="{{$cus->id}}" id="">

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

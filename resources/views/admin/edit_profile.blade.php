@extends('admin.layouts.default')
@section('content')

    <style>
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
    <!-- ########## START: LEFT PANEL ########## -->

        @include('admin.layouts.sidebar')


    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
@include('admin.layouts.header')
<?php

$user = App\Models\User::find(Auth::user()->id);

?>


    <div class="br-mainpanel">

      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit Profile    </h4>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Profile</h6>

          <div class="form-layout form-layout-1">
              @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

            <form method="POST" action="{{url('/'.$role.'/update')}}" >
                @csrf              @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

                <input type="hidden" name="id" value="{{$user->id}}" id="">

            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" value="{{$user->name}}" type="text" name="firstname"  placeholder="Enter Name">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="{{$user->email}}" name="email"  placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="{{$user->address}}" name="address"  placeholder="Enter address">
                </div>
              </div>

                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">password: </label>
                        <input class="form-control" type="password" name="password"  placeholder="password">
                    </div>
                </div>

@if($role=='admin')
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Authentication: </label>

                        <label class="switch">
                        <input @if($user->authentication==1) checked @endif name="authentication" value="1" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                @endif

            </div><!-- row -->

            <div class="form-layout-footer">
              <input type="submit" class="btn btn-info" value="Update">
            </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->



        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
@include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


@endsection

@extends('admin.layouts.default')
@section('content')
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

            <form method="POST" action="{{url('admin/update')}}" >
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
              </div><!-- col-8 -->

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

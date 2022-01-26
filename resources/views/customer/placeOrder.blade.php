@extends('admin.layouts.default')
@section('content')

    @include('admin.layouts.sidebar')

    @include('admin.layouts.header')
<style>
    .border_div{
        border: 1px solid gray;
        border-radius: 5px;
    }

</style>



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
        </div><!-- d-flex -->
        @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

        <div class="br-pagebody mg-t-5 pd-x-30">
            @include('partials.component')
            <div class="card bd-0 shadow-base pd-30 mg-t-20">

                <form action="{{url("$role/submit/order/$cus->id")}}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-12">
                        <h5>Contact Information</h5>
                    </div>
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="">Email</label>
                        <input type="email" placeholder="Enter Your Email" value="{{$cus->email}}" name="email" class="form-control">
                    </div>
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="">Phone</label>
                        <input type="text" placeholder="Enter Your Number" value="{{$cus->phone}}" name="phone" class="form-control">
                    </div>
                    <div class="col-12 pt-5">
                        <h5>Test Choice</h5>
                    </div>

                    @foreach($testList as $test)
                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>{{$test->name}}</p>
                                <b>$ {{$test->price}}</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="{{$test->name}}">
                            </div>
                        </div>
                    </div>
                    @endforeach




                    <div class="col-12 pt-3 text-right">
                        <button class="btn btn-secondary">Cancel</button>
                        <button class="btn btn-primary">Submit</button>
                    </div>







                </div>
                </form>
            </div>




        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




@endsection

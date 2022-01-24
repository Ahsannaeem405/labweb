@extends('admin.layouts.default')
@section('content')

    @include('admin.layouts.sidebar')

    @include('admin.layouts.header')
    <style>
        .border_div {
            border: 1px solid gray;
            border-radius: 5px;
        }

        @media only screen and (max-width: 375px) {
            .a_tag {
                font-size: 13px;
            }
        }

    </style>

    @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

    <!-- ########## START: MAIN PANEL ########## -->
    {{-- @dd($order) --}}
    <div class="br-mainpanel">
        <div class="pd-30">
            @include('partials.component')

            <div class="row">
                <div class="col-12 pt-2">
                    <a href="{{ url("$role/create/order/customer/$cus->id") }}"><i class="fas fa-chevron-left"></i> Back to Customer List</a>
                </div>
                <div class="col-12 pt-2 text-dark">
                    <h5>{{ 'Order #' }}{{$order->id}}</h5>
                    <p><span style="font-size: 18px;font-weight:inherit">
                    <span>  PORTOFINO IV CENTER</span>

                    <span> 901-A SW 87 AVE</span>




                    </span> &nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o"
                            aria-hidden="true"></i> Active
                    </p>
                </div>


            </div>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">

            {{-- @dd($order->name) --}}
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5 s>Patient Information</h5>
                                <span>Patient Personal Information</span>
                            </div>
                            <div class="col-lg-12 col-12 pt-3 text-dark">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Name</label>
                                        <p>{{$order->name}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Email</label>
                                        <p>{{$order->email}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Phone</label>
                                        <p>{{$order->phone}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Address</label>
                                        <p>{{$order->address}}</p>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-12 col-md-12" style="margin-bottom: -15px;">
                                    <label style="    font-weight: bold;" for="">Documents</label>
                                    </div>
                                    @foreach ($document as $documents)
                                    <div class="col-lg-6 col-md-6 col-md-6">
                                        <br>

                                       <span class="mt-1"
                                            style=""><i class="fa fa-file" aria-hidden="true"></i> &nbsp;@if(isset($documents->path )) {{ 'Smartwaiver Consent.pdf' }} @endif</span>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-md-6"
                                        style="text-align: end;vertical-align: middle;margin: auto;">
                                        <a href="{{ asset("uploads/stock/$documents->path") }}" download> <span
                                            class="p-1">Download</a> &nbsp;&nbsp;
                                            <a href="{{ asset("uploads/stock/$documents->path") }} " target="_blank" class=""> View</a>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                    </div>

                    <br>

{{--
                    @dd($order) --}}


                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5 s>Order Information</h5>
                            </div>
                            <div class="col-lg-12 col-12 pt-3 text-dark">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Test Name</label>
                                        <p>{{$order->test_type}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Price</label>
                                        <p>${{$order->payment_amount}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Testing Platform</label>
                                        <p>ABBOTT IDNOW</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label style="    font-weight: bold;" for="">Results </label>
                                        <p>{{$order->display_status}}</p>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-lg-12 col-md-12" style="margin-bottom: -15px;">
                                    <label style="    font-weight: bold;" for="">Documents</label>
                                    </div>

                                    @if($order->step >=4)
                                    <div class="col-lg-6 col-md-6 col-md-6"
                                    style="text-align: start;">
                                    <br>
                                    <span class="mt-1"
                                    style="    padding: 12px;"><i class="fa fa-file" aria-hidden="true"></i> &nbsp;{{ 'Medical lab report.pdf' }}</span>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-md-6"
                                    style="text-align: end;vertical-align: middle;margin: auto;">
                                    <a href="{{url("$role/downloadd/$order->id")}}" > <span
                                        class="p-1">Download</a> &nbsp; &nbsp;
                                        <a href="{{ asset("$role/view/$order->id") }} " target="_blank" class=""> View</a>



{{--

                                        <a href="{{url("$role/release/send/$views->id")}}">   <button
                                            class="btn btn-primary">
                                            Notify him
                                        </button></a> --}}

                                </div>
                                    @endif


                                </div>
                            </div>
                        </div>


                    </div>



                    <br>



                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5 s>Invoices</h5>
                            </div>
                            <div class="col-lg-12 col-12 pt-3 text-dark">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        @if ($order->step > 1 && $order->display_status != 'Canceled')
                                            <p>Order # {{ $order->order_id   }}</p>
                                        @endif
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12" style="text-align: end">
                                        @if ($order->step > 2)
                                        <button class="btn btn-success">Paid</button>

                                    @else
                                        <button class="btn btn-warning">Pending</button>

                                    @endif
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 " style="text-align: end">
                                        <span style="    font-weight: bold;
                                        font-size: 18px;">${{ $order->payment_amount }}</span>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-lg-4 col-12">


                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <b>Summary</b>

                            </div>

                        </div>

                        <div class="row" style="margin-top: 15px;">





                            <div class="col-5 pt-2">
                                Test
                            </div>
                            <div class="col-7 pt-2">
                                <span style="    font-size: 18px;color: black;">{{$order->test_type}}</span>
                            </div>
                            {{-- @foreach ($order as $orders) --}}

                            <div class="col-5 pt-2">
                               Price
                            </div>
{{-- @dd($order) --}}
                            <div class="col-7 pt-2">
                                <span style="    font-size: 18px;color: black;">${{$order->payment_amount}}</span>
                            </div>


                            {{-- @if ($orders->payment_date != null) --}}
                            <div class="col-5 pt-2">
                               date
                            </div>
                            <div class="col-7 pt-2">
                                <span style="    font-size: 18px;color: black;">{{$order->result_date}}</span>
                            </div>

                            <hr class="col-10" />
                            @if( isset($order->display_status))


                            <div class="col-7 pt-2">
                               <span style="font-weight: bold">Result</span>
                             </div>
                             <div class="col-5 pt-2">
                                 <p style="text-transform: uppercase;font-size: 17px;font-weight: bold;">{{$order->display_status}}</p>
                             </div>

                             @else
                             <div class="col-7 pt-2">
                                <span style="font-weight: bold">No Result Provided</span>
                              </div>
                              <div class="col-5 pt-2">
                                  <p></p>
                              </div>

                              @endif

                        </div>

                    </div>

                </div>


























            </div>





        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>











    <script>
        $(document).ready(function() {
            $('.cust').click(function() {

                var id = $(this).attr('attrr');


                var rolee = $(this).attr('rolee');
                var url = '/' + rolee + '/customer/view/order/' + id;
                $(location).attr('href', url);

            });
        });
    </script>


@endsection

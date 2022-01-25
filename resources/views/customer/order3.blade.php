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
    <div class="br-mainpanel">
        <div class="pd-30">
            @include('partials.component')

            <div class="row">
                <div class="col-12 pt-2">
                    <a href="{{ url("$role/create/order/customer/$cusid") }}"><i class="fas fa-chevron-left"></i> Back to Customer List</a>
                </div>
                <div class="col-12 pt-2 text-dark">
                    <h5>{{ 'Invoice #'.$order->id }}</h5>
                    <p>


                    <span><span style="font-size: 18px;font-weight:inherit">
                    <span>  PORTOFINO IV CENTER</span>

                    <span> 901-A SW 87 AVE</span>




                    </span> &nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o"
                                                  aria-hidden="true"></i> Active
                    </span>

                            @if ($order->step > 2)
                         Paid

                        @else
                           Pending

                        @endif
                    </p>


                </div>


            </div>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">

            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5 s>Payor Information</h5>
                                <span>Payor Personal Information</span>
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


                            </div>
                        </div>


                    </div>

                    <br>




                    <br>



                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5 s>Invoices Lines</h5>
                            </div>
                            <div class="col-lg-12 col-12 pt-3 text-dark">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <p>{{'Order #'.$order->order_id}}</p>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12" style="text-align: end">
                                        @if ($order->step > 2)
                                        <button class="btn btn-success">Paid</button>

                                    @else
                                        <button class="btn btn-warning">Pending</button>

                                    @endif
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 " style="text-align: end">
                                        <span>${{$order->payment_amount}}</span>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 " style="text-align: end">
                                        <a href="{{url("/$role/customer/view/order/$order->id/$cusid")}}">
                                            <i class="fa fa-arrow-right" aria-hidden="true">
                                        </i>
                                    </a>

                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 " style="text-align: end">

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





                            <div class="col-7 pt-2">
                                Subtotal
                            </div>
                            <div class="col-5 pt-2" style="text-align: center;">
                                <p>${{$order->payment_amount}}</p>
                            </div>


                            <hr class="col-10" />
                            <div class="col-7 pt-2">
                                <span style="font-weight: bold">Total</span>
                            </div>
                            <div class="col-5 pt-2" style="text-align: center;">
                                <p>${{$order->payment_amount}}</p>
                            </div>

                            <div class="col-12 pt-2" style="text-align: center">
                                {{--  <button onclick="window.print()"     style="    width: 100%;">
                                    Print Invoice Receipt</button>  --}}
                                    <a href="{{ url("$role/prnpriview/$order->id") }}" target="_blank" style="width: 100%" class="btn btn-primary">Print Invoice</a>

                                {{--  <button style="    width: 100%;    margin-top: 7px;    ">
                                    Regenerate Invoice Receipt</button>  --}}
                            </div>


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

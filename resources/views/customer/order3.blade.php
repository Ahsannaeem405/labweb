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
                    <a href="{{ url("$role/customers/") }}"><i class="fas fa-chevron-left"></i> Back to Customer List</a>
                </div>
                <div class="col-12 pt-2 text-dark">
                    <h5>{{ 'Invoice #'.$order->id }}</h5>
                    <p>{{ 'Miami International Airport' }} &nbsp;&nbsp;&nbsp; <i class="fa fa-check"
                            aria-hidden="true"></i>

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

                                <div class="row">

                                    <div class="col-lg-12 col-md-12" style="margin-bottom: -15px;">
                                    <label style="    font-weight: bold;" for="">Documents</label>
                                    </div>
                                    @foreach ($document as $documents)
                                    <div class="col-lg-6 col-md-6 col-md-6">
                                        <br>

                                       <span class="mt-1"
                                            style=""><i class="fa fa-file" aria-hidden="true"></i> &nbsp;{{ $documents->path }}</span>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-md-6"
                                        style="text-align: end;vertical-align: middle;margin: auto;">
                                        <a href="{{ asset("uploads/stock/$documents->path") }}" target="_blank"> <span
                                            class="p-1">Download</a>
                                    </div>
                                    @endforeach

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
                                        <p>{{'Order #'.$order->id}}</p>
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
                                        <a href="{{url("/public/$role/customer/view/order",$order->id)}}">
                                            <i class="fa fa-arrow-right" aria-hidden="true">
                                        </i>
                                    </a>

                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 " style="text-align: end">
                                        <span><i class="fa fa-trash" aria-hidden="true"></i>
                                        </span>
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

                            <div class="col-12 pt-2">
                                <button onclick="window.print()"     style="    width: 100%;">
                                    Print Invoice Receipt</button>
                                <button style="    width: 100%;    margin-top: 7px;    ">
                                    Regenerate Invoice Receipt</button>
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

    <?php
    $count1 = null;
    $count2 = null;
    $count3 = null;
    $count4 = null;
    $count5 = null;
    $pre_month1 = null;

    ?>

    @for ($i = 4; $i >= 0; $i--)
        <?php
        $pre_month1 .= date('M-Y', strtotime('-' . $i . ' month')) . ',';
        ?>
    @endfor

    <?php
    $pre_month1 = explode(',', $pre_month1);
    $users = App\Models\User::Where('role', 'operator')
        ->pluck('created_at')
        ->all();
    ?>

    @foreach ($users as $user)

        @if (date('M-Y', strtotime($user)) == $pre_month1['0'])
            <?php
            $count1 += 1;
            ?>
        @elseif (date('M-Y', strtotime($user)) == $pre_month1['1'])
            <?php
            $count2 += 1;
            ?>
        @elseif (date('M-Y', strtotime($user)) == $pre_month1['2'])
            <?php
            $count3 += 1;
            ?>
        @elseif (date('M-Y', strtotime($user)) == $pre_month1['3'])
            <?php
            $count4 += 1;
            ?>
        @elseif (date('M-Y', strtotime($user)) == $pre_month1['4'])
            <?php
            $count5 += 1;
            ?>
        @endif
    @endforeach


    <script>
        $(document).ready(function() {



            // $(function() {
            'use strict'

            var ctx = document.getElementById('chartBar1').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    // labels: ["Jan", 'Feb', 'Mar', 'Apr', 'May'],
                    labels: [<?php echo "'$pre_month1[0]'" . ',' . "'$pre_month1[1]'" . ',' . "'$pre_month1[2]'" . ',' . "'$pre_month1[3]'" . ',' . "'$pre_month1[4]'"; ?>],

                    datasets: [{
                        label: 'Total',
                        // data: [12, 39, 20, 10, 25],
                        data: [<?php echo $count1 . ',', $count2 . ',', $count3 . ',', $count4 . ',', $count5; ?>],
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 10,
                                max: 80
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11
                            }
                        }]
                    }
                }
            });


            var ctx = document.getElementById('chartBar2').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {


                    labels: [<?php echo "'$pre_month1[0]'" . ',' . "'$pre_month1[1]'" . ',' . "'$pre_month1[2]'" . ',' . "'$pre_month1[3]'" . ',' . "'$pre_month1[4]'"; ?>],

                    datasets: [{
                        label: 'Total',
                        // data: [12, 39, 20, 10, 25],
                        data: [<?php echo $count1 . ',', $count2 . ',', $count3 . ',', $count4 . ',', $count5; ?>],
                        backgroundColor: '#27AAC8'
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 10,
                                max: 80
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11
                            }
                        }]
                    }
                }
            });
        });
    </script>



    <script>
        $(document).ready(function() {
            $('.cust').click(function() {

                var id = $(this).attr('attrr');

                alert(1);
                var rolee = $(this).attr('rolee');
                var url = '/public/' + rolee + '/customer/view/order/' + id;
                $(location).attr('href', url);

            });
        });
    </script>


@endsection

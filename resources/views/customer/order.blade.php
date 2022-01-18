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
                    <a href="{{ url("$role/customers") }}"><i class="fas fa-chevron-left"></i> Back to Customer List</a>
                </div>
                <div class="col-12 pt-2 text-dark">
                    <h5>{{ $cus->name }}</h5>
                    <p>#{{ $cus->id }}</p>
                    <p><span class="text-bold">{{ $cus->gender }}</span> Born on <span
                            class="text-bold">{{ $cus->dob }}</span></p>

                </div>
                <div class="col-lg-8 col-12 pt-3 text-dark">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <p><i class="far fa-envelope"></i> {{ $cus->email }}</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <p><i class="fas fa-mobile-alt "></i> {{ $cus->phone }}</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <p><i class="fas fa-map-marker-alt "></i> {{ $cus->address }}</p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-12 pt-2 text-dark text-right">
                    <a href="{{ url("$role/edit/customer/$cus->id") }}"> <button class="btn btn-secondary">Edit
                            Customer</button></a>
                    <a href="{{ url("$role/place/order/new/$cus->id") }}"> <button class="btn btn-primary">Place
                            Order</button></a>

                </div>
            </div>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">

            <div class="row">
                <div class="col-lg-8 col-12">







                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5>Order</h5>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($order as $orders)
                                        {{-- @dd($orders->test_type ) --}}

                                        @if ($orders->main_status == 'user')
                                        @if(isset($orders->show->Select_the_test))


                                            <tr>

                                                <td  attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}"># </td>



                                                <td  attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">

                                                    {{ $orders->show->Select_the_test }}


                                                </td>
                                                <td  attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    @if(isset($orders->show->created_at))
                                                    {{ $orders->show->created_at }}
                                                    @endif


                                                </td>

                                                <td>
                                                    <a    onclick="return confirm('Are you sure you want to approve this item?');" href="{{ url("$role/order/approve/$orders->id") }}" class="btn btn-secondary Draft" >{{ 'Draft' }}</a>
                                                </td>

                                                <td  attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    @if ($orders->display_status == null) <a
                                                            disabled
                                                            onclick="return confirm('Are you sure you want to delete this item?');"
                                                            href="{{ url("$role/order/cancel/$orders->id") }}"
                                                            class="a_tag"
                                                            style="color: blue;text-decoration: underline">Cancel</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ url("/public/$role/customer/view/order", $orders->id) }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endif

                                        @else
                                            <tr>
                                                <td class="cust" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">#{{ $orders->id }} </td>



                                                <td class="cust" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    {{ $orders->test_type }}
                                                </td>
                                                <td class="cust" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    {{ $orders->order_date }}</td>

                                                <td class="cust" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    @if ($orders->display_status == null)
                                                        <button class="btn btn-warning">{{ 'pending' }}</button>

                                                    @else

                                                        <button
                                                            class="btn     @if ($orders->display_status == 'negative') btn-success @else btn-danger  @endif">{{ $orders->display_status }}</button>

                                                    @endif
                                                </td>


                                                <td class="cust" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    @if ($orders->display_status == null) <a
                                                            disabled
                                                            onclick="return confirm('Are you sure you want to delete this item?');"
                                                            href="{{ url("$role/order/cancel/$orders->id") }}"
                                                            class="a_tag"
                                                            style="color: blue;text-decoration: underline">Cancel</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ url("/$role/customer/view/order", $orders->id) }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>

                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </div>


                    </div>











                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5>Invoices</h5>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($order as $orders)
                                        @if ($orders->step > 1 && $orders->display_status != 'Canceled')
                                            <tr>

                                                <td class="invoi" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">#{{ $orders->id }}
                                                    <span> - </span>
                                                    <span><i class="fas fa-calendar-minus"></i>
                                                </td>
                                                <td class="invoi" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">{{ $orders->payment_date }}</td>

                                                <td class="invoi" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    @if ($orders->step > 2)
                                                        <button class="btn btn-success">Completed</button>

                                                    @else
                                                        <button class="btn btn-warning">Pending</button>

                                                    @endif
                                                </td>
                                                <td class="invoi" attrr="{{ $orders->id }}"
                                                    rolee="{{ $role }}">
                                                    ${{ $orders->payment_amount }}
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ url("/$role/customer/view/invoice", $orders->id) }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true">
                                                        </i>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </div>


                    </div>



                    {{-- <div class="card bd-0 shadow-base p-3 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <h5>Invoices</h5>
                            </div>
                            @foreach ($order as $orders)
                                @if ($orders->step > 1 && $orders->display_status != 'Canceled')
                                    <div class="col-lg-4 col-md-6 col-6 pt-2">
                                        <span>#{{ $orders->id }}</span> <span> - </span>
                                        <span><i class="fas fa-calendar-minus"></i> {{ $orders->payment_date }}</span>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-6 pt-2 text-center">
                                        @if ($orders->step > 2)
                                            <button class="btn btn-success">Completed</button>

                                        @else
                                            <button class="btn btn-warning">Pending</button>

                                        @endif
                                    </div>

                                    <div class="col-lg-2 col-md-4 col-4 pt-2">
                                        <b>${{ $orders->payment_amount }}</b>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-2 pt-2">

                                    </div>


                                @endif
                            @endforeach

                        </div>


                    </div> --}}
                </div>
                <div class="col-lg-4 col-12">


                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <b>Document</b>

                            </div>
                            @foreach ($document as $documents)
                                <div class="w-100 p-1 m-1" style="background-color: #9595e8"> <span class="mt-1"
                                        style="color: white"> @if(isset($documents->path )) {{ 'Smartwaiver Consent.pdf' }} @endif </span>


                                    <a href="{{ asset("uploads/stock/$documents->path") }}" target="_blank"> <span
                                            class="p-1" style="color: white;float: right"><i
                                                class="fa fa-search"></i></span>
                                    </a>
                                    <a href="{{ url("$role/delete/document/$documents->id") }}"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><span
                                            class="p-1" style="color: white;float: right;color: red"><i
                                                class="fa fa-trash"></i></span></a>
                                    <a href="{{ asset("uploads/stock/$documents->path") }}" download> <span
                                            class="p-1" style="color: white;float: right">download</span> </a>


                                </div>

                            @endforeach

                            <form class="w-100" action="{{ url("$role/upload/document/$cus->id") }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <lable class="ml-2 mt-5 font-weight-bold">Upload Document</lable>
                                <div class="col-12 pt-2">
                                    <input type="file" name="file" required class="form-control">

                                </div>
                                <div class="col-12 pt-2 text-right">
                                    <button type="submit" class="btn btn-success">Submit</button>

                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="card bd-0 shadow-base p-3 mt-2" style="height: 230px;overflow: auto">
                        <div class="row">
                            <div class="col-12">
                                <b>Events Timeline</b>
                            </div>


                            <div class="col-7 pt-2">
                                <i class="fas fa-user"></i> New Patient Created
                            </div>
                            <div class="col-5 pt-2">
                                <p>{{ $cus->created_at }}</p>
                            </div>

                            @foreach ($order as $orders)

                                <div class="col-7 pt-2">
                                    <i class="fas fa-user"></i> Order #{{ $orders->id }} - created
                                </div>
                                <div class="col-5 pt-2">
                                    <p>{{ $orders->created_at }}</p>
                                </div>


                                @if ($orders->payment_date != null)
                                    <div class="col-7 pt-2">
                                        <i class="fas fa-user"></i> Order #{{ $orders->id }} - Invoice paid
                                    </div>
                                    <div class="col-5 pt-2">
                                        <p>{{ $orders->payment_date }}</p>
                                    </div>
                                @endif

                                @if ($orders->date != null)
                                    <div class="col-7 pt-2">
                                        <i class="fas fa-user"></i> Order #{{ $orders->id }} - Released
                                    </div>
                                    <div class="col-5 pt-2">
                                        <p>{{ $orders->date }}</p>
                                    </div>
                                @endif

                            @endforeach

                            {{-- item 2 --}}
                            {{-- <div class="col-7 pt-2"> --}}
                            {{-- <i class="fas fa-folder"></i> New Patient Created --}}
                            {{-- </div> --}}
                            {{-- <div class="col-5 pt-2"> --}}
                            {{-- <p>Jan 05 12:00 PM</p> --}}
                            {{-- </div> --}}
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

                var rolee = $(this).attr('rolee');
                var url = '/public/' + rolee + '/customer/view/order/' + id;
                $(location).attr('href', url);

            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.invoi').click(function() {

                var id = $(this).attr('attrr');

                var rolee = $(this).attr('rolee');
                var url = '/public/' + rolee + '/customer/view/invoice/' + id;
                $(location).attr('href', url);

            });
        });
    </script>




@endsection

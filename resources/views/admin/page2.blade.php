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



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="#"><i class="fas fa-chevron-left"></i> Back to Customer List</a>
                </div>
                <div class="col-12 pt-2 text-dark">
                    <h5>David</h5>
                    <p>#515151515</p>
                    <p><span class="text-bold">Male</span> Born on <span class="text-bold">22 Feb</span></p>

                </div>
                <div class="col-lg-8 col-12 pt-3 text-dark">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <p><i class="far fa-envelope"></i> Demo@gmail.com</p>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <p><i class="fas fa-mobile-alt "></i> 090078601</p>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <p><i class="fas fa-map-marker-alt "></i> Lahore,Pakistan</p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-12 pt-2 text-dark text-right">
                    <button class="btn btn-secondary">Edit Customer</button>
                    <button class="btn btn-primary">Place Order</button>

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
                            <div class="col-lg-2 col-md-6 col-6 pt-2">
                                <button class="btn btn-secondary"><i class="far fa-edit"></i> Edit</button>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 pt-2">
                                <b>RT-PCR -Abbot ID Now</b>
                                <p>1-12-2021 <i class="far fa-calendar-minus"></i></p>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 pt-2">
                                <button class="btn btn-secondary">Draft</button>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4 pt-2">
                                <a href="#" class="a_tag" style="color: green">Checkout</a>
                                <a href="#" class="a_tag" style="color: gray">Cancel</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 pt-2">
                                <a href="#" class="a_tag" style="color: gray"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>


                    </div>
                    <div class="card bd-0 shadow-base p-3 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <h5>Invoices</h5>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 pt-2">
                                <button class="btn btn-secondary"><i class="far fa-edit"></i> Edit</button>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 pt-2">
                                <b>RT-PCR -Abbot ID Now</b>
                                <p>1-12-2021 <i class="far fa-calendar-minus"></i></p>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 pt-2">
                                <button class="btn btn-secondary">Draft</button>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4 pt-2">
                                <a href="#" class="a_tag" style="color: green">Checkout</a>
                                <a href="#" class="a_tag" style="color: gray">Cancel</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 pt-2">
                                <a href="#" class="a_tag" style="color: gray"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>


                            {{-- 2item --}}
                            <div class="col-lg-2 col-md-6 col-6 pt-2">
                                <button class="btn btn-secondary"><i class="far fa-edit"></i> Edit</button>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 pt-2">
                                <b>RT-PCR -Abbot ID Now</b>
                                <p>1-12-2021 <i class="far fa-calendar-minus"></i></p>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 pt-2">
                                <button class="btn btn-secondary">Draft</button>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4 pt-2">
                                <a href="#" class="a_tag" style="color: green">Checkout</a>
                                <a href="#" class="a_tag" style="color: gray">Cancel</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 pt-2">
                                <a href="#" class="a_tag" style="color: gray"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <b>Document</b>

                            </div>
                            <div class="col-12 pt-2">
                                <input type="file" name="file" class="form-control">

                             </div>
                            <div class="col-12 pt-2">
                               <input type="file" name="file" class="form-control">

                            </div>
                            <div class="col-12 pt-2 text-right">
                               <button class="btn btn-success">Submit</button>

                             </div>
                        </div>

                    </div>
                    <div class="card bd-0 shadow-base p-3 mt-2">
                        <div class="row">
                            <div class="col-12">
                                <b>Events Timeline</b>
                            </div>
                            <div class="col-7 pt-2">
                               <i class="fas fa-user"></i> New Patient Created
                            </div>
                            <div class="col-5 pt-2">
                                <p>Jan 05 12:00 PM</p>
                            </div>

                            {{-- item 2 --}}
                            <div class="col-7 pt-2">
                                <i class="fas fa-folder"></i> New Patient Created
                            </div>
                            <div class="col-5 pt-2">
                                <p>Jan 05 12:00 PM</p>
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


@endsection

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
                        <h3>Test Choice</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>PCR</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="PCR">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>Antigen-BinaxNow</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="antigen">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>Antibody</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="antibody">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>RT-PCR - Abbot Id Now</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="RT-PCR">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>Antigen -Verito Plus</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="Verito">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>PCR -24Hrs</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="PCR-24">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>RT-PCR 24 HRS -ABBOT ID NOW</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="RT-PCR 24 HRS">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>Antigen-CareStart</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="Antigen-CareStart">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>RT-PCR -Accula</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="RT-PCR -Accula">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>Antigen-Sienna</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="Sienna">
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 col-12 pt-3">
                        <div class="row border_div m-2 p-2">
                            <div class="col-10">
                                <p>PCR</p>
                                <b>$ 168</b>
                            </div>
                            <div class="col-2 pt-1">
                                <input type="checkbox" name="choice[]" value="PCR">
                            </div>
                        </div>
                    </div>
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
    $users = App\Models\User::Where('role', 'operator')->pluck('created_at')->all();
    ?>

    @foreach ($users as $user)

        @if (date('M-Y', strtotime($user)) == $pre_month1['0'])
            <?php
            $count1 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['1'])
            <?php
            $count2 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['2'])
            <?php
            $count3 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['3'])
            <?php
            $count4 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['4'])
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

@extends('admin.layouts.default')
@section('content')

<link href="{{asset('/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">

    <style>
        .br-pagebody {
            margin-top: 83px;
        }

        /* div#datatable1_paginate {
            display: none;
        } */

        table#datatable1 {
            width: 100%;
        }

        tr.odd {
            background-color: #f9f9f9;
        }

        td.sorting_1 {
            background-color: #f9f9f9;

        }





        body input[type=radio] {
            display: none;
        }



        .resnegative {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }




    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')



    <div class="br-mainpanel">


        <div class="br-pagebody">
            @include('partials.component')
            <div class="br-section-wrapper table-responsive">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Pending Results</h6>

                <div class="" style="width: 100%;
                        overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1">
                        <thead>
                        <tr>
                            <th class="">Order Id</th>
                            <th class="">Date</th>
                            <th class=""> Name</th>
                            <th class="">E-mail</th>
                            <th class="">Amount</th>
                            <th class="">Test</th>
                            <th class="">Status</th>
                            <th class="">Action</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $i = 1;

                        ?>
                        @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

                        @foreach ($customer as $views)

                            <tr>
                                <td>{{ $views->order_id }}</td>
                                <td>{{ $views->payment_date }}</td>
                                <td>{{ $views->name }}</td>

                                <td>{{ $views->email }}</td>


                                <td>${{ $views->payment_amount }}</td>
                                <td>{{ $views->test_type }}</td>
                                <td><span class="p-2" style="background-color: #adeaa8;color: white;border-radius: 5px">paid</span></td>


                                <td>

                                    <button data-toggle="modal" data-target="#exampleModal{{$views->id}}"
                                            class="btn btn-primary">
                                        Set Result
                                    </button>


                                </td>

                            </tr>

                            <style>

                            </style>

                            <div class="modal fade" id="exampleModal{{$views->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 30rem">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">  Set Test Result</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url("$role/add/results/$views->id")}}">
                                                @csrf
                                                <input type="radio" checked value="negative" id="fat{{$views->id}}" name="result">
                                                <input type="radio" value="positive" id="fit{{$views->id}}" name="result">
                                                <div>

                                                </div>
                                                <div id="">
                                                    <label id="{{$views->id}}" for="fat{{$views->id}}" res="negative" class="changeres resnegative data1{{$views->id}}" style="width: 50%;float: left;
    text-align: center;" ><p class="p-3" style="font-size: 20px;color: green;">Negative</p></label>
                                                    <label res="positive" for="fit{{$views->id}}" class="changeres data2{{$views->id}}" id="{{$views->id}}" style="width: 50%;float: right;
    text-align: center;" ><p class="p-3" style="font-size: 20px;color: red;">Positive</p></label>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach

                        </tbody>
                    </table>
                </div>


                <!-- table-wrapper -->


            </div>

            <!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js">

    </script>
    <script>
        $(document).ready(function () {

            $(document).ready(function(){
                $(".changeres").click(function(){
                var id=$(this).attr('id');
                var result=$(this).attr('res');
                 var res=   $("#fat"+id).is(":checked");
                 var res2=   $("#fit"+id).is(":checked");

                 if (result=='negative')
                 {

                     $(".data1"+id).removeClass('resnegative');
                     $(".data2"+id).removeClass('resnegative');
                     $(".data1"+id).addClass('resnegative');
                 }
                 else {
                     $(".data1"+id).removeClass('resnegative');
                     $(".data2"+id).removeClass('resnegative');
                     $(".data2"+id).addClass('resnegative');
                 }

                });
            });
            $('#datatable1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]
                        }

                    }
                ]
            });
        });
    </script>








@endsection

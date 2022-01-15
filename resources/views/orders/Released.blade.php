@extends('admin.layouts.default')
@section('content')

    <link rel="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

    {{-- <link rel="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"> --}}

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
    <style>
        .br-pagebody {
            margin-top: 83px;
        }

        div#datatable1_paginate {
            display: none;
        }

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




        body input + div + div label:first-child {
            float: left;
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }
        body input + div + div label:last-child {
            float: right;
        }
        body input#fat:checked ~ div + div label:first-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }
        body input#fat:checked ~ div + div label:last-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }
        body input#fit:checked ~ div + div label:first-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }
        body input#fit:checked ~ div + div label:last-child {
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Released </h6>

                <div class="" style="width: 100%;
                        overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1">
                        <thead>
                        <tr>
                            <th class="">Order Id</th>
                            <th class="">Date</th>
                            <th class=""> Name</th>
                            <th class="">E-mail</th>
                            <th class="">Test</th>
                            <th class="">Amount</th>
                            <th class="">Status</th>
                            <th class="">Result</th>
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
                                <td>{{ $views->date }}</td>
                                <td>{{ $views->name }}</td>

                                <td>{{ $views->email }}</td>


                                <td>{{ $views->payment_amount }}$</td>
                                <td>{{ $views->test_type }}</td>
                                <td><span class="p-2" style="background-color: #adeaa8;color: white;border-radius: 5px">Released</span></td>


                                <td><span class="p-2"
                                          style="@if($views->display_status=='negative') background-color: #adeaa8;   @else   background-color: #da5920; @endif color: white;border-radius: 5px">{{ $views->display_status }}</span>
                                </td>
                                <td>
                                    <i class="fa fa-edit" data-toggle="modal" data-target="#exampleModal{{$views->id}}" style="color: #9696d0;cursor: pointer" > </i>

                                    <a href="{{url("$role/release/send/$views->id")}}">   <button
                                            class="btn btn-primary">
                                            Notify him
                                        </button></a>

                                </td>


                                <div class="modal fade" id="exampleModal{{$views->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="width: 30rem">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">  Update Release date</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{url("$role/update/date/$views->id")}}">
                                                    @csrf
                                                <lable>Release date</lable>
                                                    <input type="datetime-local" name="release_date" class="form-control" value="{{ str_replace('UTC','T',\Carbon\Carbon::parse($views->date)->format('Y-m-dTH:i')) }}" required >


                                                    <lable>Result</lable>
                                                    <select class="form-control" name="result" required>
                                                        <option @if($views->display_status=='negative') selected @endif value="negative">Negative</option>
                                                        <option @if($views->display_status=='positive') selected @endif value="positive">Positive</option>
                                                    </select>

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


                            </tr>



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

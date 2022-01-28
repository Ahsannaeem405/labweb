@extends('admin.layouts.default')
@section('content')

    {{-- <link rel="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css"> --}}
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
        .hoverclor:hover{
            background-color: #9a9adc;
            color: white;
        }


    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')



    <div class="br-mainpanel">


        <div class="br-pagebody">
            @include('partials.component')
            <div class="br-section-wrapper table-responsive">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Customers</h6>

                <div class="" style="width: 100%;
                        overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1">
                        <thead>
                        <tr>
                            <th class="">Id</th>
                            <th class=""> Name</th>
                            <th class="">E-mail</th>
                            <th class="">Address</th>
                            <th class="">Date of Birth</th>
                            <th class="">Passport</th>
                            <th class="">Gender</th>
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

                            <tr class="hoverclor">
                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $i++ }}</td>
                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->name }} {{ isset($views->show->surname) ? $views->show->surname : null  }}</td>

                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->email }}</td>
                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->address }}</td>
                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ \Carbon\Carbon::parse($views->dob)->format('m-d-Y')}}</td>
                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->passport }}</td>
                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->gender }}</td>
                                <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">
                                    @if($views->status == 'Verified')
                                        <Button class="btn btn-success">{{ $views->status }}</Button>
                                    @else
                                        <Button class="btn btn-danger">{{'Unverified' }}</Button>

                                    @endif
                                </td>
                                <td>

                                    <button data-toggle="modal" data-target="#exampleModal{{$views->id}}"
                                            @if($views->status!='Verified') disabled @endif class="btn btn-primary">
                                        Order Now
                                    </button>


                                </td>

                            </tr>

                            <div class="modal fade" id="exampleModal{{$views->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 30rem">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> order now</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url("$role/place/order/$views->id")}}">
                                                @csrf
                                                <label>Please select test category</label>
                                                <select class="form-control" name="test_type" required>
                                                    <option selected value="">Please select</option>
                                              @foreach($testList as $test)
                                                        <option selected value="{{$test->name}}">{{$test->name}}</option>

                                                    @endforeach

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
        $(document).ready(function() {
            $('.cust').click(function(){
                var id =  $(this).attr('attrr');
                var rolee =  $(this).attr('rolee');
                var url = '/'+rolee+'/create/order/customer/'+id;
                $(location).attr('href',url);

            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#datatable1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                ]
            });
        });
    </script>








@endsection

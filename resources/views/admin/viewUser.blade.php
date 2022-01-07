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

    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')

    <?php

    $view = App\Models\User::where('role', 'user')->get();

    ?>

    <div class="br-mainpanel">


        <div class="br-pagebody">
            <div class="br-section-wrapper table-responsive">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Users</h6>

                <div class="" style="width: 100%;
                    overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1">
                        <thead>
                            <tr>
                                <th class="">Id</th>
                                <th class="">First name</th>
                                <th class="">Last name</th>
                                <th class="">Start date</th>
                                <th class="">E-mail</th>
                                <th class="">Address</th>
                                <th class="">Fullname</th>
                                <th class="">Date of Birth</th>
                                <th class="">Residential</th>
                                <th class="">Detail</th>
                                <th class="">Signature</th>
                                <th class="">Signature Date</th>
                                <th class="">State</th>
                                <th class="">Postcode</th>
                                <th class="">Status</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $i = 1;

                            ?>

                            @foreach ($view as $views)

                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $views->firstname }}</td>
                                    <td>{{ $views->lastname }}</td>
                                    <td>{{ $views->created_at }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>
                                        @if (isset($views->statuss))
                                            <Button class="btn btn-success">{{ 'Verified' }}
                                            </Button>


                                        @else
                                            <button class="btn btn-danger">
                                                {{ 'Unverified' }}
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->






            </div><!-- br-section-wrapper -->
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
              columns: [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14 ]
         }

                    }
                ]
            });
        });
    </script>








@endsection

@extends('admin.layouts.default')
@section('content')
    <link href="{{asset('/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">

    <style>
        .br-pagebody {
            margin-top: 83px;
        }
    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')

    <?php

    $view = App\Models\User::where('role', 'operator')->get();

    ?>


    <div class="br-mainpanel">


        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Operator</h6>

                <div class="table-wrapper">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">#</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Email</th>
                            <th class="wd-10p">Address</th>
                            <th class="wd-10p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $i = 1;

                        ?>
                        @foreach (  $view  as   $views )

                            <tr>
                                <td>{{  $i++}}</td>
                                <td>{{  $views->name}}</td>
                                <td>{{  $views->email}}</td>
                                <td>{{  $views->address}}</td>
                                <td><a href="{{url('admin/delete/'.$views->id)}}" class="btn btn-primary"> Delete </a>
                                    <a href="{{url('admin/edit/'.$views->id)}}" class="btn btn-success"
                                       style="background-color: #00b297;border-color:#00b297"> Edit </a>
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
    <script src="{{asset('/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script>
        $(function () {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#datatable2').DataTable({
                bLengthChange: false,
                searching: false,
                responsive: true
            });

            // Select2
            $('.dataTables_length select').select2({minimumResultsForSearch: Infinity});

        });
    </script>
@endsection

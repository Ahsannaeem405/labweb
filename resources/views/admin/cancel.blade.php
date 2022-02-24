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


    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')



    <div class="br-mainpanel">


        <div class="br-pagebody">
            @include('partials.component')


            <form action="">

                <div class="form-group d-flex">
                    <input type="text" value="{{isset($_GET['q']) ? $_GET['q'] : null }}" name="q" placeholder="Search cancel record" class="form-control w-25"/>
                    <input type="submit" class="btn btn-primary ml-1" value="Search"/>
                    <a href="{{url(Request::url())}}"><input type="button" class="btn btn-danger ml-1" value="Clear"/></a>
                </div>
            </form>
            <div class="br-section-wrapper table-responsive">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Canceled Orders</h6>

                <div class="" style="width: 100%;
                        overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1" class="mt-3">
                        <thead>
                        <tr>
                            <th class="">Order Id</th>
                            <th class="">Date</th>
                            <th class=""> Name</th>
                            <th class="">E-mail</th>





                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $i = 1;

                        ?>
                        @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

                        @foreach ($customer as $views)

                            <tr>
                                <td>{{ $views->id+3000 }}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($views->order_date)->format('m-d-Y h:i A')}}
                                    </td>
                                <td>{{ $views->name }}</td>

                                <td>{{ $views->email }}</td>


                            </tr>



                        @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <p class="mt-2">  Showing      {{($customer->currentPage()-1)* $customer->perPage() + 1}} to
                            {{ ($customer->currentPage()-1)* $customer->perPage() + $customer->perPage() }} from
                            {{ $customer->total() }} entries</p>



                        <div class="float-right">{{$customer->links()}}</div>

                    </div>
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
                aaSorting: [],
                dom: 'Bfrtip',
                info:false,
                searching:false,
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                ],
                paging:false,

            });
        });
    </script>


@endsection

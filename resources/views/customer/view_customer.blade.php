@extends('admin.layouts.default')
@section('content')

    {{-- <link rel="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css"> --}}

    <link href="{{asset('/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">

    <style>
        .br-pagebody {
            margin-top: 83px;
        }
/*
        div#datatable1_paginate {
            display: none;
        } */

        table#datatable1 {
    width: 100%;
}

tr.odd {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f9f9f9;
}
td.sorting_1
{
    background-color: #f9f9f9;

}

.hoverclr:hover{
    background-color: #8b8be1;
    color: white;
}


    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')



    <div class="br-mainpanel">

        @include('partials.component')




        <div class="br-pagebody">

            <form action="">

                <div class="form-group d-flex">
                    <input type="text" value="{{isset($_GET['q']) ? $_GET['q'] : null }}" name="q" placeholder="Search Customers" class="form-control w-25"/>
                    <input type="submit" class="btn btn-primary ml-1" value="Search"/>
                    <a href="{{url(Request::url())}}"><input type="button" class="btn btn-danger ml-1" value="Clear"/></a>
                </div>
            </form>
            <div class="br-section-wrapper table-responsive">

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">EXPORT CUSTOMERS</h6>

                <div class="" style="width: 100%;
                        overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1" class="mt-3">
                        <thead>
                            <tr>
                                <th class="">Id</th>
                                <th class=""> Name</th>
                                <th class="">E-mail</th>
                                <th class="">Address</th>
                                <th class="">Date of Birth</th>

                                <th class="">Gender</th>
                                <th class="">Status</th>
                                <th class="">Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

                            <?php

                            $i = 1;

                            ?>

                            @foreach ($customer as $views)

                            {{-- <a href="{{url(''.$role.'/verify/customer/'.$views->id)}}"> --}}
                                <tr class="hoverclr" >

                                    <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">
                                        {{ $i++ }}</td>
                                    <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->name }} {{ isset($views->show->surname) ?  $views->show->secondname.' '. $views->show->surname : null  }}</td>

                                    <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->email }}</td>
                                    <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->address }}</td>
                                    <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ \Carbon\Carbon::parse($views->dob)->format('m-d-Y')}}</td>

                                    <td class="cust" attrr="{{$views->id}}" rolee="{{$role}}" style="cursor: pointer">{{ $views->gender }}</td>

                                    <td>

                                        <Button class="btn btn-danger">{{$views->status }}</Button>

                                    </td>

                                    <td>

                                        {{-- <a href="{{url(''.$role.'/edit/customer/'.$views->id)}}" > <i class="fa fa-edit"></i> </a> --}}

                                        <a href="{{url(''.$role.'/delete/customer/'.$views->id)}}" style="color: red"> <i class="fa fa-trash"></i> </a>

                                        <a href="{{url(''.$role.'/verify/customer/'.$views->id)}}"><i class="fas fa-check"></i></a>

                                    </td>

                                </tr>
                            {{-- </a> --}}
                            @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->



                <div class="row">
                    <div class="col-lg-12">

                        <p class="mt-2">  Showing      {{($customer->currentPage()-1)* $customer->perPage() + 1}} to
                            {{ ($customer->currentPage()-1)* $customer->perPage() + $customer->perPage() }} from
                            {{ $customer->total() }} entries</p>



                        <div class="float-right">{{$customer->links()}}</div>

                    </div>
                </div>


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
            $('.cust').click(function(){

                var id =  $(this).attr('attrr');
                var rolee =  $(this).attr('rolee');
                var url = '/'+rolee+'/verify/customer/'+id;
                $(location).attr('href',url);

            });
        });
    </script>

    <script>
        $(document).ready(function() {
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

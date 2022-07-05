@extends('admin.layouts.default')

@section('reporting')
    active
@endsection

@section('content')

    {{-- <link rel="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css"> --}}

    <link href="{{asset('/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">


    {{-- <link rel="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"> --}}

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
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


            <form action="">

                <div class="form-group d-flex">
                    <input type="date" value="{{isset($_GET['from']) ? $_GET['from'] : null }}" name="from"
                           class="form-control w-25"/>
                    <input type="date" value="{{isset($_GET['to']) ? $_GET['to'] : null }}" name="to"
                           class="form-control w-25 ml-2"/>
                    <input type="submit" class="btn btn-primary ml-1" value="Search"/>
                    <div class="text-center ml-1">
                        <input type="checkbox"
                               @if(!isset($_GET['no']) and !isset($_GET['yes']))  checked
                               @elseif(isset($_GET['yes'])) checked @endif  value="1" name="yes">
                        <p>With Insuance</p>

                    </div>

                    <div class="text-center ml-1">

                        <input type="checkbox"
                               @if(!isset($_GET['no']) and !isset($_GET['yes']))  checked
                               @elseif(isset($_GET['no'])) checked @endif value="1" name="no">

                        <p>Without Insuance</p>
                    </div>

                    <a href="{{url(Request::url())}}"><input type="button" class="btn btn-danger ml-1"
                                                             value="Clear"/></a>


                </div>
            </form>

            <div class="br-section-wrapper table-responsive">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">EXPORT Reports </h6>

                <div class="" style="width: 100%;
                        overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1" class="mt-3">
                        <thead>
                        <tr>
                            <th class="">Order Id</th>
                            <th class=""> First Name</th>
                            <th class=""> Middle Name</th>
                            <th class=""> Last Name</th>
                            <th class="">E-mail</th>
                            <th class="">Release date</th>
                            <th class="">Collection Date</th>
                            <th class="">Time</th>

                            <th class="">Test Type</th>
                            <th class="">Amount</th>
                            <th class="">Result</th>


                            <th class="">Insurance</th>
                            <th class="">Primary Insurance</th>
                            <th class="">Policy Holder Name</th>
                            <th class="">Relationship Patient</th>
                            <th class="">Policy Holder DOB</th>
                            <th class="">Policy member id</th>
                            <th class="">Group ID</th>

                            <th class="">Secondary Insurance</th>
                            <th class="">Policy Holder Name</th>
                            <th class="">Relationship Patient</th>
                            <th class="">Policy Holder DOB</th>
                            <th class="">Policy member id</th>
                            <th class="">Group ID</th>

                            <th class="">Address</th>
                            <th class="">Address2</th>
                            <th class="">city</th>
                            <th class="">Zip code</th>
                            <th class="">State</th>
                            <th class="">Country</th>
                            <th class="">Passport</th>
                            <th class="">Gender</th>
                            <th class="">DOB</th>

                            {{--                            <th class="">Amount</th>--}}
                            {{--                            <th class="">Test</th>--}}
                            {{--                            <th class="">Status</th>--}}
                            {{--                            <th class="">Result</th>--}}


                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $i = 1;

                        ?>
                        @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

                        @foreach ($customer as $views)

                            @php $name=explode(' ',$views->name); @endphp

                            @if(
    (!isset($_GET['yes']) && !isset($_GET['no']))
  ||    (isset($_GET['yes']) && isset($_GET['no']))
 ||  ($views->insurance && isset($_GET['yes']) )
    ||  (!$views->insurance && isset($_GET['no']))
    )



                                <tr>

                                    <td>FAM{{ $views->id+3000 }}</td>
                                    <td>{{ $views->name }}</td>
                                    <td>{{ $views->middle_name}}</td>
                                    <td>{{ $views->last_name }}</td>
                                    <td>{{ $views->email}}</td>
                                    <td>{{\Carbon\Carbon::parse($views->date)->format('m-d-Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($views->created_at)->format('m-d-Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($views->date)->format('h:i A')}}</td>

                                    <td>{{ $views->test_type }}</td>
                                    <td>${{ $views->payment_amount }}</td>
                                    <td><span class="p-2"
                                              style="@if($views->display_status=='negative') background-color: #adeaa8;   @else   background-color: #da5920; @endif color: white;border-radius: 5px">{{ $views->display_status }}</span>
                                    </td>
                                    <td>{{ isset($views->insurance->primary_ins) ? ($views->insurance->primary_ins!=null || $views->insurance->secondary_ins!=null) ? 'YES' : 'NO' : 'NO'  }}</td>

                                    <td>{{ isset($views->insurance->primary_ins) ? $views->insurance->primary_ins  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->policy_holder_name1) ? $views->insurance->policy_holder_name1  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->relationship_patient1) ? $views->insurance->relationship_patient1  : 'N/A'  }}</td>
                                    {{--                                <td>{{ isset($views->insurance->policy_holder_dob1) ? date("m-d-Y", strtotime($views->insurance->policy_holder_dob1))  : 'N/A'  }}</td>--}}
                                    <td>{{ isset($views->insurance->policy_holder_dob1) ? $views->insurance->policy_holder_dob1 : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->policy_member_id1) ? $views->insurance->policy_member_id1  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->group1) ? $views->insurance->group1  : 'N/A'  }}</td>

                                    <td>{{ isset($views->insurance->secondary_ins) ? $views->insurance->secondary_ins  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->policy_holder_name2) ? $views->insurance->policy_holder_name2  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->relationship_patient2) ? $views->insurance->relationship_patient2  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->policy_holder_dob2) ?  $views->insurance->policy_holder_dob2  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->policy_member_id2) ? $views->insurance->policy_member_id2  : 'N/A'  }}</td>
                                    <td>{{ isset($views->insurance->group2) ? $views->insurance->group2  : 'N/A'  }}</td>

                                    <td> {{ isset($views->insurance->address) ? $views->insurance->address : $views->address }}  </td>
                                    <td>{{ isset($views->insurance->address2) ? $views->insurance->address2 : $views->address2 }}</td>
                                    <td>{{ isset($views->insurance->town) ? $views->insurance->town : $views->town }}</td>
                                    <td>{{ isset($views->insurance->zip) ? $views->insurance->zip : $views->zip }}</td>
                                    <td>{{ isset($views->insurance->Province) ? $views->insurance->Province : $views->state }}</td>
                                    <td>{{ isset($views->insurance->Country) ? $views->insurance->Country : $views->country }}</td>


                                    <td>{{ $views->passport }}</td>
                                    <td>{{ $views->gender=='male' ? 'M' : 'F' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($views->dob)->format('m-d-Y')}}</td>


                                </tr>

                            @endif

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

            var date = Date.parse(new Date());
            var dateData = new Date();
            var month =  (dateData.getMonth() + 1);

            var day = dateData.getDate();
            if(month.toString().length==1){
                month='0'+month;
            }

            if(day.toString().length==1){
                day='0'+day;
            }

            var year = dateData.getFullYear().toString().slice(-2);
            //  alert(year);
            var final = '' + month + '+' + day + '+' + year + '';
            var rand=Math.floor(Math.random() * 60554);
          //  alert(rand);


            $('#datatable1').DataTable({
                aaSorting: [],
                dom: 'Bfrtip',

                searching: false,
                buttons: [
                    {
                        extend: 'csv',
                        text: 'CSV',
                        title: 'FAMILYREHAB87_Cases_' + final + '_' + rand + '',
                    }, {
                        extend: 'pdf',
                        text: 'PDF',
                        title: 'FAMILYREHAB87_Cases_' + final + '_' + rand + '',
                    },


                ],


            });
        });
    </script>








@endsection


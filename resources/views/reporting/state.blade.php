@extends('admin.layouts.default')

@section('Statereporting')
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


                    <a href="{{url(Request::url())}}"><input type="button" class="btn btn-danger ml-1"
                                                             value="Clear"/></a>


                </div>
            </form>

            <div class="br-section-wrapper table-responsive">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">EXPORT State Reports </h6>

                <div class="" style="width: 100%;
                        overflow: auto;    overflow-y: hidden!important;">
                    <table id="datatable1" class="mt-3">
                        <thead>
                        <tr>

                            <th class="">
                            RecordID|FacilityID|CLIAID|AccessionNumber|ClientID|LastName|FirstName|MiddleName|DOB|SSN|StreetAddress|City|State|Zip|County|Gender|PhoneNumber|Ethnicity|RaceWhite|RaceBlack|RaceAmericanIndianAlaskanNative|RaceAsian|RaceNativeHawaiianOrOtherPacificIslander|RaceOther|RaceUnknown|RaceNoResponse|ProviderName|NPI|Pregnant|SchoolAssociation|SchoolName|SpecimenCollectionSite|SpecimenSNOMED|SpecimenCollectedDate|SpecimenReportedDate|RapidTest|Type|ModelOrComponent|LOINC|TestName|SNOMED|Result

                            </th>







                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $i = 1;

                        ?>
                        @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

                        @foreach ($customer as $views)
                            <tr>
                                <td>
                                    FAM{{$views->id+3000}}|4919|10D2222706||{{$views->id+18910}}|{{$views->last_name}}|{{$views->name}}|{{$views->middle_name}}|{{\Carbon\Carbon::parse($views->dob)->format('m-d-Y')}}||{{$views->address}}|{{$views->town}}|{{$views->state}}|{{$views->zip}}||{{$views->gender}}|{{$views->phone}}|||||||||||||||Nasopharyngeal Swab|258500001|{{\Carbon\Carbon::parse($views->created_at)->format('m-d-Y')}}|{{\Carbon\Carbon::parse($views->date)->format('m-d-Y')}}|1|0|Abbot ID NOW|94534-5|SARS-CoV-2 RbRp Resp QL NAA+probe|{{$views->display_status=='negative' ? 260385009 : 10828004 }}|{{strtoupper($views->display_status)}}

                                </td>








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


            $('#datatable1').DataTable({
                aaSorting: [],
                dom: 'Bfrtip',

                searching: false,
                buttons: [
                    {
                        extend: 'csv',
                        text: 'CSV',
                        title: 'FamilyRehabInc_' + final + '_' + date + '',
                    }, {
                        extend: 'pdf',
                        text: 'PDF',
                        title: 'FamilyRehabInc_' + final + '_' + date + '',
                    },


                ],


            });
        });
    </script>

@endsection


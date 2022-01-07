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



    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layouts.header')

    <?php
    $user = App\Models\User::Where('role', 'user')->get();

    ?>

    <div class="br-mainpanel">


        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Users</h6>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-15p">First name</th>
                    <th class="wd-15p">Last name</th>

                    <th class="wd-15p">Start date</th>

                    <th class="wd-25p">E-mail</th>
                    <th class="wd-25p">Status </th>

                    <th class="wd-25p">User Form </th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $users )


                  <tr>
                    <td>{{$users->firstname}}</td>
                    <td>{{$users->lastname}}</td>
                    <td>{{$users->created_at}}</td>
                    <td>{{$users->email}}</td>
                    <td>


                        @if (isset($users->statuss))

                        <Button class="btn btn-danger"
                            style="margin-bottom: 10px;">Unverified </Button> <br>

                        @else
                        <Button class="btn btn-success"
                        style="margin-bottom: 10px;">Verified </Button>
                    @endif


                    </td>
                    <td>
                        <a href="{{url('admin/generate-pdf',$users->id)}}" class="btn btn-info "> Download PDF File </a>
                        {{-- <input type="button" class="btn btn-info  " value="Download PDF File" onclick="DownloadFile('Sampldsde.pdf')" /> --}}

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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/lib/datatables-responsive/dataTables.responsive.js')}}"></script>

    <script>
        $(function(){
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
          $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
      </script>

<script type="text/javascript">
    function DownloadFile(fileName) {


        //Set the File URL.
        var url = "Files/" + fileName;
        alert(url);
        //Create XMLHTTP Request.
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";
        req.onload = function () {
            //Convert the Byte Data to BLOB object.
            var blob = new Blob([req.response], { type: "application/octetstream" });

            //Check the Browser type and download the File.
            var isIE = false || !!document.documentMode;
            if (isIE) {
                window.navigator.msSaveBlob(blob, fileName);
            } else {
                var url = window.URL || window.webkitURL;
                link = url.createObjectURL(blob);
                var a = document.createElement("a");
                a.setAttribute("download", fileName);
                a.setAttribute("href", link);
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            }
        };
        req.send();
    };
</script>
@endsection

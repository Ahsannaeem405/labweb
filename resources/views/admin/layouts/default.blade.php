<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title></title>

    <!-- vendor css -->
    <link href="{{asset('/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <link href="{{asset('/lib/highlightjs/github.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('/lib/Ionicons/css/ionicons.css" rel="stylesheet')}}"> --}}
    <link href="{{asset('/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/chartist/chartist.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('/css/bracket.css')}}">

      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>





  </head>

  <body>

@yield('content')
{{--
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('/lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/lib/datatables-responsive/dataTables.responsive.js')}}"></script> --}}


<script src="{{asset('/lib/highlightjs/highlight.pack.js')}}"></script>

<script src="{{asset('/lib/select2/js/select2.min.js')}}"></script>

    {{-- <script src="{{asset('/lib/jquery/jquery.js')}}"></script> --}}
    <script src="{{asset('/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('/lib/moment/moment.js')}}"></script>
    <script src="{{asset('/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{asset('/lib/peity/jquery.peity.js')}}"></script>
    <script src="{{asset('/lib/chartist/chartist.js')}}"></script>
    <script src="{{asset('/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('/lib/d3/d3.js')}}"></script>
    <script src="{{asset('/lib/rickshaw/rickshaw.min.js')}}"></script>


    <script src="{{asset('/js/bracket.js')}}"></script>
    <script src="{{asset('/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('/js/dashboard.js')}}"></script>
    <script src="{{asset('/js/widgets.js')}}"></script>

    <script src="{{asset('/lib/chart.js/Chart.js')}}"></script>

    {{-- <script src="{{asset('/js/chart.chartjs.js')}}"></script> --}}
    {{-- <script src="{{asset('/js/chart.chartist.js')}}"></script> --}}

    <script>
      $(function(){
        'use strict'

          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>

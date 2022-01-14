<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #sig-canvas {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
        }

    </style>
</head>

<body>

    <button class="appSign">
        Submit

    </button>


    <!-- Content -->
    <div class="container app">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.appSign').click(function() {


                $.ajax({
                    type: "GEt",
                    url: "{{ url('append/signature') }}",
                    success: function(res) {


                        $('.app').empty().append(res);


                    }
                });

            });


        });
    </script>

</body>

</html>

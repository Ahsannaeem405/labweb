
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Report</title>
</head>
<style>
    body{
        background-color: #F4F5F7;
    }
    .fa-building{
        color: #9CA3AF;
    }
    .fa-check-circle{
        color:green;
    }
    .img_logo{
        width: 80%;
        /* height: 168px; */
    }
    .img_logo2{
        width: 100%;
    }
    .box{
        border-radius: 8px;
        box-shadow: rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 10%) 0px 1px 3px 0px, rgb(0 0 0 / 6%) 0px 1px 2px 0px;
    }
    .text_gray{
        color: #435D6B;
        font-weight: 600;
    }
    .btn-success{
        background-color: lightgreen !important;
        color: green !important;
        border: none;
    }
    .logo1{
        display: none;
    }
    @media only screen and (max-width: 426px){
        .logo1{
            display: block;
        }
        .logo2{
            display: none;
        }
    }

</style>
<body>


<div class="container">
    <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-12 text-center logo1">
            <img src="{{asset('assets/qrcode.png')}}" class="img_logo2" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-2 ">
            <h4>Results Verification Page</h4>
            <h4 class="mt-5">Order #{{$report->order_id}}</h4>
            <p><i class="far fa-building"></i> Miami International Airport &nbsp;@if($report->step==5)  <i class="fas fa-check-circle"></i> Released @endif </p>
        </div>
        <div class="col-lg-6 col-md-6 col-12 text-center logo2 mt-2">
            <img src="{{asset('assets/qrcode.png')}}" class="img_logo" alt="">
        </div>
    </div>
</div>

<div class="container box bg-white">
    <div class="row">
        <div class="col-12 p-3">
            <h5>Order Information</h5>
            <hr>
        </div>
        <div class="col-lg-4 col-md-6 col-12 pt-2">
            <p class="text_gray">Test Name</p>
            <h6>{{$report->test_type}}</h6>
        </div>
        <div class="col-lg-4 col-md-6 col-12 pt-2">
            <p class="text_gray">Price</p>
            <h6>${{$report->payment_amount}}</h6>
        </div>
        <div class="col-lg-4 col-md-6 col-12 pt-2">
            <p class="text_gray">Testing Platform</p>
            <h6>ABBOTT IDNOW</h6>
        </div>


        <div class="col-lg-4 col-md-6 col-12 pt-2">
            <p class="text_gray">Collection Date</p>
            <h6>{{\Carbon\Carbon::parse($report->created_at)->format('Y-m-d g:i A')}}</h6>
        </div>
        <div class="col-lg-4 col-md-6 col-12 pt-2">
            <p class="text_gray">Results Date</p>
            <h6>{{\Carbon\Carbon::parse($report->result_date)->format('Y-m-d g:i A')}}</h6>
        </div>
        <div class="col-lg-4 col-md-6 col-12 pt-2">
            <p class="text_gray">Release Date</p>
            <h6>{{\Carbon\Carbon::parse($report->date)->format('Y-m-d g:i A')}}</h6>
        </div>
        <div class="col-lg-4 col-md-6 col-6 pt-2">
            <p class="text_gray">Results</p>
            <p class="text_gray">{{$report->test_type}}</hp>
        </div>
        <div class="col-lg-4 col-md-6 col-6 pt-4 mb-5">
            @if($report->display_status==null)
                <button class="btn btn-danger">{{'pending'}}</button>

            @else

            <button class="btn     @if($report->display_status=='negative') btn-success @else btn-danger  @endif">{{$report->display_status}}</button>

                @endif
        </div>

    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

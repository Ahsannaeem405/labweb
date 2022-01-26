@extends('admin.layouts.default')
@section('content')

    @include('admin.layouts.sidebar')

    @include('admin.layouts.header')
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        .border_div {
            border: 1px solid gray;
            border-radius: 5px;
        }

        @media only screen and (max-width: 375px) {
            .a_tag {
                font-size: 13px;
            }
        }

    </style>

    @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            @include('partials.component')

            <div class="row">
                <div class="col-12 pt-2">
                    <a href="{{ url("$role/customers") }}"><i class="fas fa-chevron-left"></i> Back to Customer List</a>
                </div>
                <div class="col-lg-3 col-md-6 pt-2 text-dark">

                    <div class="row">


                        <div class="col-xl-3  col-lg-5 col-3">
                            <i class="fas fa-user-circle" style="font-size: 68px;"></i>

                        </div>
                        <div class="col-xl-9 col-lg-7  col-6">

                            <h6 style="text-transform: uppercase;">{{ $cus->name }} {{$cus->show->surname}}</h6>
                            <span>#{{$rand}}{{ $cus->id }}</span>
                            <p><span class="text-bold">{{ $cus->gender }}</span> Born on <span
                                    class="text-bold">{{ $cus->dob }}</span></p>

                        </div>


                    </div>
                </div>
                <div class="col-lg-9 col-md-6 pt-2 text-dark" style="   text-align:end; margin-top: 38px;">
                    <a href="{{ url("$role/edit/customer/$cus->id") }}">
                        <button class="btn btn-secondary">Edit
                            Customer
                        </button>
                    </a>
                    <a href="{{ url("$role/place/order/new/$cus->id") }}">
                        <button class="btn btn-primary">Place
                            Order
                        </button>
                    </a>
                </div>
                <div class="col-lg-12 col-12 pt-3 text-dark">
                    <div class="row" style="padding-left: 15px;">

                        <div class="col-lg-3 col-md-4 col-12">
                            <p><i class="far fa-envelope"></i> {{ $cus->email }}</p>
                        </div>
                        <div class="col-lg-2 col-md-4 col-12">
                            <p><i class="fas fa-mobile-alt "></i> {{ $cus->phone }}</p>
                        </div>
                        <div class="col-lg-2 col-md-4 col-12">
                            <p>
                                <i class="fas fa-map-marker-alt "></i> {{ $cus->show->address}} {{$cus->show->address2}} {{$cus->show->Province}} {{$cus->show->Country}} {{$cus->show->zip}}
                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-12 pt-2 text-dark text-right">


                </div>
            </div>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">

            <div class="row">
                <div class="col-lg-8 col-12">


                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5 style="color:black">Order</h5>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($order as $orders)
                                    {{-- @dd($orders->test_type ) --}}

                                    @if ($orders->main_status == 'user' and $orders->duplicate != 2)
                                        @if (isset($orders->show->Select_the_test))


                                            <tr>
                                                <td style="color: black">
                                                    <a href="{{ url("/$role/customer/view/order/$orders->id/$cus->id" ) }}">
                                                        <button><i class="fa fa-info-circle p-1"></i>Detail</button>
                                                        </i>
                                                    </a>
                                                </td>


                                                <td style="color: black" attrr="{{ $orders->id }}" rolee="{{ $role }}">
                                                    #
                                                </td>


                                                <td style="color: black" attrr="{{ $orders->id }}" rolee="{{ $role }}">

                                                    {{ $orders->show->Select_the_test }}


                                                </td>
                                                <td style="color: black" attrr="{{ $orders->id }}" rolee="{{ $role }}">
                                                    @if (isset($orders->show->created_at))
                                                        {{ $orders->show->created_at }}
                                                    @endif


                                                </td>

                                                <td>
                                                    <a onclick="return confirm('Are you sure you want to approve this item?');"
                                                       href="{{ url("$role/order/approve/$orders->id/$cus->id") }}"
                                                       class="btn btn-secondary Draft">{{ 'Draft' }}</a>
                                                </td>

                                                <td attrr="{{ $orders->id }}" rolee="{{ $role }}">
                                                    @if ($orders->display_status == null)
                                                        <a disabled
                                                           onclick="return confirm('Are you sure you want to delete this item?');"
                                                           href="{{ url("$role/order/cancel/$orders->id") }}"
                                                           class="a_tag"
                                                           style="color: blue;text-decoration: underline">Cancel</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url("/$role/customer/view/order/$orders->id/$cus->id" ) }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif

                                    @elseif($orders->duplicate != 2)
                                        <tr>

                                            <td>
                                                <a href="{{ url("/$role/customer/view/order/$orders->id/$cus->id" ) }}">
                                                    <button><i class="fa fa-info-circle p-1"></i>Detail</button>
                                                    </i>
                                                </a>
                                            </td>

                                            <td style="color: black" class="cust" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">#{{ $orders->id+3000 }} </td>


                                            <td style="color: black" class="cust" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">
                                                {{ $orders->test_type }}
                                            </td>
                                            <td style="color: black" class="cust" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">
                                                {{ $orders->order_date }}</td>

                                            <td style="color: black" class="cust" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">
                                                @if ($orders->display_status == null)
                                                    <button class="btn btn-warning">{{ 'pending' }}</button>

                                                @else

                                                    <button
                                                        class="btn     @if ($orders->display_status == 'negative') btn-success @else btn-danger  @endif">{{ $orders->display_status }}</button>

                                                @endif
                                            </td>


                                            <td class="cust" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">
                                                @if ($orders->display_status == null) <a
                                                    disabled
                                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                                    href="{{ url("$role/order/cancel/$orders->id") }}"
                                                    class="a_tag"
                                                    style="color: blue;text-decoration: underline">Cancel</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url("/$role/customer/view/order/$orders->id/$cus->id", ) }}">
                                                    <i class="fa fa-arrow-right" aria-hidden="true">
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>

                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>


                    </div>


                    <br>

                    <div class="card bd-0 shadow-base p-3">
                        <div class="row">
                            <div class="col-12">
                                <h5 style="color:black">Invoices</h5>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($order as $orders)
                                    @if ($orders->step > 1 && $orders->display_status != 'Canceled')
                                        <tr>

                                            <td style="color:black" class="invoi" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">#{{ $orders->id+3000 }}
                                                <span> - </span>
                                                <span><i class="fas fa-calendar-minus"></i>
                                            </td>
                                            <td style="color:black" class="invoi" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">{{ $orders->payment_date }}</td>

                                            <td style="color:black"
                                                rolee="{{ $role }}">
                                                @if ($orders->step > 2)
                                                    <button class="btn btn-success">Paid</button>

                                                @else
                                                    <button data-toggle="modal"
                                                            data-target="#exampleModal{{$orders->id}}"
                                                            class="btn btn-primary">
                                                        Pay Now
                                                    </button>

                                                @endif
                                            </td>
                                            <td style="color:black" class="invoi" attrr="{{ $orders->id }}"
                                                rolee="{{ $role }}">
                                                <p style="    font-size: 18px;"> ${{ $orders->payment_amount }}</p>
                                            </td>
                                            <td>
                                                <a href="{{ url("/$role/customer/view/invoice/$orders->id/$cus->id") }}">
                                                    <i class="fa fa-arrow-right" aria-hidden="true">
                                                    </i>
                                                </a>

                                            </td>
                                        </tr>


                                        <div class="modal fade" id="exampleModal{{$orders->id}}" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" style="width: 30rem">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"> Pay now</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post"
                                                              action="{{url("$role/pay/invoice/$orders->id")}}">
                                                            @csrf
                                                            <label>Please select Payment Method</label>
                                                            <select class="form-control" name="payment_method" required>
                                                                <option selected value="">Please select</option>
                                                                <option value="card">card</option>
                                                                <option value="cash">cash</option>
                                                                <option value="others">others</option>
                                                            </select>
                                                            <lable>Please enter Amount</lable>
                                                            <input type="number" name="payment_amount" value="{{$orders->priceList->price}}"
                                                                   required min="1" class="form-control"
                                                                   placeholder="Please enter amount">

                                                            <lable>Payment detail</lable>

                                                            <textarea class="form-control" name="payment_detail" id=""
                                                                      cols="10" rows="5"
                                                                      placeholder="payment detail"></textarea>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>


                    </div>


                </div>
                <div class="col-lg-4 col-12">


                    <div class="card bd-0 shadow-base p-3">
                        <div class="row" style="height: 300px;overflow: auto">
                            <div class="col-12">
                                <p style="    font-size: 20px;color: black;">Documents</p>

                            </div>
                            @foreach ($document as $documents)
                                <div class="w-100 p-1 m-1" style="background-color: white"> <span class="mt-1"
                                                                                                  style="color: black;padding: 7px;"> @if (isset($documents->path))
                                            <i class="fa fa-file-text-o" style="    font-size: 15px;color: black;"></i>

                                            {{ 'Smartwaiver Consent.pdf' }} @endif </span>


                                    <a href="{{ asset("uploads/stock/$documents->path") }}" target="_blank"> <span
                                            class="p-1" style="color: black;float: right"><i
                                                class="fa fa-search"></i></span>
                                    </a>
                                    <a href="{{ url("$role/delete/document/$documents->id") }}"
                                       onclick="return confirm('Are you sure you want to delete this item?');"><span
                                            class="p-1" style="color: black;float: right;color: red"><i
                                                class="fa fa-trash"></i></span></a>
                                    <a href="{{ asset("uploads/stock/$documents->path") }}" download> <span
                                            class="p-1" style="color: black;float: right">download</span> </a>


                                </div>

                            @endforeach

                            <form class="w-100" action="{{ url("$role/upload/document/$cus->id") }}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <lable class="ml-2 mt-5 font-weight-bold">Upload Document</lable>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-8 pt-2" style="padding: 0px">
                                            <input type="file" name="file" required class="form-control">

                                        </div>
                                        <div class="col-2 pt-2 text-right">
                                            <button type="submit" class="btn btn-success">Submit</button>

                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>

                    </div>
                    <div class="card bd-0 shadow-base p-3 mt-2" style="    height: 300px;overflow: auto">
                        <div class="row">
                            <div class="col-12">
                                <p style="font-size: 18px;
                                color: black;">Events Timeline</p>
                            </div>


                            <div class="col-7 pt-2">
                                <i class="far fa-user-circle" style="    font-size: 22px;"></i> &nbsp; <span>New Patient Created</span>
                            </div>
                            <div class="col-5 pt-2">
                                <p>{{ $cus->created_at }}</p>
                            </div>

                            @foreach ($order as $orders)
                                @if ($orders->order_id != null)
                                    <div class="col-7 pt-2">
                                        <i class="far fa-user-circle" style="    font-size: 22px;"></i>&nbsp; Order
                                        #{{ $orders->id+3000 }} - created
                                    </div>
                                    <div class="col-5 pt-2">
                                        <p>{{ $orders->created_at }}</p>
                                    </div>


                                    @if ($orders->payment_date != null)
                                        <div class="col-7 pt-2">
                                            <i class="far fa-user-circle" style="    font-size: 22px;"></i> &nbsp; Order
                                            #{{ $orders->id+3000 }} - Invoice paid
                                        </div>
                                        <div class="col-5 pt-2">
                                            <p>{{ $orders->payment_date }}</p>
                                        </div>
                                    @endif

                                    @if ($orders->date != null)
                                        <div class="col-7 pt-2">
                                            <i class="far fa-user-circle" style="    font-size: 22px;"></i>&nbsp; Order
                                            #{{ $orders->id+3000 }} - Released
                                        </div>
                                        <div class="col-5 pt-2">
                                            <p>{{ $orders->date }}</p>
                                        </div>
                                    @endif
                                @endif

                            @endforeach

                            {{-- item 2 --}}
                            {{-- <div class="col-7 pt-2"> --}}
                            {{-- <i class="fas fa-folder"></i> New Patient Created --}}
                            {{-- </div> --}}
                            {{-- <div class="col-5 pt-2"> --}}
                            {{-- <p>Jan 05 12:00 PM</p> --}}
                            {{-- </div> --}}
                        </div>

                    </div>
                </div>


            </div>


        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





    <script>
        $(document).ready(function () {
            $('.cust').click(function () {

                var id = $(this).attr('attrr');
                var cus = {{$cus->id}};
                var rolee = $(this).attr('rolee');
                var url = '/' + rolee + '/customer/view/order/' + id + '/' + cus;
                $(location).attr('href', url);

            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.invoi').click(function () {

                var id = $(this).attr('attrr');
                var cus = {{$cus->id}};

                var rolee = $(this).attr('rolee');
                var url = '/' + rolee + '/customer/view/invoice/' + id + '/' + cus;
                $(location).attr('href', url);

            });
        });
    </script>




@endsection

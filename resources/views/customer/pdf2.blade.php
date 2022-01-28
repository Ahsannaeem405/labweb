<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
</head>
<body>




    <table class="table" style="width: 100%;padding:30px">
        <thead>
          <tr>
            <th scope="col" style="width: 50%"><img src="{{asset('assets/qrcode.png') }}" alt="" style="width: 92%;height: 157px;"></th>
            <th scope="col" style="width: 50%;    text-align: end;  color: darkgray;  padding-top: 30px;">

                <span style="font-size: 40px;font-weight:inherit;text-align: end;color: darkgray;">INVOICE</span> <br>
                <h3 style="font-size: 17px;font-weight:inherit;text-align: end;    margin-bottom: 3px;"> {{ \Carbon\Carbon::parse($order_detail->payment_date)->format('m-d-Y h:i A')}} </h3>
                <span style="font-size: 17px">Invoice#:{{$order_detail->id + 3000}}</span>

            </th>


          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">
              <h3 style="margin-bottom:0px">FROM: </h3>



               <p style="font-size: 17px;padding-left: 25px;color: gray;">

                <p  style="margin: 0px">  PORTOFINO IV CENTER</p>

                <p style="margin: 0px"> 901-A SW 87 AVE</p>

                <p style="margin: 0px;font-weight: bold">  MIAMI, FL 33174</p>
                <p style="margin: 0px;font-weight: bold"> TEL: 305-225-6266</p>
                <p style="margin: 0px;font-weight: bold">   FAX: 305-225-6296</p>
                <p style="margin: 0px;font-weight: bold">  INFO@FAMILYREHAB.US</p>


                </p>

                            </p>

                        </td>


            <td scope="row" style="padding-left: 50px;"><h3 style="">TO: </h3>
                <p style="font-size: 17px;padding-left: 25px;color: gray;"> {{ $order_detail->name }} <br> {{ $order_detail->email }}
                    <br>
                    {{$cus->address}} {{ isset($cus->show->surname) ? $cus->show->address2 .$cus->show->Province .$cus->show->Country .$cus->show->zip : null}}
                </p>
            </td>


          </tr>

          <tr>

            <td scope="row" colspan="2"><h3 style="padding-top: 10px">Terms <br>
Due
            </h3></td>


          </tr>

        </tbody>
      </table>



      <table class="table" style="width: 100%;border-collapse: collapse;">

        <tbody>
          <tr>
            <td class="td_border th_bold" style="width: 70%;">Item Description</td>
            <td class="td_border th_bold" >Quantity</td>
            <td class="td_border th_bold" >Price</td>
            <td class="td_border th_bold" >Amount</td>
          </tr>

          <tr>
            <td class="td_border" style="color: red;text-align:left;">{{ $order_detail->test_type }}</td>
            <td class="td_border">1</td>
            <td class="td_border">${{ $order_detail->payment_amount }}</td>
            <td class="td_border">${{ $order_detail->payment_amount }}</td>
          </tr>
          <tr>
<td></td>

            <td colspan="2" class="th_bold td_border" style="text-align: right">Sub Total</td>
            <td class="td_border">${{ $order_detail->payment_amount }}</td>
          </tr>

          <tr>
            <td></td>

                        <td colspan="2" class="th_bold td_border" style="text-align: right">Tax</td>
                        <td class="td_border"></td>
                      </tr>


            <tr>
                <td>  </td>

                            <td colspan="2" class="td_border th_bold" style="text-align: right">Discount</td>
                            <td class="td_border"></td>
                          </tr>



                <tr>
                    <td></td>

                                <td colspan="2" style="text-align: right" class="th_bold td_border">Total</td>
                                <td class="td_border">{{ $order_detail->payment_amount }}</td>
                              </tr>

                            </tbody>
                        </table>





            <h3 class="txt_bold" style="font-size: 41px;margin:2px;padding-top: 8px;">Notes</h3>












      <table class="table" style="width: 100%;border:3px solid black">

        <tbody>
          <tr>

<td >PROCEDURE CODE INTEGAN:{{$order_detail->priceList->procedure}} </td>
<td>PROCEDURE CODE INTEGAN: INTEGAN:6666 </td>
          </tr>
          <tr>
            <td>ICD-ID:Z1122 </td>
            <td>ICD-ID:8888 </td>
                      </tr>
                      <tr>
                        <td>TAX-ID: </td>
                        <td>TAX-ID: </td>
                                  </tr>
                                  <tr>
                                    <td>NPI: </td>
                                    <td>NPI: </td>
                                              </tr>
        </tbody>
      </table>














<style>
.th_bold{
    font-weight: 800;font-size: 16px;
}
.td_border{
border:1px solid black;text-align:center;
}
    tr.border_bottom td {
        border-bottom: 3px solid black;
      }
      tr.border_top td {
        border-top: 3px solid black;
      }
.undr_lin{
    border-bottom: 1px solid black;
}
.txt_bold{
    font-weight: bolder
}
.t_p{
    padding-top: 16px;
}
</style>






    <table class="table" style="width: 100%">
        <thead>
          <tr>
            <th scope="col" style="width: 80%;text-align: right;"></th>
            <th scope="col"  style="width: 30%" >
                <p style="padding-top: 29px;">
                    inti Fernandez M.D.       PORTOFINO IV CENTER 901-A SW 87 AVE MIAMI, FL 33174
                </p>
            </th>


          </tr>
        </thead>

      </table>






<script>
    window.onload = function () {
        window.print();
        setTimeout(window.close, 0);
    }
</script>





</body>
</html>

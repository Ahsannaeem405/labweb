<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <link href="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8">
</head>
<body>



    <table class="table" style="width: 100%;margin-bottom: 30px;">
        <thead>
          <tr>
            <th style="text-align: right;padding-right: 100px;">
                <img class="text-center" src="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl={{$host}}&choe=UTF-8" title="ACD Deposit Address" />


          </tr>
        </thead>

      </table>


    <table class="table" style="width: 100%">
        <thead>
          <tr>
            <th scope="col" style="width: 50%">
                <img src="{{asset('https://communitel-covid-tests.ue.r.appspot.com/images/communitel-header-without-address-gray.png')}}" alt="" style="width: 100%;height:250px;">


            </th>
            <th scope="col" style="width: 50%"><p style="font-size: 22px;font-weight:inherit">MIAMI INTERNATIONAL AIRPORT
                2100 NW 42 AVE
                MIAMI, FLORIDA 33126</p>

                <h3 style="font-size: 30px">TEL: 305-869-1161</h3>
                <h3 style="font-size: 30px">FAX: 305-869-1167</h3>

            </th>


          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" colspan="2" ><h3 style="padding-top: 20px">CLIA: <span style="border-bottom: 1px solid black;">{{$customer->id}}</span></h3></th>



          </tr>
          <tr>

            <td scope="row" colspan="2"><h3 style="padding-top: 10px">CLINICAL LABORATORY REPORT</h3></td>


          </tr>

        </tbody>
      </table>






      <table class="table" style="width: 100%">

        <tbody>
          <tr>
            <td>Account# <span class="undr_lin">1659461101</span></td>
            <td>REFER# <span class="undr_lin">88611</span></td>
            <td style="padding-left: 40px">PASSPORT# <span class="undr_lin">{{$customer->passport}}</span></td>

          </tr>
          <tr>
            <td scope="row">INTI FERNANDEZ MD</td>
            <td colspan="2">PATIENT: <span class="undr_lin">{{$customer->name}}</span></td>

          </tr>
          <tr>
            <td>2100 NW 42 AVE</td>
            <td>DOB: <span class="undr_lin">{{$customer->dob}}</span></td>
            <td style="padding-left: 40px">SEX: <span class="undr_lin">{{$customer->gender}}</span></td>
          </tr>
          <tr>
            <td colspan="2">MIAMI, FLORIDA 33126</td>
            <td>ORDER#: <span class="undr_lin">{{$customer->order_id}}</span></td>
          </tr>

          <tr>
            <td colspan="2">TEL: 305-869-1161 FAX: 305-869-1167</td>
            <td>COLLECTED: <span class="undr_lin">{{$customer->created_at}} </span></td>
          </tr>

          <tr>
            <td colspan="2">DOCTOR: INTI FERNANDEZ MD</td>
            <td>REPORTED: <span class="undr_lin">{{$customer->date}} </span></td>
          </tr>


          <tr class="border_bottom border_top">
            <td colspan="2" class="txt_bold">Description</td>
            <td class="txt_bold">Result</td>
          </tr>

          <tr>
            <td colspan="2"> <span class="txt_bold"> Method: </span>{{$customer->test_type}}</td>
            <td><span class="txt_bold">Testing Platform:</span> ABBOTT IDNOW</td>
          </tr>


          <tr>
            <td colspan="3">
               <span class="t_p"> <span class="txt_bold">Procedure:</span> NAAT - RNA </span>
            </td>

          </tr>


          <tr>
            <td colspan="2"><span class="t_p"><span class="txt_bold">Specimen Type:</span> Nasopharyngeal Swab</span></td>
            <td><span class="t_p"><span class="txt_bold" style=" text-transform: uppercase;">{{$customer->display_status}}</span> for {{$customer->test_type}}</span></td>
          </tr>

          <tr>
            <td colspan="3" class="t_p" style="font-size: 17px">
                This test has been performed following RT-PCR - Abbott ID Now methodology. This test has been
                authorized by FDA. This test has been validated in accordance with the FDA's Guidance Document
                (Policy for diagnostics testing in laboratories certified to perform testing under CLIA waiver prior
                to Emergency Use Authorization for coronavirus Disease-2019 during the public health
                Emergency)
            </td>

          </tr>



        </tbody>
      </table>

<style>

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
            <th scope="col" style="width: 80%;text-align: right;"> <img src="https://signaturely.com/wp-content/uploads/2020/04/unreadable-letters-signaturely.svg" style="width: 50%;height:150px;"> </th>
            <th scope="col"  style="width: 30%" >
                <p style="padding-top: 29px;">
                    inti Fernandez M.D. Miami International Airport Ground Level Miami,FL 33142
                </p>
            </th>


          </tr>
        </thead>

      </table>












</body>
</html>

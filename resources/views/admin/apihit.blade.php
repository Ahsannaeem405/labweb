<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBOLi3SFcaV2UKrQXxAWbIlNeKEzadbo0A"></script>



    <input type="text" name="" id="search_input" placeholder="Type address">


    <button class="btn btn-primary" id="Apihit">Api Hit</button>




    {{--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js" ></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="http://requirejs.org/docs/release/2.1.5/comments/require.js"></script> --}}

    <script>
        $("#Apihit").click(function() {

        const axios = require('axios');

        // api endpoint
        const apiEndpoint = 'https://dev.bronid.com/createUser';

        // request body
        const createUserData = {
            "metadata_version": "4",
            "metadata_serviceUid": "XL7ULiU6B4QE9Y2iWFZnhtMDKFN2",
            "metadata_secretKey": "api_sec_NJAtNcRtUrPlf7xYDrMNP9URI-ZfN314",

            "fields": {
                "country": "AUS",
                "email": "yourUserEmailAccount@email.com",
                "companyName": "Company Pty Ltd",
                "companyNumber": "123456789",
                "firstName": "Contact",
                "lastName": "Person",
                "FCL": "123456789",
                "regulatoryNumber": "123456789"
            }
        };

        // submit the user data to the bronID API
        axios
            .post(apiEndpoint, createUserData)
            .then(res => {
                // save the userId
                console.log('click the results to expand them');
                console.log(JSON.stringify(res.data, null, 2));
            })
            .catch(error => {
                console.log('error! click the results to expand them');
                console.log(JSON.stringify(error.response.data, null, 2));
            })


        });
    </script>


<script>
    var searchInput = 'search_input'; 
    $(document).ready(function () {
     var autocomplete;
     autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
      types: ['geocode'],
      /*componentRestrictions: {
       country: "USA"
      }*/
     });
      
     google.maps.event.addListener(autocomplete, 'place_changed', function () {
      var near_place = autocomplete.getPlace();
     });
    });
    </script>

</body>
</html>

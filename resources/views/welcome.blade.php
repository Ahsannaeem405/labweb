<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
</head>
<style>
    body {
        color: #33446F;
    }

    .img-logo {
        width: 80%;
    }

    .heading h4 {
        color: #33446F !important;
    }

    .Minor_form2 {
        display: none;
    }

    .row {
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        margin-top: 4rem;
    }

    .btn-dark {
        min-width: 80% !important;
    }

    .adult {
        display: none;
    }

    .paragraph p {
        margin-top: 2px;
    }

    .adultform {
        display: none;
    }

    h1 {
        font-size: 2rem !important;
    }

    .minors {
        display: none;
    }

    .minors1 {
        display: none;
    }

    .minors22 {
        display: none;
    }


    .Minor_div {
        display: none;
    }

    .minors51 {
        display: none;
    }


    .Minor_form {
        display: none;
    }

    .minorsandadult1 {
        display: none;
    }

    .ma_div {
        display: none;
    }

    .adultorminor {
        display: none;
    }

</style>

<body>
    <div class="container p-5">
    @include('partials.component')
        <div class="row p-3">
            <div class="col-lg-6  col-12 pt-5 text-right">
                <img src="{{ asset('assets/images/logo-removebg-preview.png') }}" class="img-logo" alt="">
            </div>
            <div class="col-lg-6  col-12 pt-5 heading">
                <div class="pt-4">
                    <h4>MIAMI INTERNATIONAL</h4>
                    <h4>AIRPORT</h4>
                    <h4>2100 NW 42 AVE</h4>
                    <h4>MIAMI FLORIDA 33126</h4>
                    <h4>TEL:305-869-1161</h4>
                    <h4>FAX:305-869-1161</h4>
                </div>


            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="row  p-4">
            <div class="col-12">
                <p>Por favor lea el siguiente documento cuidadosamente y firme:</p>
                <div class="paragraph pl-3">
                    <p>a. Yo autorizo a este Centro de pruebas Covid-19 "Family Rehab/ Communitel," a adquirir una
                        muestra nasofaringea y a examinar la muestra para la detección del Covid-19 como requieren las
                        agencias de salud pública.</p>
                    <p>b. Yo autorizo que mis resultados sean comunicados a cualquier agencia de gobierno o como
                        requiera la ley. También autorizo la comunicación de mis resultados positivos a las aerolineas y
                        cruceros como es requerido por el Gobierno del Condado de Miami-Dade. Esta autorización es
                        vigente por el periodo de un (1) año desde el dia en que fue firmado.
                    </p>
                    <p>c. Entiendo que un resultado positivo es una indicación de que debo hacer una cuarentena, ponerme
                        máscara o cubrirme la cara para no infectar a otros</p>
                    <p>d. Yo entiendo que este laboratorio no está actuando como mi médico, y no reemplaza la necesidad
                        del cuidado de un médico cuando sea requerido También acepto la responsabilidad de mis
                        resultados y lo que significan. Yo estoy de acuerdo con obtener una consulta médica con mi
                        medico para aclarar cualquier inquietud que tenga, adquirir cuidado/tratamiento si mi condición
                        empeora.</p>
                    <p>e. Entiendo que igual que otros procedimientos de diagnóstico, existe una posibilidad de un falso
                        positivo o un falso negativo en la prueba de Covid-19
                    </p>
                    <p>f. Yo entiendo que "Family Rehab y Communitel," no son de ninguna manera responsables si at
                        cliente/paciente no llega a tiempo a su vuelo/lo pierde o es puesto en cuarentena al llegar a su
                        destino. Entiendo que la responsabilidad de escoger el tipo de prueba necesaria para mi destino
                        es mia y solo mia.</p>
                    <p>g. Yo entiendo y acepto que "Family Rehab y Communitel" no proveen cancelaciones o devoluciones
                        una vez que la prueba ha sido administrada:</p>
                    <p>Yo, el paciente/cliente; he sido informado del propósito de la prueba, los procedimientes, fos
                        posibler beneficios y riesgos También ha recibido una copia de este consentimients Se me ha dado
                        la oportunidad de hacer preguntas antes de firmar Yo acepto esta prueba de Covid-19
                        voluntariamente, para mis necesidades personales, de negocios o de viajes</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="row p-5">
            <div class="col-12 text-center">
                <h1>Por favor seleccione quién participará ...</h1>
            </div>


            <div class="col-lg-4  col-12 pt-2 p-0 text-center">
                <button class="btn btn-dark adult_btn">Adulto</button>
            </div>
            <div class="col-lg-4  col-12 pt-2 p-0  text-center">
                <button class="btn btn-dark  minor_button1">Menores</button>
            </div>

            <div class="col-lg-4  col-12 pt-2 p-0  text-center">
                <button class="btn btn-dark  minor_button">Adulto y menores</button>
            </div>

            {{-- adults buttons --}}
            <div class="col-lg-2 offset-lg-1 col-12 minors  pt-2 text-center">
                <button class="btn btn-dark  minors2  minor_btn" att="1">1 Minor</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="2">2 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="3">3 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="4">4 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minor_btn" att="5">5 Minors</button>
            </div>
            <div class="col-lg-2 offset-lg-1 col-12 minors  pt-2 text-center">
                <button class="btn btn-dark  minors2 minors22 minor_btn" att="6">6 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="7">7 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="8">8 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="9">9 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors  text-center">
                <button class="btn btn-dark   minors2 minors22 minor_btn" att="10">10 Minors</button>
            </div>

            <div class="col-lg-12  col-12  minors  text-center">
                <div class="row" style="box-shadow: none;">
                    <div class="col-lg-2 offset-lg-5">
                        <button class="btn btn-dark minor_btn minors2 minors222">More Minors</button>

                    </div>
                </div>


            </div>

            {{-- minoor buttons --}}

            <div class="col-lg-2 offset-lg-1 col-12 minors1 pt-2 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="1">1 Minor</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="2">2 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors5   minororad_btn" att="3">3 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors5  minororad_btn" att="4">4 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors5  minororad_btn" att="5">5 Minors</button>
            </div>
            <div class="col-lg-2  col-12 offset-lg-1 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="6">6 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors51   minororad_btn" att="7">7 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark minors51  minororad_btn" att="8">8 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="9">9 Minors</button>
            </div>
            <div class="col-lg-2  col-12 pt-2 minors1 text-center">
                <button class="btn btn-dark  minors51  minororad_btn" att="10">10 Minors</button>
            </div>


            <div class="col-lg-12  col-12  minors1 text-center">
                <div class="row" style="box-shadow: none;">
                    <div class="col-lg-2 offset-lg-5">
                        <button class="btn btn-dark  minors5 minorsb">More Minors</button>

                    </div>
                </div>


            </div>

            <div class="col-12 pt-5 text-center ma_div">
                <h2>Este contrato es solo para USTED</h2>
                <button class="btn btn-dark mt-2 MinoraAdult_continue">Continuar</button>


            </div>

            <div class="col-12 pt-5 text-center Minor_div">
                <h2>Este contrato es solo para USTED</h2>
                <button class="btn btn-dark mt-2 Minor_continue">Continuar</button>


            </div>
            <div class="col-12 pt-5 text-center adult">
                <h2>Este contrato es solo para USTED</h2>
                <button class="btn btn-dark mt-2 continue">Continuar</button>


            </div>


        </div>
    </div>
    <div class="container p-5">
        <div class="adultform">
            <div class="row p-5">
                <div class="col-12 ">
                    <h1>Nombre del cliente</h1>
                </div>
                <div class="col-lg-4 col-12 pt-2">
                    <input required type="text" placeholder="Nombre" name="namea" class="form-control">
                    <label for="">Nombre</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="Segundo Nombre" name="secondnamea" class="form-control">
                    <label for="">Segundo Nombre</label>
                    <input type="hidden" name="type" value="adult" id="">


                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="Apellido" name="surnamea" class="form-control">
                    <label for="">Apellido</label>
                </div>
                <div class="col-lg-4  col-12 pt-3">
                    <input required type="text" placeholder="Teléfono" name="phonea" class="form-control">
                    <label for="">Teléfono</label>
                </div>
                <div class="col-12 pt-3">
                    <h1>Fecha de nacimiento del cliente</h1>
                </div>
                <div class="col-6 pt-3">
                    <input  required type="date" name="datea" value="date" class="form-control">
                </div>
                <div class="col-12 pt-5">
                    <h1>Información adicional del cliente</h1>
                </div>
                <div class="col-6 pt-3">
                    <input required type="text" name="passporta" placeholder="Pasaporte#" class="form-control">
                    <label for="">Pasaporte#</label>
                </div>
                <div class="col-12 pt-3">
                    <b>¿Ha tenido alguno de los siguientes síntomas en los últimos 14 días?</b>
                </div>
                <div class="col-12 pt-3">
                    <p>Fiebre</p>
                    <input type="radio" checked name="Fevera" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Fevera" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Tos (nueva aparición o empeoramiento de la tos crónica) *</p>
                    <input type="radio" checked name="Cougha" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Cougha" value="No">
                    <label for="html">No</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>
                        Dolor de garganta</p>
                    <input type="radio" checked name="Throata" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Throata" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Dificultad para respirar (disnea)</p>
                    <input type="radio" checked name="breathinga" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="breathinga" value="No">
                    <label for="html">No</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>Náuseas *</p>
                    <input type="radio" checked name="Nauseaa" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Nauseaa" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Abdominal pain *</p>
                    <input type="radio" checked name="Abdominala" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Abdominala" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Chills*</p>
                    <input type="radio" checked name="Chillsa" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Chillsa" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Dolor de cabeza</p>
                    <input type="radio" checked name="Headachea" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Headachea" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>

                        Dolores musculares (mialgia)</p>
                    <input type="radio" checked name="Musclea" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Musclea" value="No">
                    <label for="html">No</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>


                        Fatiga *</p>
                    <input type="radio" checked name="Fatiguea" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Fatiguea" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>


                        Secreción nasal (rinorrea) *</p>
                    <input type="radio" checked name="Runnya" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Runnya" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>

                        Vómitos</p>
                    <input type="radio" checked name="Vomitinga" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Vomitinga" value="No">
                    <label for="html">No</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>

                        Diarrea (3 deposiciones blandas / día) *</p>
                    <input type="radio" checked name="Diarrheaa" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Diarrheaa" value="No">
                    <label for="html">No</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>


                        Pérdida del olfato *</p>
                    <input type="radio" checked name="Loss_of_smella" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Loss_of_smella" value="No">
                    <label for="html">No</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>

                        Pérdida del gusto</p>
                    <input type="radio" checked name="Loss_of_tastea" value="Yes">
                    <label for="html">Sí</label><br>
                    <input type="radio" name="Loss_of_tastea" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="Otra especificar" name="specifya" class="form-control">
                    <label for="">Otra especificar</label>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="Fecha de inicio de los primeros síntomas" name="symptomsa"
                        class="form-control">
                    <label for="">Fecha de inicio de los primeros síntomas</label>
                </div>
                <div class="col-12 pt-5">
                    <h5>
                        Prueba de laboratorio</h5>
                </div>
                <div class="col-12 pt-5">
                    <b>

                        Tipo de prueba: hisopo nasal (PCR) / antígeno / SARS-COV-2</b>
                </div>

                <div class="col-12 pt-3">
                    <p>

                        Seleccione la prueba</p>
                    <input type="radio" checked name="Select_the_testa" value="ANTÍGENO">
                    <label for="html">
                        ANTÍGENO</label><br>
                    <input type="radio" checked name="Select_the_testa" value="PCR">
                    <label for="html">PCR</label><br>
                    <input type="radio" name="Select_the_testa" value="RT-PCR">
                    <label for="RT">RT-PCR
                    </label><br>
                    <input type="radio" name="Select_the_testa" value="PCR-24hm">
                    <label for="html">PCR-24hm</label><br>
                    <input type="radio" name="Select_the_testa" value="24hrs">
                    <label for="html">RT-PCR 24hrs</label><br>
                </div>


            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 pt-2">
                    <h1>Customer Address</h1>

                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Address" name="addressa" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Address2" name="address2a" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Town" name="towna" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Zip Code" name="zipa" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>State/Province</label>
                    <select name="Provincea" class="form-control">
                        @foreach ($state as $states )
                        <option value="{{$states->name}}">{{$states->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>Country</label>
                    <select class="form-control" name="Countrya">
                        @foreach ($country as $countries )
                        <option value="{{$countries->name}}">{{$countries->name}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>Email Address</h1>

                </div>
                <div class="col-lg-6 col-6 pt-3">
                    <input type="text" required placeholder="Email" name="emaila" class="form-control">
                </div>
            </div>

            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>How did you hear about us?</h1>
                </div>
                <div class="col-lg-12 col-12 pt-2">
                    <p>Option</p>
                    <input type="radio" checked name="gendera" value="Friends"> Friends<br>
                    <input type="radio" name="gendera" value="Airline"> Airline Staff<br>
                    <input type="radio" name="gendera" value="Airport"> Airport Advertisement<br>
                    <input type="radio" name="gendera" value="Google"> Google<br>
                    <input type="radio" name="gendera" value="Other"> Other<br>
                </div>
            </div>

        </div>

        <div class="minorform" style="display: none">
            <div class="row p-5">
                <div class="col-12 ">
                    <h1>Name Of First Minor</h1>
                </div>


                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="Name" name="name" class="form-control">
                    <label for="">Name</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="Second Name" name="secondname" class="form-control">
                    <label for="">Second Name</label>
                </div>


                <input type="hidden" name="type" value="minor">
                <div class="col-lg-4  col-12 pt-2">
                    <input type="text" required placeholder="Surnames" name="surname" class="form-control">
                    <label for="">Surnames</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input type="text" required placeholder="Telephone" name="phone" class="form-control">
                    <label for="">Telephone</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">


                    <select name="Fgender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                    </select>
                    <label>Gender:</label>
                </div>

                <div class="col-12 pt-3">
                    <h1>First Birth Date of Minor</h1>
                </div>
                <div class="col-6 pt-3">
                    <input type="date" required value="date" name="date" class="form-control">
                </div>
                <div class="col-12 pt-5">
                    <h1>Additional Information of first of the Minor</h1>
                </div>
                <div class="col-6 pt-3">
                    <input type="text" required name="passport" placeholder="Pasaporte#" class="form-control">
                    <label for="">Pasaporte#</label>
                </div>
                <div class="col-12 pt-3">
                    <b>Have you had any of the following symptoms in the last 14 days?</b>
                </div>
                <div class="col-12 pt-3">
                    <p>Fever</p>
                    <input type="radio" checked name="fever" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="fever" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Cough (new onset or worsening of chronic cough) *</p>
                    <input type="radio" checked name="Cough" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Cough" value="No">
                    <label for="html">No</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>
                        Sore Throat</p>
                    <input type="radio" checked name="Throat" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Throat" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Difficulty breathing (dyspnea)</p>
                    <input type="radio" checked name="breathing" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="breathing" value="No">
                    <label for="html">No</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>Nausea *</p>
                    <input type="radio" checked name="Nausea" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Nausea" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Abdominal pain *</p>
                    <input type="radio" checked name="Abdominal " value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Abdominal " value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Chills *</p>
                    <input type="radio" checked name="Chills" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Chills" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>
                        Headache</p>
                    <input type="radio" checked name="Headache" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Headache" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>

                        Muscle aches (myalgia)</p>
                    <input type="radio" checked name="Muscle" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Muscle" value="No">
                    <label for="html">No</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>


                        Fatigue *</p>
                    <input type="radio" checked name="Fatigue" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Fatigue" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>


                        Runny nose (rhinorrhea) *</p>
                    <input type="radio" checked name="Runny" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Runny" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <p>

                        Vomiting</p>
                    <input type="radio" checked name="Vomiting" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Vomiting" value="No">
                    <label for="html">No</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>

                        Diarrhea (3 loose stools / day) *</p>
                    <input type="radio" checked name="Diarrhea" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Diarrhea" value="No">
                    <label for="html">No</label><br>
                </div>


                <div class="col-12 pt-3">
                    <p>


                        Loss of smell *</p>
                    <input type="radio" checked name="Loss_of_smell" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Loss_of_smell" value="No">
                    <label for="html">No</label><br>
                </div>

                <div class="col-12 pt-3">
                    <p>

                        Loss of taste</p>
                    <input type="radio" checked name="Loss_of_taste" value="Yes">
                    <label for="html">Yes</label><br>
                    <input type="radio" name="Loss_of_taste" value="No">
                    <label for="html">No</label><br>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="Other specify" name="specify" class="form-control">
                    <label for="">Other specify</label>
                </div>
                <div class="col-12 pt-3">
                    <input type="text" required placeholder="" name="symptoms" class="form-control">
                    <label for="">Earliest Symptoms onset Date</label>
                </div>
                <div class="col-12 pt-5">
                    <h5>
                        Lab test</h5>
                </div>
                <div class="col-12 pt-5">
                    <b>

                        Test type: nasal swab (PCR) / antigen / SARS-COV-2</b>
                </div>

                <div class="col-12 pt-3">
                    <p>

                        Select the test</p>
                    <input type="radio" checked name="Select_the_test" value="ANTIGEN">
                    <label for="html">
                        ANTIGEN</label><br>
                    <input type="radio" name="Select_the_test" value="PCR">
                    <label for="html">PCR</label><br>
                    <input type="radio" name="Select_the_test" value="RT-PCR">
                    <label for="html">RT-PCR
                    </label><br>
                    <input type="radio" name="Select_the_test" value="PCR-24hm">
                    <label for="html">PCR-24hm</label><br>
                    <input type="radio" name="Select_the_test" value="24hrs">
                    <label for="html">RT-PCR 24hrs</label><br>
                </div>

            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 pt-2">
                    <h1>Address of the Minor</h1>

                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Address" name="address" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Address2" name="address2" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Town" name="town" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <input type="text" required placeholder="Zip Code" name="zip" class="form-control">
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>State/Province</label>
                    <select name="Province" class="form-control">
                        @foreach ($state as $states )
                        <option value="{{$states->name}}">{{$states->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6  col-12 pt-2">
                    <label>Country</label>
                    <select name="Country" class="form-control">
                        @foreach ($country as $countries )
                        <option value="{{$countries->name}}">{{$countries->name}}</option>
                        @endforeach


                    </select>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>Email Address</h1>

                </div>
                <div class="col-lg-6 col-6 pt-3">
                    <input  required type="text" placeholder="Email" name="email" class="form-control">
                </div>
            </div>

            <div class="row p-5 mt-5">
                <div class="col-12">
                    <h1>How did you hear about us?</h1>
                </div>
                <div class="col-lg-12 col-12 pt-2">
                    <p>Option</p>
                    <input type="radio" name="gender" checked value="Friends"> Friends<br>
                    <input type="radio" name="gender" value="Airline"> Airline Staff<br>
                    <input type="radio" name="gender" value="Airport"> Airport Advertisement<br>
                    <input type="radio" name="gender" value="Google"> Google<br>
                    <input type="radio" name="gender" value="Other"> Other<br>
                </div>
                <div class="col-lg-6 col-12 pt-2">
                    <input required type="text" class="form-control" name="othre_specify" placeholder="Other Specify">
                    <label for="">Other Specify</label>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-12 ">
                    <h1>Parent Or Guardian Name</h1>
                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="Name" name="Parent_name" class="form-control">
                    <label for="">Name</label>

                </div>
                <div class="col-lg-4  col-12 pt-2">
                    <input required type="text" placeholder="Second Name" name="Parent_secondname" class="form-control">
                    <label for="">Second Name</label>

                </div>

                <div class="col-lg-4  col-12 pt-2">
                    <input  required type="text" placeholder="Surnames" name="Parent_surname" class="form-control">
                    <label for="">Surnames</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">
                    <input required type="text" placeholder="Telephone" name="Parent_phone" class="form-control">
                    <label for="">Telephone</label>
                </div>
                <div class="col-lg-6  col-12 pt-3">

                    <input required type="date" placeholder="DOB" name="Parent_dob" class="form-control">
                    <label for="">Date Birth Of Gaurdian</label>

                </div>


            </div>

        </div>



    </div>








    <section>

        <div class="container mb-5">

            <div class="maindata" style="display: none">
                <form action="{{ url('customer/details') }}" method="POST">
                    @csrf
                    <div class="finalResult">

                    </div>
<input type="hidden" class="totalCount" name="totalCount" value="" id="">
                    <div class="static">
                        <div class="row p-5 mt-5">
                            <div class="col-12">
                                <h1>Electronic signature acceptance</h1><br>
                                <input type="checkbox" name="signature" required value="1"> By checking ts box, you agree that
                                your
                                electronic
                                signature will be used in place of your handwritten signature. If this is not what you
                                want,
                                you
                                have the right to ask to sign a paper copy instead. By checking this box, you warve this
                                right Upon
                                acceptance, you may request in writing that we send you a paper copy of the electronic
                                record. You
                                will not have to pay anything for such a copy, and you do not need any special software
                                or
                                hardware
                                to view it. Your acceptance of electronic signature for any document will remain in
                                effect
                                until
                                such time as you notify us in veriting that you no longer wish to use electronic
                                signature.
                                The
                                revocation of your acceptance will not entall any penalty for you
                            </div>
                        </div>
                        <center class="mt-5">
                            <input type="submit" class="btn btn-dark" value="Accept Document">
                        </center>
                    </div>
                </form>
            </div>



        </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".adult_btn").click(function() {

            $('.adult').css('display', 'block');
            $('.maindata').css('display', 'none');
            $('.minors1').css('display', 'none');
            $('.minors51').css('display', 'none');
            $('.minors').css('display', 'none');
            $('.minors22').css('display', 'none');
        });

        $(".continue").click(function() {
            $(this).css('display', 'none');
            $('.maindata').css('display', 'block');


            var html = $('.adultform').html();
            $('.finalResult').empty().append(html);
        });


        //minor
        $(".minor_button1").click(function() {
            $('.maindata').css('display', 'none');



            $('.adult').css('display', 'none');

            $('.minors51').css('display', 'none');
            $('.minors').css('display', 'none');
            $('.minors22').css('display', 'none');

            $('.minors1').css('display', 'block');
            //$('.minors').css('display', 'none');
        });
        $(".minorsb").click(function() {
            $(this).css('display', 'none');

            $('.minors51').css('display', 'block');
        });

        //adult

        $(".minor_button").click(function() {

            $('.maindata').css('display', 'none');
            $('.adult').css('display', 'none');

            $('.minors1').css('display', 'none');
            $('.minors51').css('display', 'none');
            $('.minors22').css('display', 'none');

            $('.minors').css('display', 'block');
            //$('.minors').css('display', 'none');
        });



        $(".minors222").click(function() {
            $(this).css('display', 'none');

            $('.minors22').css('display', 'block');
        });


    $(".minororad_btn").click(function () {

        $('.maindata').css('display', 'block');
        $('.finalResult').empty();
    });

        $(".minororad_btn").click(function() {

            $('.maindata').css('display', 'block');
            $('.finalResult').empty();

            var some_var = $(this).attr('att');
            for (let index = 1; index <= some_var; index++) {

                var main = index;

                var id = '#minordata' + index + '';
                var html = '<div id="minordata' + index + '">';
                html += $('.minorform').html();
                html += '</div>';

            $('.finalResult').append(html);

                $('.totalCount').val(main);

                $(id).find('input').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

                });

                $(id).find('select').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

            });


        }
    });


        $(".minor_btn").click(function() {

            $('.maindata').css('display', 'block');
            $('.finalResult').empty();
            var html2 = $('.adultform').html();
            $('.finalResult').append(html2);
            var some_var = $(this).attr('att');
            for (let index = 1; index <= some_var; index++) {


                var main = index;

                var id = '#minordata' + index + '';
                var html = '<div id="minordata' + index + '">';
                html += $('.minorform').html();
                html += '</div>';


                $('.finalResult').append(html);
                $('.totalCount').val(main);

                $(id).find('input').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

                });

                $(id).find('select').each(function(index, value) {
                    var val = $(this).attr('name');
                    val = $(this).attr('name', val + '_' + main);

                });
            }
        });


    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>

<?php
    if(!isset($_GET['id_empresa'])){
        // header('Location: index.php?mensaje=error');
        // exit();
    }

    include_once 'database.php';
    $codigo = $_GET['id_empresa'];

    $sentencia = $conn->prepare("select * from tb_empresa where id_empresa = ?;");
    $sentencia->execute([$codigo]);
    $empresa = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script>
    addEventListener('load', inicio, false);
    addEventListener('load', inicio2, false);
    addEventListener('load', inicio3, false);
    addEventListener('load', inicio4, false);
    addEventListener('load', inicio5, false);

    function inicio() {
        document.getElementById('temperatura').addEventListener('change', cambioTemperatura, false);
    }

    function cambioTemperatura() {
        document.getElementById('temp').innerHTML = document.getElementById('temperatura').value;
    }

    function inicio2() {
        document.getElementById('temperatura2').addEventListener('change', cambioTemperatura2, false);
    }

    function cambioTemperatura2() {
        document.getElementById('temp2').innerHTML = document.getElementById('temperatura2').value;
    }

    function inicio3() {
        document.getElementById('temperatura3').addEventListener('change', cambioTemperatura3, false);
    }

    function cambioTemperatura3() {
        document.getElementById('temp3').innerHTML = document.getElementById('temperatura3').value;
    }

    function inicio4() {
        document.getElementById('temperatura4').addEventListener('change', cambioTemperatura4, false);
    }

    function cambioTemperatura4() {
        document.getElementById('temp4').innerHTML = document.getElementById('temperatura4').value;
    }

    function inicio5() {
        document.getElementById('temperatura5').addEventListener('change', cambioTemperatura5, false);
    }

    function cambioTemperatura5() {
        document.getElementById('temp5').innerHTML = document.getElementById('temperatura5').value;
    }

    function myFunction() {
        var x = document.getElementById("myDIV");
        var y = document.getElementById("contenido2");
        var z = document.getElementById("contenido3");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");
        var btn4 = document.getElementById("btn4");
        var btn5 = document.getElementById("btn5");
        if (document.getElementById("myDIV") != null) {
            x.style.display = "none";
            y.style.display = "block";
            z.style.display = "none";
            btn1.style.display = "none";
            btn2.style.display = "block";
            btn3.style.display = "block";
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

    }

    function myFunction2() {
        var x = document.getElementById("myDIV");
        var y = document.getElementById("contenido2");
        var z = document.getElementById("contenido3");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");
        var btn4 = document.getElementById("btn4");
        var btn5 = document.getElementById("btn5");
        if (document.getElementById("myDIV") != null) {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            btn1.style.display = "block";
            btn2.style.display = "none";
            btn3.style.display = "none";
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    }

    function myFunction3() {
        var x = document.getElementById("myDIV");
        var y = document.getElementById("contenido2");
        var z = document.getElementById("contenido3");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");
        if (document.getElementById("myDIV") != null) {
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "block";
            btn1.style.display = "none";
            btn2.style.display = "none";
            btn3.style.display = "none";
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    }
    // function muestra_oculta(contenido){ //contido
    //     if (document.getElementById){ //se obtiene el id
    //         var el = document.getElementById(contenido); //se define la variable "el" igual a nuestro div
    //         el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div

    //     }
    // }
    // window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    // muestra_oculta('contenido');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
    // }
    // // ==============================================================

    // function muestra_oculta2(id){
    // if (document.getElementById){ //se obtiene el id
    // var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
    // el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
    // }
    // }
    // window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    // muestra_oculta2('contenido2');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
    // }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Build a Survey Form using HTML and CSS
    </title>

    <style>
    #myDIV {
        diplay: block;
    }

    #contenido2 {
        display: none;
    }

    #contenido3 {
        display: none;
    }

    #btn2 {
        display: none;
    }

    #btn3 {
        display: none;

    }

    .titulo_boton {
        margin: 0px auto;
        padding: 5px;
        background-color: #e6e6e6;
        width: 100px;
        font-family: helvetica;
        font-size: 16px;
        font-weight: bold;
    }

    .titulo_boton2 {
        margin: 0px auto;
        padding: 5px;
        background-color: #e6e6e6;
        width: 100px;
        font-family: helvetica;
        font-size: 16px;
        font-weight: bold;
    }

    .titulo_boton3 {
        margin: 0px auto;
        padding: 5px;
        background-color: #e6e6e6;
        width: 100px;
        font-family: helvetica;
        font-size: 16px;
        font-weight: bold;
        margin-left: auto;
    }

    .boton_mostrar {
        float: right;
        font-size: 12px;
        line-height: 20px;
        color: #DE7217;
    }

    /* Styling the Body element i.e. Color,
        Font, Alignment */
    body {
        background-color: #818080;
        font-family: Verdana;
        text-align: center;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    /* Styling the Form (Color, Padding, Shadow) */
    form {
        background-color: #fff;
        max-width: 700px;
        margin: 50px auto;
        padding: 30px 20px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }

    /* Styling form-control Class */
    .form-control {
        text-align: left;
        margin-bottom: 25px;
    }

    /* Styling form-control Label */
    .form-control label {
        display: block;
        margin-bottom: 10px;
    }

    /* Styling form-control input,
        select, textarea */
    .form-control input,
    .form-control select,
    .form-control textarea {
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        padding: 10px;
        display: block;
        width: 95%;
    }

    /* Styling form-control Radio
        button and Checkbox */
    .form-control input[type="radio"],
    .form-control input[type="checkbox"] {
        display: inline-block;
        width: auto;
    }

    /* Styling Button */
    button {
        background-color: #818080;
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>

    <div class="form">
        <div class="form-control">
            <form method="POST" action="encuestasbackemp.php">
                <div class="row">
                    <div class="col-12">
                        <center>
                            <h2>Ecuesta Empresa</h2>
                        </center>
                    </div>
                    <hr>
                    Nombre de la empresa
                    <input type="text" name="em_nombre" placeholder="Numero de control" required
                        value="<?php echo $empresa->em_nombre; ?>" readonly>

                    <div class="col-2">
                        encuesta
                        <input type="text" name="encuesta" placeholder="encustas" required
                            value="<?php echo $empresa->encuesta; ?>" readonly>
                    </div>
                    <div class="col-2">
                        empresa
                        <input type="text" name="encuesta" placeholder="encustas" required
                            value="<?php echo $empresa->id_empresa; ?>" readonly>
                    </div>
                </div>



                <!-- Create Form -->

                <div id="myDIV">
                    <div id="form">

                        <h4>A. DATOS GENERALES DE LA EMPRESA U ORGANISMO </h4>
                        <label>
                            Su empresa u organismo es:
                        </label>
                        <div class="form-control">

                            <!-- Input Type Radio Button -->
                            <label for="recommed-1">
                                <input type="radio" id="p1" name="p1" value="1">Publica</input>
                            </label>
                            <label for="recommed-2">
                                <input type="radio" id="p1" name="p1" value="2">Privada</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p1" name="p1" value="3" >Social</input>
                            </label>
                        </div>
                        <div class="form-control">
                            <label>
                                Tamaño de la empresa u organismo
                            </label>

                            <!-- Input Type Radio Button -->
                            <label for="recommed-1">
                                <input type="radio" id="p2" name="p2" value="1">Microempresa (De 1 a 30)</input>
                            </label>
                            <label for="recommed-2">
                                <input type="radio" id="p2" name="p2" value="2">Pequeña (De 31 a 100) </input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p2" name="p2" value="3">Mediana (De 101 a 500)</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p2" name="p2" value="4">Grande (Más de 500) </input>
                            </label>
                        </div>

                        <div class="form-control">
                            <label>
                                Actividad económica de la empresa u organismo. Indique a cual clasificación corresponde
                                su empresa
                            </label>

                            <!-- Input Type Radio Button -->
                            <label for="recommed-1">
                                <input type="radio" id="p3" name="p3" value="1">Agro-industrial</input>
                            </label>
                            <label for="recommed-1">
                                <input type="radio" id="p3" name="p3" value="2">Minerales no metálicos</input>
                            </label>
                            <label for="recommed-2">
                                <input type="radio" id="p3" name="p3" value="3">Silvicultura</input>
                            </label>
                            <label for="recommed-2">
                                <input type="radio" id="p3" name="p3" value="4">Industrias metálicas básicas</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="5">Pesca y acuacultura </input>

                            </label>
                            <label for="recommed-3">

                                <input type="radio" id="p3" name="p3" value="6">Productos metálicos,maquinaria y equipo</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="7">Minería</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="8">Construcción</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="9">Alimentos, bebidas y tabaco</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="10">Electricidad, gas y agua </input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="11">Textiles, vestido y cuero</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="12">Comercio y turismo </input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="13">Madera y sus productos</input>

                            </label>
                            <label for="recommed-3">

                                <input type="radio" id="p3" name="p3" value="14">Transporte, almacenaje y comunicaciones</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="15">Papel, imprenta y editoriales </input>

                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="16">Servicios financieros, seguros, actividades
                                inmobiliarias y de alquiler</input>

                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="17">Química</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="18">Educación</input>

                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p3" name="p3" value="19">Caucho y Plástico</input>
                            </label>
                            <label for="recommed-3">
                                <input type="text" id="p3" placeholder="Otra (especifique)" name="p3"></input>

                            </label>
                        </div>

                        <div class="form-control">
                            <h4>
                                Número de egresados del Instituto Tecnológico y nivel jerárquico que ocupan en su
                                organización
                            </h4>

                            <!-- Input Type Radio Button -->
                            <table class="default">
                                <tr>
                                    <th>Carreras</th>

                                    <th>Mando superior</th>

                                    <th>Mando Intermedio </th>
                                    <th>Supervisor o equivalente </th>
                                    <th>Técnico o Auxiliar </th>
                                    <th>Otros (Especifique) </th>

                                </tr>

                                <tr>

                                    <td>Ingeniería en sistemas computacionales</td>

                                    <td><select name="p5" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                    <td><select name="p6" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p7" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p8" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p9" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                </tr>

                                <tr>

                                    <td>Ingeniería en industrias alimentaria</td>

                                    <td><select name="p10" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                    <td><select name="p11" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p12" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p13" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p14" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                </tr>

                                <tr>

                                    <td>Arquitectura</td>

                                    <td><select name="p15" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                    <td><select name="p16" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p17" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p18" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                    <td><select name="p19" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>
                                </tr>
                                <tr>

                                    <td>licenciatura en administracion</td>

                                    <td><select name="p20" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                    <td><select name="p21" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                    <td><select name="p22" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                    <td><select name="p23" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                    <td><select name="p24" id="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select></td>

                                </tr>

                            </table>
                        </div>
                        <div class="form-control">
                            <label>
                                Congruencia entre perfil profesional y función que desarrollan los egresados del
                                Instituto Tecnológico en su
                                empresa u organización. Del total de egresados anote el porcentaje que corresponda.
                            </label>

                            <!-- Input Type Radio Button -->
                            <label for="recommed-1">
                                <input type="radio" id="p25" name="p25" value="1">Completamente</input>
                            </label>
                            <label for="recommed-2">
                                <input type="radio" id="p25" name="p25" value="2">Medianamente</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p25" name="p25" value="3">Ligeramente</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p25" name="p25" value="4">Ninguna relación</input>
                            </label>
                        </div>

                        <div class="form-control">
                            <label>
                                Requisitos que establece su empresa u organización para la contratación de personal con
                                nivel de licenciatura.
                            </label>

                            <!-- Input Type Radio Button -->
                            <label for="recommed-1">
                                <input type="radio" id="p26" name="p26" value="1">Área o campo de estudio </input>
                            </label>
                            <label for="recommed-2">
                                <input type="radio" id="p26" name="p26" value="2">Titulación</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p26" name="p26" value="3">Experiencia laboral/ práctica ( antes de
                                egresar)</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p26" name="p26" value="4">Posicionamiento de la Institución de
                                Egreso</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p26" name="p26" value="5">Recomendaciones/ Referencias</input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p26" name="p26" value="6">Personalidad/ actitudes </input>
                            </label>
                            <label for="recommed-3">
                                <input type="radio" id="p26" name="p26" value="7">Capacidad de liderazgo </input>
                            </label>
                            <label for="recommed-3">
                                <input type="text" id="p26" placeholder="Otro" name="p26"></input>
                            </label>
                        </div>
                        <div class="form-control">
                            <label>
                                Carreras que demanda preferentemente su empresa u organismo.
                            </label>

                            <!-- Input Type Radio Button -->
                            <label for="recommed-1">
                                <input type="textarea" id="p27" name="p27"></input>
                            </label>
                      
<!-- 
                    <div id="btn1" class="titulo_boton">
                        <a style='cursor: pointer;' onclick="myFunction()" title="">siguiente</a>
                    </div> -->

                </div>
        </div>
        <div class="form">
        <div class="form-control">
        <div id="contenido2">
        <div class="form">
        <div class="form-control">   
                <h4>COMPETENCIAS LABORALES</h4>
                </div>



<!-- Multi-line Text Input Control -->


</div>
                </div>
                <h6>En su opinión ¿qué competencias considera deben desarrollar los egresados del Instituto
                    Tecnológico, para
                    desempeñarse eficientemente en sus actividades laborales?
                    Por favor evalúe conforme a la tabla siguiente: Califique del 1 (menor) al 5 (mayor):
                </h6>
                <div class="form-control">

                    <!-- Input Type Radio Button -->
                    <table class="default">
                        <tr>
                            <th>Competencia Labora</th>

                            <th>1</th>

                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>

                        </tr>

                        <tr>

                            <td>Habilidad para resolver conflictos </td>

                            <td>
                                <label for="recommed-3">
                                    
                                    <input type="radio" id="p28" name="p28" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p28" name="p28" value="2"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p28" name="p28" value="3"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p28" name="p28" value="4"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p28" name="p28" value="5"></input>
                                </label>
                            </td>

                        </tr>

                        <tr>

                            <td>Ortografía y redacción de documentos </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p29"  name="p29" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p29"  name="p29" value="2"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p29"  name="p29" value="3"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p29" name="p29" value="4"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p29" name="p29" value="5"></input>
                                </label>
                            </td>

                        </tr>

                        <tr>

                            <td>Mejora de procesos</td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p30" name="p30" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p30" name="p30" value="2"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p30" name="p30" value="3"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p30" name="p30" value="4"></input>
                                </label>
                            </td>
                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p30" name="p30" value="5"></input>
                                </label>
                            </td>
                        </tr>
                        <tr>

                            <td>Trabajo en equipo</td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p31" name="p31" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p31" name="p31" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p31" name="p31" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p31"name="p31" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p31" name="p31" value="5"></input>
                                </label>
                            </td>

                        </tr>
                        <tr>

                            <td>Habilidad para administrar tiempo </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p32" name="p32" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p32"name="p32" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p32" name="p32" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p32" name="p32" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p32" name="p32" value="5"></input>
                                </label>
                            </td>

                        </tr>

                        <tr>

                            <td>Facilidad de palabra</td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p33" name="p33" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p33" name="p33" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p33" name="p33" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p33" name="p33" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p33" name="p33" value="5"></input>
                                </label>
                            </td>

                        </tr>

                        <tr>

                            <td>Gestión de Proyectos </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p34" name="p34" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p34" name="p34" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p34" name="p34" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p34" name="p34" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p34" name="p34" value="5"></input>
                                </label>
                            </td>

                        </tr>

                        <tr>

                            <td> Puntualidad y Asistencia</td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p35" name="p35" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p35" name="p35" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p35" name="p35" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p35" name="p35" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p35" name="p35" value="5"></input>
                                </label>
                            </td>

                        </tr>


                        <tr>

                            <td>Cumplimiento de las normas </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p36" name="p36" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p36" name="p36" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p36" name="p36" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p36" name="p36" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p36" name="p36" value="5"></input>
                                </label>
                            </td>

                        </tr>


                        <tr>

                            <td>Integración al trabajo </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p37" name="p37" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p37" name="p37" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p37" name="p37" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p37" name="p37" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p37" name="p37" value="5"></input>
                                </label>
                            </td>

                        </tr>

                        <tr>

                            <td>Creatividad e innovación </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p38" name="p38" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p38" name="p38" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p38" name="p38" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p38" name="p38" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p38" name="p38" value="5"></input>
                                </label>
                            </td>

                        </tr>


                        <tr>

                            <td>Capacidad de negociación </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p39" name="p39" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p39" name="p39" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p39" name="p39" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p39" name="p39" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p39" name="p39" value="5"></input>
                                </label>
                            </td>

                        </tr>


                        <tr>

                            <td>Liderazgo y toma de decisiones </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p40" name="p40" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p40" name="p40" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p40" name="p40" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p40" name="p40" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p40" name="p40" value="5"></input>
                                </label>
                            </td>

                        </tr>
                        <tr>

                            <td> Adaptación al cambio </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p41" name="p41" value="1"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p41" name="p41" value="2"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p41" name="p41" value="3"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p41" name="p41" value="4"></input>
                                </label>
                            </td>

                            <td>
                                <label for="recommed-3">
                                    <input type="radio" id="p41" name="p41" value="5"></input>
                                </label>
                            </td>

                        </tr>
                        <tr>

                            <div class="form-control">
                                <td> Otras, especifique </td>
                                
                                <td>
                                    <label for="recommed-3">
                                        <input type="radio" id="p42" name="p42" value="1"></input>
                                    </label>
                                </td>
                                
                                <td>
                                    <label for="recommed-3">
                                        <input type="radio" id="p42" name="p42" value="2"></input>
                                    </label>
                                </td>
                                
                                <td>
                                    <label for="recommed-3">
                                        <input type="radio" id="p42" name="p42" value="3"></input>
                                    </label>
                                </td>
                                
                                <td>
                                    <label for="recommed-3">
                                        <input type="radio" id="p42" name="p42" value="4"></input>
                                    </label>
                                </td>
                                
                                <td>
                                    <label for="recommed-3">
                                        <input type="radio" id="p42" name="p42" value="5"></input>
                                    </label>
                                </td>
                            </div class="form-control">

                        </tr>

                    </table>
                </div>
                <div class="form-control">
                    <label>
                        Con base al desempeño laboral así como a las actividades laborales que realiza el
                        egresado ¿Cómo considera
                        su desempeño laboral respecto a su formación académica? Del total de egresados anote
                        el porcentaje que
                        corresponda.
                    </label>

                    <!-- Input Type Radio Button -->
                    <label for="recommed-1">
                        <input type="radio" id="p43" name="p43" value="1">Excelente</input>
                    </label>
                    <label for="recommed-2">
                        <input type="radio" id="p43" name="p43" value="2">Muy bueno </input>
                    </label>
                    <label for="recommed-3">
                        <input type="radio" id="p43" name="p43" value="3">Bueno</input>
                    </label>
                    <label for="recommed-3">
                        <input type="radio" id="p43" name="p43" value="4">Regular</input>
                    </label>
                    <label for="recommed-3">
                        <input type="radio" id="p43" name="p43" value="5">Malo</input>
                    </label>

                </div>

                <div class="form-control">
                    <label>
                        De acuerdo con las necesidades de su empresa u organismo, ¿qué sugiere para mejorar
                        la formación de los
                        egresados del Instituto Tecnológico?
                    </label>

                    <!-- Input Type Radio Button -->
                    <label for="recommed-1">
                        <input type="area" id="p44" name="p44"></input>
                    </label>

                </div>

                <div class="form-control">
                    <label>
                        Comentarios y sugerencias:
                    </label>

                    <!-- Input Type Radio Button -->
                    <label for="recommed-1">
                        <input type="textarea" id="p45" name="p45"></input>
                    </label>    

                </div>
                </div>





                <div id="btnsend">
                    <input type="hidden" name="id_empresa" value="<?php echo $empresa->id_empresa; ?>">
                    <input style="background-color: #4CAF50;
                                    border: none;
                                    color: white;
                                    padding: 15px 50px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;" type="submit" class="btn btn-primary" value="Enviar">
                </div>

            </div>
        </div>



        <!-- Multi-line Text Input Control -->
        </form>

        <div class="titulo_boton2" id="btn2">
            <a style='cursor: pointer;' onclick="myFunction2()" title="">Atras</a>

        </div>

        <div class="titulo_boton3" id="btn3">
            <a style='cursor: pointer;' onclick="myFunction3()" title="">fin papa</a>

        </div>
        <div id="contenido3">

        </div>
        <div class="titulo_boton4" id="btn2">
            <a style='cursor: pointer;' onclick="myFunction2()" title="">Atras</a>

        </div>

        <div class="titulo_boton5" id="btn3">
            <a style='cursor: pointer;' onclick="myFunction2()" title="">Siguinte</a>

        </div>

</body>

</html>
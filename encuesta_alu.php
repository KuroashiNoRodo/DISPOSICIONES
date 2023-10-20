<?php
    if(!isset($_GET['id_alumno'])){
        // header('Location: index.php?mensaje=error');
        // exit();
    }

    include_once 'database.php';
    $codigo = $_GET['id_alumno'];

    $sentencia = $conn->prepare("select * from tb_alumno where id_alumno = ?;");
    $sentencia->execute([$codigo]);
    $alumno = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <script>

addEventListener('load',inicio,false);
addEventListener('load',inicio2,false);
addEventListener('load',inicio3,false);
addEventListener('load',inicio4,false);
addEventListener('load',inicio5,false);

function inicio()
{
  document.getElementById('temperatura').addEventListener('change',cambioTemperatura,false);
}

function cambioTemperatura()
{    
  document.getElementById('temp').innerHTML=document.getElementById('temperatura').value;
}

function inicio2()
{
  document.getElementById('temperatura2').addEventListener('change',cambioTemperatura2,false);
}

function cambioTemperatura2()
{    
  document.getElementById('temp2').innerHTML=document.getElementById('temperatura2').value;
}

function inicio3()
{
  document.getElementById('temperatura3').addEventListener('change',cambioTemperatura3,false);
}

function cambioTemperatura3()
{    
  document.getElementById('temp3').innerHTML=document.getElementById('temperatura3').value;
}

function inicio4()
{
  document.getElementById('temperatura4').addEventListener('change',cambioTemperatura4,false);
}

function cambioTemperatura4()
{    
  document.getElementById('temp4').innerHTML=document.getElementById('temperatura4').value;
}
function inicio5()
{
  document.getElementById('temperatura5').addEventListener('change',cambioTemperatura5,false);
}

function cambioTemperatura5()
{    
  document.getElementById('temp5').innerHTML=document.getElementById('temperatura5').value;
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
    var btnsend = document.getElementById("btnsend");
        if(document.getElementById("myDIV")!=null){
            x.style.display = "none";
            y.style.display = "block";
            z.style.display = "none";
            btn1.style.display = "none";
            btn2.style.display = "block";
            btn3.style.display = "block";
            btnsend.style.display = "none";
            window.scrollTo({ top: 0, behavior: 'smooth' });
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
    var btnsend = document.getElementById("btnsend");
        if(document.getElementById("myDIV")!=null){
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            btn1.style.display = "block";
            btn2.style.display = "none";
            btn3.style.display = "none";
            btnsend.style.display = "none";
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
    function myFunction3() {
    var x = document.getElementById("myDIV");
    var y = document.getElementById("contenido2");
    var z= document.getElementById("contenido3");
    var btn1 = document.getElementById("btn1");
    var btn2 = document.getElementById("btn2");
    var btn3 = document.getElementById("btn3");
    var btnsend = document.getElementById("btnsend");
        if(document.getElementById("myDIV")!=null){
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "block";
            btn1.style.display = "none";
            btn2.style.display = "none";
            btn3.style.display = "none";
            btnsend.style.display = "block";
            window.scrollTo({ top: 0, behavior: 'smooth' });
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
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>
        Build a Survey Form using HTML and CSS
    </title>
 
    <style>
        
        #myDIV{
            diplay:block;
        }
        #contenido2{
            display:none;
        }
        #contenido3{
            display:none;
        }
        #btn2{
            display: none;
        }
        #btn3{
            display: none;
            
        }
        #btnsend{
            display: none;
        }

        .titulo_boton {
            margin:0px auto;
  padding:5px;  
  background-color:#e6e6e6;
  width:100px;
  font-family:helvetica;
  font-size:16px;
  font-weight:bold;
}
.titulo_boton2 {
            margin:0px auto;
  padding:5px;  
  background-color:#e6e6e6;
  width:100px;
  font-family:helvetica;
  font-size:16px;
  font-weight:bold;
}

.titulo_boton3 {
  margin:0px auto;
  padding:5px;  
  background-color:#e6e6e6;
  width:100px;
  font-family:helvetica;
  font-size:16px;
  font-weight:bold;
  margin-left:auto;
}
.boton_mostrar {
  float:right;
  font-size:12px;
  line-height:20px;
  color:#DE7217;
}
        /* Styling the Body element i.e. Color,
        Font, Alignment */
        body {
            background-color: #818080;
            font-family: Verdana;
            text-align: center;
        }
 
        /* Styling the Form (Color, Padding, Shadow) */
        .form {
            background-color: #fff;
            max-width: 500px;
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
    <div class="form" >
<div class="form-control">
  <form method="POST" action="encuestasbackalu.php">
    <div class="row">
    <div class="col-12">
        <center>
        <h2>Encuesta Alumno</h2>
        </center>
      </div>
      <hr>
        Numero de control
        <input type="text" name="alu_nc" placeholder="Numero de control" required
        value="<?php echo $alumno->alu_nc; ?>" readonly>

      <div class="col-4">
        Nombre
        <input type="text"  name="alu_nombre" placeholder="Nombre" required
        value="<?php echo $alumno->alu_nombre; ?>" readonly>
      </div>
      <div class="col-4">
        Domicilio
        <input type="text"  name="alu_domicilio" placeholder="Domicilio" required
        value="<?php echo $alumno->alu_domicilio; ?>" readonly>
      </div>
    </div>
    <div class="row">
      
      <div class="col-2">
        Telefono
        <input type="text"  name="alu_telefono" placeholder="Telefono" required
        value="<?php echo $alumno->alu_telefono; ?>" readonly>
      </div>
      <div class="col-4">
        Carrera 
        <input type="text"  name="alu_carrera" placeholder="Carrera" required
        value="<?php echo $alumno->alu_carrera; ?>" readonly>
      </div>
    </div>
    <div class="col-2">
        encuesta
        <input type="text"  name="encuesta" placeholder="encustas" required
        value="<?php echo $alumno->encuesta; ?>" readonly>
      </div>
  
</div>
</div>
    
    <h1>Encuesta a Egresados</h1>
  
    <!-- Create Form -->
    
    <div  id="myDIV">
    <div class="form">

        <h4>II. PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE </h4>
        <h6>Califique la calidad de la educación profesional proporcionada por el personal docente, así como el Plan de Estudios de la carrera 
            que curso y las condiciones del plantel en cuanto a infraestructura.</h6>
        <div class="form-control">
            <label>
                Calidad de los docentes:
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       id="p1"
                       value="4"
                       name="p1">Muy buena</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                        id="p1"
                        value="3"
                       name="p1">Buena</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                        value="2"
                       id="p1"
                       name="p1">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                        value="1"
                       id="p1"
                       name="p1">Mala</input>
            </label>
        </div>
        <div class="form-control">
            <label>
                Plan de Estudios: 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       value="4"
                       id="p2"
                       name="p2">Muy buena</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       value="3"
                       id="p2"
                       name="p2">Buena</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       value="2"
                       id="p2"
                       name="p2">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       value="1"
                       id="p2"
                       name="p2">Mala</input>
            </label>
        </div>

        <div class="form-control">
            <label>
                Oportunidad de participar en proyectos de investigación y desarrollo: 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       value="4"
                       id="p3"
                       name="p3">Muy buena</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       value="3"
                       id="p3"
                       name="p3">Buena</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       value="2"
                       id="p3"
                       name="p3">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       value="1"
                       id="p3"
                       name="p3">Mala</input>
            </label>
        </div>

        <div class="form-control">
            <label>
                Énfasis que se le prestaba a la investigación dentro del proceso de enseñanza 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       value="4"
                       id="p4"
                       name="p4">Muy buena</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       value="3"
                       id="p4"
                       name="p4">Buena</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       value="2"
                       id="p4"
                       name="p4">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       value="1"
                       id="p4"
                       name="p4">Mala</input>
            </label>
        </div>
        <div class="form-control">
            <label>
                Satisfacción con las condiciones de estudio (infraestructura): 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       value="4"
                       id="p5"
                       name="p5">Muy buena</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       value="3"
                       id="p5"
                       name="p5">Buena</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p5"
                       name="p5">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p5"
                       name="p5">Mala</input>
            </label>
        </div>

        <div class="form-control">
            <label>
                Experiencia obtenida a través de la residencia profesional
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p6"
                       name="p6">Muy buena</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p6"
                       name="p6">Buena</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p6"
                       name="p6">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p6"
                       name="p6">Mala</input>
            </label>
        </div>
  
        
  
        <!-- Multi-line Text Input Control -->
        
    </div>
    </div>

    <div id="btn1" class="titulo_boton">
    <a style='cursor: pointer;'  onclick="myFunction()" title="" >siguiente</a>
        </div>
    
    <div id="contenido2">
    <div class="form" >
    <div id="form-control">

        <h4>III. UBICACIÓN LABORAL DE LOS EGRESADOS </h4>
        <h6>Indique a cuál de los siguientes puntos corresponde su situación actual.</h6>
        <div class="form-control">
            <label>
            Actividad a la que se dedica actualmente: 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p7"
                       name="p7">Trabaja</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p7"
                       name="p7">Estudia</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p7"
                       name="p7">Estudia y Trabaja</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p7"
                       name="p7">No estudia ni trabaja</input>
            </label>
        </div>
        <div class="form-control">
            <label>
            Si estudia, indicar si es:
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p8"
                       name="p8">Especialidad</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p8"
                       name="p8">Maestría</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p8"
                       name="p8">Doctorado</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p8"
                       name="p8">Idiomas</input>
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p8"
                   name="p8"
                   placeholder="Otro" />
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p8"
                   name="p8"
                   placeholder="Especialidad e institucion" />
            </label>
        </div>

        <div class="form-control">
            <label>
            2 En caso de trabajar: Tiempo Transcurrido para obtener el primer empleo
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p10"
                       name="p10">Antes de Egresar</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p10"
                       name="p10">Menos de seis mesesna</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p10"
                       name="p10">Entre seis meses y un año</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p10"
                       name="p10">Más de un año</input>
            </label>
        </div>

        <div class="form-control">
            <label>
            3 Medio para Obtener el Empleo
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p11"
                       name="p11">Bolsa de trabajo del plantel</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p11"
                       name="p11">Contactos personales</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p11"
                       name="p11">Residencia Profesiona</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p11"
                       name="p11">Medios masivos de comunicación</input>
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p11"
                   name="p11"
                   placeholder="Otro" />
            </label>
        </div>
        <div class="form-control">
            <label>
            4 Requisitos de contratación
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p12"
                       name="p12">Competencias laborales</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p12"
                       name="p12">Titulo Profesional </input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p12"
                       name="p12">Examen de selección</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p12"
                       name="p12">Idioma Extranjero</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="0"
                       id="p12"
                       name="p12">Actitudes y habilidades socio-comunicativas (principios y valores)</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="-1"
                       id="p12"
                       name="p12">Ninguno</input>
            </label>
            <input type="text"
                   id="p12"
                   name="p12"
                   placeholder="Otro" />
            </label>
        </div>

        <div class="form-control">
            <label>
            5 Idioma que utiliza en su trabajo 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p13"
                       name="p13">Inglés</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p13"
                       name="p13">Francés</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p13"
                       name="p13">Alemán</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p13"
                       name="p13">Japonés</input>
            </label>
            <input type="text"
                   id="p13"
                   name="p13"
                   placeholder="Otro" />
            </label>
        </div>
  
        <div class="form-control">
            <label>
            6 En qué proporción utiliza en el desempeño de sus actividades laborales cada una de las habilidades del idioma extranjero 
            </label>
            
            <!-- Input Type Radio Button -->
            <hr>
            <label>
                hablar
            </label>
            <label for="recommed-3">
            <input type="range" id="temperatura" min="0" max="100" name="p14">
      <span id="temp">0</span>%
            </label>
            <hr>
            <hr>
            <label>
            Escribir
            </label>
            <label for="recommed-3">
            <input type="range" id="temperatura2" min="0" max="100" name="p15">
      <span id="temp2">0</span>%
            </label>
            <hr>
            <hr>
            <label>
            Leer
            </label>
            <label for="recommed-3">
            <input type="range" id="temperatura3" min="0" max="100" name="p16">
      <span id="temp3">0</span>%
            </label>
            <hr>
            <hr>
            <label>
            Escuchar
            </label>
            <label for="recommed-3">
            <input type="range" id="temperatura4" min="0" max="100" name="p17">
      <span id="temp4">0</span>%
            </label>
            <hr>
            
        
        </div>
        <div class="form-control">
            <label>
            7 Antigüedad en el empleo 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p18"
                       name="p18">Menos de un año</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p18"
                       name="p18">Un año</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p18"
                       name="p18">Dos años</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p18"
                       name="p18">Tres Años</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="0"
                       id="p18"
                       name="p18">Más de tres años</input>
            </label>
            <input type="text"
                   id="p18"
                   name="p18"
                   placeholder="Año de ingreso" />
            </label>
        </div>
        <div class="form-control">
            <label>
            8 Ingreso (salario mínimo diario)
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       id="p18"
                       value="4"
                       name="p18">Menos de cinco</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p18"
                       name="p18">Entre cinco y siete</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p18"
                       name="p18">Entre 8 y 10</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p18"
                       name="p18">Más de 10</input>
            </label>
            
        </div>
        <div class="form-control">
            <label>
            9 Nivel jerárquico en el trabajo
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p19"
                       name="p19">Técnico</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p19"
                       name="p19">Supervisor</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p19"
                       name="p19">Jefe de área</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p19"
                       name="p19">Funcionario</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="0"
                       id="p19"
                       name="p19">Directivo</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="-1"
                       id="p19"
                       name="p19">Empresario</input>
            </label>
            <input type="text"
                   id="p19"
                   name="p19"
                   placeholder="Otro" />
            </label>
        </div>
        <div class="form-control">
            <label>
            10 Condición de Trabajo
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p20"
                       name="p20">Base</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p20"
                       name="p20">Eventual</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p20"
                       name="p20">Contrato</input>
            </label>
            <input type="text"
                   id="p20"
                   name="p20"
                   placeholder="Otro" />
            </label>
        </div>
        <div class="form-control">
            <label>
            11 Relación del trabajo con su área de formación: 
            </label>
 
            <!-- Input Type Radio Button -->

            <label for="recommed-3">
            <input type="range" id="temperatura5" min="0" max="100" name="p20">
      <span id="temp5">0</span>%
            </label>
            <hr>
            
        </div>
        <div class="form-control">
            <label>
            12 Datos de la empresa u organismo
            </label>
            <label>
            ORGANISMO
            </label>
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p21"
                       name="p21">Público</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p21"
                       name="p21">Privado</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p21"
                       name="p21">Social</input>
            </label>
            <label for="recommed-3">
            <input type="text"
            value="1"
                   id="p22"
                   name="p22"
                   placeholder="Giro o actividad principal de la empresa u organismo:" />
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p23"
                   name="p23"
                   placeholder="Razón Social" />
            </label>
            <hr>
            <label for="recommed-3">
                Domucilio
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p24"
                   name="p24"
                   placeholder="Calle" />
            </label>
            <label for="recommed-3">
            <input type="text"
                    id="p25"
                   name="p25"
                   placeholder="Numero" />
            </label>
            <label for="recommed-3">
                   <input type="text"
                   id="p26"
                   name="p26"
                   placeholder="Colonia" />
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p27"
                   name="p27"
                   placeholder="Codigo postal" />
            </label>
            <hr>
            <label>
            Ciudad
            </label>
            <label for="recommed-3">
            <input type="text"
                    id="p28"
                   name="p28"
                   placeholder="Ciudad" />
            </label>
            <label>
            Municipio
            </label>
            <label for="recommed-3">
            <input type="text"
                    id="p29"
                   name="p29"
                   placeholder="Municipio" />
            </label>
            <label>
            Estado
            </label>
            <label for="recommed-3">
            <input type="text"
                    id="p30"
                   name="p30"
                   placeholder="Estado" />
            </label>
            <label>
            Telefono
            </label>
            <label for="recommed-3">
            <input type="number"
                    id="p31"
                   name="p31"
                   placeholder="Telefono" />
            </label>
            <label>
            Fax
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p32"
                   name="p32"
                   placeholder="Fax" />
            </label>
            <label>
            E-m@il
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p33"
                   name="p34"
                   placeholder="E-m@il" />
            </label>
            <label>
            Pagina web
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p35"
                   name="p35"
                   placeholder="Pagina web" />
            </label>
            <label>
            jefe inmediato
            </label>
            <label for="recommed-3">
            <input type="text"
                   id="p36"
                   name="p36"
                   placeholder="jefe inmediato" />
            </label>
        </div>
        <div class="form-control">
            <label>
            13 Sector Económico de la Empresa u Organización 
            </label>
                <hr>
            <!-- Input Type Radio Button -->
            <label >SECTOR PRIMARIO:</label>
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p37"
                       name="p37">Agroindustria</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p37"
                       name="p37">Pesquero</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p37"
                       name="p37">Minero</input>
            </label>
            <input type="text"
                   id="p37"
                   name="p37"
                   placeholder="Otro" />
            </label>
        </div>
        <div class="form-control">
            <!-- Input Type Radio Button -->
            <label >SECTOR SECUNDARIO:</label>
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p38"
                       name="p38">Industrial</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p38"
                       name="p38">Construcción</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p38"
                       name="p38">Petrolero</input>
            </label>
            <input type="text"
                   id="p38"
                   name="p38"
                   placeholder="Otro" />
            </label>
        </div>
        <div class="form-control">
            <label >SECTOR TERCIARIO:</label>
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p39"
                       name="p39">Educativo</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p39"
                       name="p39">Turismo</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p39"
                       name="p39">Comercio</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p39"
                       name="p39">Servicios Financieros</input>
            </label>
            <input type="text"
                   id="p39"
                   name="p39"
                   placeholder="Otro" />
            </label>
        </div>
        <div class="form-control">
            <label>
            14 Tamaño de la empresa u organización 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p40"
                       name="p40">Microempresa (1-30)</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p40"
                       name="p40">Pequeña (31-100)</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p40"
                       name="p40">Mediana (101-500)</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p40"
                       name="p40">Grande (más de 500)</input>
            </label>
        </div>
  
        <!-- Multi-line Text Input Control -->
        </div>
            </div>
    </div>
    <div class="titulo_boton2" id="btn2">
    <a style='cursor: pointer;' onclick="myFunction2()" title="" >Atras</a>
            
        </div>

        <div class="titulo_boton3" id="btn3">
    <a style='cursor: pointer;' onclick="myFunction3()" title="" >Siguinte</a>
            
        </div>
        <div id="contenido3">
        <div class="form" >
    <div id="form">

        <h4>IV. DESEMPEÑO PROFESIONAL DE LOS EGRESADOS </h4>
        <h6>Marcar los campos que correspondan a su trayectoria profesional </h6>
        <div class="form-control">
            <label>
            Eficiencia para realizar las actividades laborales, en relación con su formación académica 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p41"
                       name="p41">Muy eficiente</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p41"
                       name="p41">Eficiente</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p41"
                       name="p41">Poco eficiente</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p41"
                       name="p41">Deficiente</input>
            </label>
        </div>
        <div class="form-control">
            <label>
            Cómo califica su formación académica con respecto a su desempeño laboral 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p42"
                       name="p42">Excelente</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p42"
                       name="p42">Bueno</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p42"
                       name="p42">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p42"
                       name="p42">Mala</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="0"
                       id="p42"
                       name="p42">Pésimo</input>
            </label>
        </div>

        <div class="form-control">
            <label>
           Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional 
            </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p43"
                       name="p43">Excelente</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                value="3"
                       id="p43"
                       name="p43">Bueno</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="2"
                       id="p43"
                       name="p43">Regular</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="1"
                       id="p43"
                       name="p43">Mala</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                value="0"
                       id="p43"
                       name="p43">Pésimo</input>
            </label>
        </div>
        <label>
            Aspectos que valora la empresa u organismo para la contratación de egresados:            </label>
        <div class="form-control">
        <label>
        1. Área o Campo de Estudio 
        </label>
 
            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                value="4"
                       id="p44"
                       name="p44">5</input>
                       <input type="radio"
                       id="p44"
                       value="3"
                       name="p44">4</input>
                       <input type="radio"
                       value="2"
                       id="p44"
                       name="p44">3</input>
                       <input type="radio"
                       value="1"
                       id="p44"
                       name="p44">2</input>
                       <input type="radio"
                       value="0"
                       id="p44"
                       name="p44">1</input>
            </label>
            <label>
        2. Titualcion
        </label>
            <label for="recommed-1">
                <input type="radio"
                       id="p45"
                       value="4"
                       name="p45">5</input>
                       <input type="radio"
                       id="p45"
                       value="3"
                       name="p45">4</input>
                       <input type="radio"
                       id="p45"
                       value="2"
                       name="p45">3</input>
                       <input type="radio"
                       id="p45"
                       value="1"
                       name="p45">2</input>
                       <input type="radio"
                       id="p45"
                       value="0"
                       name="p45">1</input>
            </label>
            <label>
            <label>
            3. Experiencia Laboral/práctica (antes de egresar) 
        </label>
        <label for="recommed-1">
                <input type="radio"
                       id="p46"
                       value="4"
                       name="p46">5</input>
                       <input type="radio"
                       id="p46"
                       value="3"
                       name="p46">4</input>
                       <input type="radio"
                       id="p46"
                       value="2"
                       name="p46">3</input>
                       <input type="radio"
                       id="p46"
                       value="1"
                       name="p46">2</input>
                       <input type="radio"
                       id="p46"
                       value="0"
                       name="p46">1</input>
            </label>
            <label >
            4. Competencia Laboral: Habilidad para resolver problemas, capacidad de análisis, habilidad 
            para el aprendizaje, creatividad, administración del tiempo, capacidad de negociación, 
            habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc. 
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="p47"
                       value="4"
                       name="p47">5</input>
                       <input type="radio"
                       id="p47"
                       value="3"
                       name="p47">4</input>
                       <input type="radio"
                       id="p47"
                       value="2"
                       name="p47">3</input>
                       <input type="radio"
                       id="p47"
                       value="1"
                       name="p47">2</input>
                       <input type="radio"
                       id="p47"
                       value="0"
                       name="p47">1</input>
            </label>
            <label >
            5. Posicionamiento de la Institución de Egreso 
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="p48"
                       value="4"
                       name="p48">5</input>
                       <input type="radio"
                       id="p48"
                       value="3"
                       name="p48">4</input>
                       <input type="radio"
                       id="p48"
                       value="2"
                       name="p48">3</input>
                       <input type="radio"
                       id="p48"
                       value="1"
                       name="p48">2</input>
                       <input type="radio"
                       id="p48"
                       value="0"
                       name="p48">1</input>
            </label>
            <label >
            6. Conocimiento de Idiomas Extranjeros 
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="p49"
                       value="4"
                       name="p49">5</input>
                       <input type="radio"
                       id="p49"
                       value="3"
                       name="p49">4</input>
                       <input type="radio"
                       id="p49"
                       value="2"
                       name="p49">3</input>
                       <input type="radio"
                       id="p49"
                       value="1"
                       name="p49">2</input>
                       <input type="radio"
                       id="p49"
                       value="0"
                       name="p49">1</input>
            </label>
            <label >
            7. Recomendaciones/ referencias 
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="p50"
                       value="4"
                       name="p50">5</input>
                       <input type="radio"
                       id="p50"
                       value="3"
                       name="p50">4</input>
                       <input type="radio"
                       id="p50"
                       value="2"
                       name="p50">3</input>
                       <input type="radio"
                       id="p50"
                       value="1"
                       name="p50">2</input>
                       <input type="radio"
                       id="p50"
                       value="0"
                       name="p50">1</input>
            </label>
            <label>
            8. Personalidad/ Actitudes
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="p51"
                       value="4"
                       name="p51">5</input>
                       <input type="radio"
                       id="p51"
                       value="3"
                       name="p51">4</input>
                       <input type="radio"
                       id="p51"
                       value="2"
                       name="p51">3</input>
                       <input type="radio"
                       id="p51"
                       value="1"
                       name="p51">2</input>
                       <input type="radio"
                       id="p51"
                       value="0"
                       name="p51">1</input>
            </label>
            <label>
            9. Capacidad de liderazgo
            </label>
            <label for="recommed-1">
                <input type="radio"
                       id="p52"
                       value="4"
                       name="p52">5</input>
                       <input type="radio"
                       id="p52"
                       value="3"
                       name="p52">4</input>
                       <input type="radio"
                       id="p52"
                       value="2"
                       name="p52">3</input>
                       <input type="radio"
                       id="p52"
                       value="1"
                       name="p52">2</input>
                       <input type="radio"
                       id="p52"
                       value="0"
                       name="p52">1</input>
            </label>
            <label >
                Otros:
            </label>
            <input type="text"
                       id="p53"
                       name="p53"></input>
        </div>
        
        <h4>V. EXPECTATIVAS DE DESARROLLO, SUPERACIÓN PROFESIONAL Y DE ACTUALIZACIÓN</h4>
        <h6>V.1 ACTUALIZACIÓN DE CONOCIMIENTOS </h6>
        <div class="form-control">
        
        <label>
        Le gustaría tomar cursos de actualización
        </label>

        <label for="recommed-1">
                <input type="radio"
                       id="p54"
                       value="si"
                       name="p54">Si</input>
                       <input type="radio"
                       id="p54"
                       value="no"
                       name="p54">No</input>
                       <input type="text"
                       id="p55"
                       name="p55" placeholder="¿Cuales?"></input>
            <label>
            Le gustaría tomar algún Posgrado: 
            </label>
            <input type="radio"
                       id="p56"
                       value="si"
                       name="p56">Si</input>
                       <input type="radio"
                       id="p56"
                       value="no"
                       name="p56">No</input>
                       <input type="text"
                       id="p57"
                       name="p57" placeholder="¿Cual?"></input>
                    
            </label>

        </div>
        <div class="form-control">
        <h4>VI. PARTICIPACIÓN SOCIAL DE LOS EGRESADOS:</h4>
        <label>
        1 Pertenece a organizaciones sociales: 
        </label>
        </label>
            <input type="radio"
                       id="p58"
                       value="si"
                       name="p58">Si</input>
                       <input type="radio"
                       id="p58"
                       value="no"
                       name="p58">No</input>
                       <input type="text"
                       id="p59"
                       name="p59" placeholder="¿Cuales?"></input>
                    
            </label>
                
        <label>
        2 Pertenece a organismos de profesionistas:
        </label>
        </label>
            <input type="radio"
                       id="p60"
                       value="si"
                       name="p60">Si</input>
                       <input type="radio"
                       id="p60"
                       value="no"
                       name="p60">No</input>
                       <input type="text"
                       id="p61"
                       name="p61" placeholder="¿Cuales?"></input>
                    
            </label>

            <label>
            3 Pertenece a la asociación de egresados: 
            </label>
            </label>
            <input type="radio"
                       id="p62"
                       value="si"
                       name="p62">Si</input>
                       <input type="radio"
                       id="p62"
                       value="no"
                       name="p62">No</input>
                       
            </label>
            
            <h4>
            VIII. COMENTARIOS Y SUGERENCIAS
            </h4>

           <label>
           Opinión o recomendación para mejorar la formación profesional de un egresado de su carrera 
           </label>

            <input type="text"
                       id="p63"
                       name="p63" placeholder="Comentarios"></input>

            </div>
        <!-- Multi-line Text Input Control -->
        
            </div>
    </div>
    <div class="titulo_boton4" id="btn2">
    <a style='cursor: pointer;' onclick="myFunction2()" title="" >Atras</a>
            
        </div>

        <div class="titulo_boton5" id="btn3">
    <a style='cursor: pointer;' onclick="myFunction2()" title="" >Siguinte</a>
            
        </div>
        
        </div>
          <div id="btnsend">
          <input type="hidden" name="id_alumno" value="<?php echo $alumno->id_alumno; ?>">
        <input style="background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;" type="submit" class="btn btn-primary" value="Agregar">
      </div>
        </form>
        
</body>
  
</html>
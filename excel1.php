<?php
include_once "database.php";
$sentencia = $conn -> query("select * from tb_empresa");
$empresas = $sentencia->fetchAll(PDO::FETCH_OBJ); 
header("Pragma: public");
header("Expires: 0");
$filename = "reporteEmpresas.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>

<table class="table table-striped">
    <center>
        <thead>
                <tr>
                    <th colspan="18">
                    <center>
                    UNIDAD ACADEMICA LA HUERTA
                    </center>    
                    </th>
                </tr>
        </thead>
    </center>
  <thead>
    <tr>
        
      <th scope="col"></th>
      <th scope="col" colspan="2">
        <center>
        SERV. ESCOLARES
        </center>
        </th>
      <th scope="col" colspan="4">
      <center>
      AREA ACADEMICA
      </center>  
      </th>
      <th scope="col" colspan="2">
      <center>
      N/A
      </center>  
      </th>
      <th scope="col" colspan="7">
      <center>
      AREA ACADEMICA
      </center>  
      </th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <tr></tr>
      <th scope="row"></th>
      <td colspan="2" style="width=50px;">(Servicio Escolares) Total de egresados de Licenciatura al cierre de   junio de 2021</td>
      <td colspan="2">No. de estudiantes a quienes se les aplicó Estudio de seguimiento a 3 meses de su egreso.</td>
      <td colspan="2">No. de estudiantes a quienes se les aplicó Estudio de seguimiento a 6 meses de su egreso</td>
      <td colspan="2">Total de Egresados de Posgrado en el año</td>
      <td>No. Total de egresados en el año N/ total en seguimiento *100%</td>
      <td colspan="2">Número de egresados incorporados al mercado laboral en los primeros doce meses de su egreso</td>
      <td colspan="3" >Mapeo de inserción laboral de egresados,% de ubicación por sector </td>
      <td>No. de estudios realizados para conocer la percepción de empleadores</td>
      <td>Periodo de realización: semestral/anual</td>
    </tr>
    <tr>
    <th scope="row"></th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th colspan=""></th>
      <th >Hombre</th>
      <th>Mujer</th>
      <th>Publico</th>
      <th>Privado</th>
      <th>Social</th>
      <th></th>
      <th></th>
    </tr>
    <tr>
    <th scope="row">ARQUITECTURA</th>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>hoijofn</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
    </tr>
    <tr>
    <th scope="row">INGENIERÍA EN INDUSTRIAS ALIMENTARIAS</th>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
    </tr>
    <tr>
    <th scope="row">INGENIERÍA EN SISTEMAS COMPUTACIONALES</th>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
    </tr>
    <tr>
    <th scope="row">LICENCIATURA EN ADMINISTRACIÓN</th>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
    </tr>
    <tr>
    <th scope="row">INGENIERÍA EN GESTIÓN EMPRESARIAL</th>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
    </tr>
    <tr>
    <th scope="row">INGENIERÍA EN GESTIÓN EMPRESARIAL</th>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>





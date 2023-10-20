<?php
include_once "database.php";
$sentencia = $conn -> query("select * from tb_alumno where alu_estado='activo'");
$reservacion = $sentencia->fetchAll(PDO::FETCH_OBJ); 
header("Pragma: public");
header("Expires: 0");
$filename = "reporteAlumnos.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>

<table style="text-align:center;" border='1' cellpadding=1 cellspacing=1 >
                        <thead style="background-color:#cecece">
                            <tr>
                                <th scope="col">Numero de control</th>
                                <th scope="col">Nombre</th>
                                <!-- <th scope="col"></th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Residencia</th>
                                <th scope="col">Llegada</th>
                                <th scope="col">Salida</th>
                                <th scope="col">Habitacion</th>
                                <th scope="col">No. Personas</th> -->
                                <!-- <th scope="col">Deposito</th> -->
                                <!-- <th scope="col">Fecha Reservacion</th>
                                <th scope="col">Tipo Pago</th>
                                <th scope="col">Numero de Noches</th>
                                <th scope="col">Total</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($reservacion as $dato){ 
                            ?>

                             <tr>
                                <td scope="row"><?php echo $dato->alu_nc; ?></td>
                                <td><?php echo $dato->alu_nombre; ?></td>
                               
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>





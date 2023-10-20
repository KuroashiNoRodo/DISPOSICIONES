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

<table style="text-align:center;" border='1' cellpadding=1 cellspacing=1 >
                        <thead style="background-color:#cecece">
                            <tr>
                                <th scope="col">Numero de la Empresa</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Domicilio</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($empresas as $dato){ 
                            ?>

                             <tr>
                                <td scope="row"><?php echo $dato->em_nombre; ?></td>
                                <td><?php echo $dato->em_ciudad; ?></td>
                                <td><?php echo $dato->em_domicilio; ?></td>
                                <td><?php echo $dato->em_municipio; ?></td>
                                <td><?php echo $dato->em_estado; ?></td>
                                <td><?php echo $dato->em_numero; ?></td>
                                <td><?php echo $dato->em_email; ?></td>
                               
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>





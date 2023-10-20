<?php
// Conectar a la base de datos

$conn = new mysqli('localhost', 'root', '', 'didisee');

// Obtener los datos de la base de datos
$sql = "SELECT COUNT(encuesta) AS cantidad_total FROM tb_alumno WHERE encuesta=0";
$result = $conn->query($sql);

// Crear un array con los datos para el gráfico
$data = array();
while ($row = $result->fetch_assoc()) {
  $data[] = array(
    'cantidad' => $row['cantidad_total']
  );
}

// Convertir los datos a formato JSON
echo json_encode($data);
?>
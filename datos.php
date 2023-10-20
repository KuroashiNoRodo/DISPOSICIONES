<?php
// Conectar a la base de datos

$conn = new mysqli('localhost', 'root', '', 'didisee');

// Obtener los datos de la base de datos
$sql = "SELECT (select count(encuesta) from tb_alumno where encuesta > 0) as contestadas,
(select count(encuesta) from tb_alumno where encuesta = 0) as no_contestadas FROM tb_alumno LIMIT 1";
$result = $conn->query($sql);

// Crear un array con los datos para el gráfico
$data = array();
while ($row = $result->fetch_assoc()) {
  $data[] = array(
    'cantidad' => $row['contestadas'],
    'cantidad2' => $row['no_contestadas'],
  );
}

// Convertir los datos a formato JSON
echo json_encode($data);
?>

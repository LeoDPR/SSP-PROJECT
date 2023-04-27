<?php
// Conexión a la base de datos
include("../config.php");

// Consulta SQL para recuperar las noticias
$sql = "SELECT * FROM eventos ORDER BY id_evento DESC LIMIT 3;";
$result = mysqli_query($conn, $sql);

// Convertir los resultados a formato JSON
$noticias = array();
while ($row = mysqli_fetch_assoc($result)) {
    $noticias[] = $row;
}
echo json_encode($noticias);
mysqli_close($conn);
?>
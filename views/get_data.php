<!-- Este codigo obtendra los datos de los eventos -->
<?php

include('./config.php');

$id = $_GET['page_view'];
/* Esta consulta lo que hace es, obtener toda la informacion del evento y el nombre y el apellido de los autores.  Como el nombre y el apellido 
 se encuentran en diferentes columnas se utiliza ¨CONCAT¨ y lo que hace es unir los caracteres en una sola columna llamada nombre_autor, en caso de
 que existan 2 o mas autores se utiliza GROUP_CONCAT para unir los diferentes autores en una sola columna separados por una coma*/
$sql = "SELECT eventos.*, GROUP_CONCAT(CONCAT(autores.nombre, ' ', autores.apellido) SEPARATOR ', ') as nombre_autor 
FROM eventos 
INNER JOIN eventos_autores ON eventos.id_evento = eventos_autores.id_evento 
INNER JOIN autores ON eventos_autores.id_autor = autores.id_autor
WHERE eventos.id_evento = $id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query)

?>

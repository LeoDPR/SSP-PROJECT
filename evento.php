<?php
include('./views/get_data.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/evento.css">
  </head>
  <body>
    <?php include './views/navbar.php'; ?>
    <main>
		<article>
			<section>
				<div class="imagen">
					<img src="./images/eventos/<?php echo $result['imagen_evento'] ?>" alt="Imagen del artículo">
        </div>
				<div class="informacion">
					<h1><?php echo $result['nombre'] ?></h1>
          <h4>Autor: </h4><p> <?php echo $result['nombre_autor'] ?>.</p> <!-- Falta agregar la consulta relacional -->
          <h4>Fecha de inicio: </h4><p><?php echo $result['fecha_inicio'] ?></p>
          <h4>Fecha final: </h4><p><?php echo $result['fecha_final'] ?></p>
          <h4>Lugar: </h4><p><?php echo $result['lugar'] ?>.</p>
          <h4>Descripción: </h4><p><?php echo $result['descripcion'] ?></p>
				</div>
			</section>
			<footer>
				
			</footer>
		</article>
	</main>

    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar la barra de navegacion -->

  </body>
</html>
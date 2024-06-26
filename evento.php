<?php
include('./views/get_data.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $result['nombre'] ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/navbar_footer.css">
    <link rel="stylesheet" href="./css/styles2.css">
  </head>
  <body>
    <?php include './views/navbar.php'; ?>
    <div id="particles-js"></div>
    <main class="show_info">
		<article>
			<section class="box_info">
				<div class="imagen__evento">
					<img src="./images/eventos/<?php echo $result['imagen_evento'] ?>" alt="Imagen del artículo">
        </div>
				<div class="informacion__evento">
					<h1><?php echo $result['nombre'] ?></h1>
          <h4>Organizador: </h4><p> <?php echo $result['nombre_autor'] ?>.</p> 
          <h4>Fecha de inicio: </h4><p><?php echo $result['fecha_inicio'] ?></p>
          <h4>Fecha final: </h4><p><?php echo $result['fecha_final'] ?></p>
          <h4>Lugar: </h4><p><?php echo $result['lugar'] ?>.</p>
          <h4>Descripción: </h4><p><?php echo $result['descripcion'] ?></p>
				</div>
			</section>
		</article>
	</main>

    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar la barra de navegacion -->
    <script src="./js/main2.js"></script>
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'es', includedLanguage: 'en, es'}, 'google_translate_element');
        }
      </script>
  </body>
</html>
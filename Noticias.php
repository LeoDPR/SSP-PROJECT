<?php
include('./config.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Noticias</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/navbar_footer.css">
    <link rel="stylesheet" href="./css/styles2.css">

</head>

<body id="body__noticias">
    <?php include './views/navbar.php'; ?>
    <h1 class="titulo">Eventos</h1>
    <!--  /////////////////////   Mostrar eventos existentes /////////////////   -->
    <div id="eventos">
        <div class="cards">
            <?php
            $select = mysqli_query($conn, "SELECT * FROM eventos ORDER BY id_evento DESC");

            while ($row = mysqli_fetch_assoc($select)) {
                ?>

                <div class="card__container">

                    <div class="card">
                        <figure>
                            <img src="./images/eventos/<?php echo $row['imagen_evento']; ?>" class="card__img" />
                        </figure>
                        <div class="card__paragraph">
                            <h4 class="card__title">
                                <?php echo $row['nombre']; ?>
                            </h4>
                            <a href="evento.php?page_view=<?php echo $row['id_evento']; ?>" class="modal__open">Leer Más</a>
                        </div>

                    </div>

                </div>

            <?php }
            ;
            ?>
        </div>
    </div>

    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar el footer -->

</body>

</html>
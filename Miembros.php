<?php
include('./config.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Trabajos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/navbar_footer.css">

</head>

<body>
    <?php include './views/navbar.php'; ?>

    <h1 class="titulo">Miembros</h1>
    <div id="Investigaciones">
            <div class="cards">
                <?php
                    $select = mysqli_query($conn, "SELECT * FROM autores where miembro=1");

                    while($row = mysqli_fetch_assoc($select)) {
                ?>
                
                    <div class="card__container">
                        <div class="card">
                            <figure>
                                <img src="trabajos/investigaciones/images/<?php echo $row['imagen_autor']; ?>" class="card__img"/>
                            </figure>
                            <div class="card__paragraph">
                                <h4 class="card__title"><?php echo $row['nombre']." ".$row['apellido']; ?></h4>
                                <a href="info_trabajo.php?titulo=<?php echo $row['id_autor']; ?>" class="modal__open">Leer Más</a>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>

    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar el footer -->
    
</body>

</html>
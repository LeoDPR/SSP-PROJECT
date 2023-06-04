<?php
include('./config.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Miembros</title>
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

    <h1 class="titulo">Miembros</h1>
    <div id="miembros">
        <div class="cards__miembros">
            <?php
            $select = mysqli_query($conn, "SELECT * FROM autores where miembro=1");

            while ($row = mysqli_fetch_assoc($select)) {

                ?>
                    <div class="card__miembro">
                        <figure class="img__miembro__container">
                            <img src="images/miembros/<?php echo $row['imagen_autor']; ?>" class="card__miembro__img" />
                        </figure>
                        <div class="card__miembro__paragraph">
                            <h3 class="card__miembro__title">
                                <?php echo $row['nombre'] . " " . $row['apellido']; ?>
                            </h3>
                            <button class="button_modal" onclick="openModal(<?php echo $row['id_autor']; ?>)">
                                Mas informacion
                            </button>
                        </div>
                    </div>

            <div id="modal<?php echo $row['id_autor']; ?>" class="modal-container">
                <div class="modal">
                    <h1 class="subtitle2">Informacion del miembro</h1>
                    <figure class="img__miembro__modal">
                            <img src="images/miembros/<?php echo $row['imagen_autor']; ?>" class="modal__miembro__img" />
                        </figure>
                    <h1 class="subtitle3">
                        <?php echo $row['nombre'] . " " . $row['apellido']; ?>
                    </h1>
                    <p>
                        <?php echo $row['descripcion']; ?>
                    </p>
                    <button class="button_modal" id="close<?php echo $row['id_autor']; ?>" onclick="closeModal(<?php echo $row['id_autor']; ?>)">Cerrar</button>
                </div>
            </div>

        <?php }
            ; ?>
    </div>



    </div>
    </div>





    <script src="./js/main2.js"></script>

    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar el footer -->
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'es', includedLanguage: 'en, es'}, 'google_translate_element');
        }
    </script>
</body>

</html>
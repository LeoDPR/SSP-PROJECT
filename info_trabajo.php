
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
    <link rel="stylesheet" href="./css/styles2.css">
</head>

<body onload="sendRequest('<?php echo $_GET['titulo'] ?>', '<?php echo $_GET['tipo'] ?>')">
    <?php include './views/navbar.php'; ?>

    <div id="particles-js"></div>

    <div id="Documentos" class="">

    </div>

    

    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar la barra de navegacion -->
    <script src="./js/app.js"></script>
    <script src="./js/main2.js"></script>
    <script src="./js/particles.min.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'es', includedLanguage: 'en, es'}, 'google_translate_element');
        }
    </script>
</body>

</html>
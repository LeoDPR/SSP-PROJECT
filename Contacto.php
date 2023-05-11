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
        <link rel="stylesheet" href="./css/styles2.css">

    </head>
    <body>
        <?php include './views/navbar.php'; ?>


        <!--  ///////////////////// Contacto /////////////////   -->

        <div id="Contacto">
            <div class="contacto__img">
            </div>
            <div class="contacto__title">
                <h2>¿Tienes alguna duda o comentario? Llena el formulario y nos pondremos en contacto contigo</h2>
            </div>
            <br />
            <!-- https://formsubmit.co/adan.escamilla@uabc.edu.mx -->
            <form action="https://formsubmit.co/adan.escamilla@uabc.edu.mx " method="POST" id="Form">
                <div class="form">
                    <div class="grupo">
                        <input type="text" name="nombre"  required /><span class="barra"></span>
                        <label for="">Nombre</label>
                    </div>
                    <div class="grupo">
                        <input type="tel" name="telefono"  required /><span class="barra"></span>
                        <label for="">Teléfono</label>
                    </div>
                    <div class="grupo">
                        <input type="email" name="email"  required /><span class="barra"></span>
                        <label for="">Correo Electrónico</label>
                    </div>
                    <div class="grupo">
                        <input type="text" name="asunto"  required /><span class="barra"></span>
                        <label for="">Asunto</label>
                    </div>
                    <div class="grupo">
                        <textarea name="comentarios" rows="8" cols="40"></textarea>
                        <label for="">¿Cómo podemos ayudarte?</label>
                    </div>
                    <button type="submit" onclick="return confirmacion()" name="enviar" >Enviar</button>
                </div>
            </form>
            <div class="media"></div>
        </div>
    
        <?php include './views/footer.php'; ?> <!-- Sirve para mostrar el footer -->

        <script>
            function confirmacion() {
                var respuesta = confirm("Esta apunto de enviar un mensaje al Cuerpo Academico. ¿Desea enviar el mensaje?");

                if (respuesta == true) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </body>

</html>
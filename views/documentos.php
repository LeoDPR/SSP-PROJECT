<?php

include('../config.php');

if (isset($_POST['investigacion'])) {

    $titulo = $_POST['investigacion'];
    $tipo = $_POST['tipo'];
    echo 'Categoria: '.$tipo;

    switch ($tipo) {
        case 'articulo':
            $art = mysqli_query($conn, "SELECT * FROM articulos WHERE nombre = '$titulo'");
            if ($articulos = mysqli_fetch_assoc($art)) {
                ?>
                <div>
                    <p>
                        <?php echo $articulos['nombre']; ?>
                    </p>
                    <iframe src="./trabajos/articulos/docs/<?php echo $articulos['url_descarga']; ?>" width="420px"
                        height="720px"></iframe>
                </div>

                <?php
            }
            break;
        case 'libro':
            $lib = mysqli_query($conn, "SELECT * FROM libros WHERE titulo = '$titulo'");
            if ($libros = mysqli_fetch_assoc($lib)) {
                ?>
                <div>
                    <p>
                        <?php echo $libros['titulo']; ?>
                    </p>
                    <iframe src="./trabajos/libros/docs/<?php echo $libros['url_descarga']; ?>" width="420px"
                        height="720px"></iframe>
                </div>

                <?php
            }

            break;
        case 'investigacion':
            $investigacion = mysqli_query($conn, "SELECT * FROM investigaciones WHERE titulo = '$titulo'");
            if ($investigaciones = mysqli_fetch_assoc($investigacion)) {
                ?>
                <div>
                    <p>
                        <?php echo $investigaciones['titulo']; ?>
                    </p>
                    <iframe src="./trabajos/investigaciones/docs/<?php echo $investigaciones['url_descarga']; ?>" width="420px"
                        height="720px"></iframe>
                </div>

                <?php
            }
            break;
        default:
            # code...
            break;
    }
    /*
    $investigacion = mysqli_query($conn, "SELECT * FROM investigaciones WHERE titulo = '$titulo'");
    if ($investigaciones = mysqli_fetch_assoc($investigacion)) {
    echo "entra al if de investigaciones";
    ?>
    <div>
    <p>
    <?php echo $investigaciones['titulo']; ?>
    </p>
    <iframe src="./trabajos/investigaciones/docs/<?php echo $investigaciones['url_descarga']; ?>" width="420px"
    height="720px"></iframe>
    </div>
    <?php
    } elseif ($art = mysqli_query($conn, "SELECT * FROM articulos WHERE nombre = '$titulo'" && mysqli_num_rows($art) > 0)) {
    echo "entra al if de articulo";
    $articulos = mysqli_fetch_assoc($art)
    ?>
    <div>
    <p>
    <?php echo $articulos['nombre']; ?>
    </p>
    <iframe src="./trabajos/articulos/docs/<?php echo $articulos['url_descarga']; ?>" width="420px"
    height="720px"></iframe>
    </div>
    <?php
    } elseif ($lib = mysqli_query($conn, "SELECT * FROM libros WHERE titulo = '$titulo'")) {
    echo "entra al if lib";
    } else {
    echo "No entra en ningun if";
    }
    */
}

?>
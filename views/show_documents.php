<?php

include('../config.php');

if (isset($_POST['investigacion'])) {

    $titulo = $_POST['investigacion'];
    $tipo = $_POST['tipo'];

    switch ($tipo) {
        case 'Artículo':
            $art = mysqli_query($conn, "SELECT * FROM articulos WHERE nombre = '$titulo'");
            if ($articulos = mysqli_fetch_assoc($art)) {
                ?>
                <div class="articulo__img">
                </div>
                <div class="doc">
                    <div class="doc__title">
                    <h2>
                        <?php echo $articulos['nombre']; ?>
                    </h2>
                    </div>
                    <div class="doc__summary">
                        <img src="./trabajos/articulos/images/<?php echo $articulos['imagen'] ?>" class="doc__image" />
                        <div class="doc__description">
                            <p><?php echo $articulos['descripcion']; ?></p>
                            <br />
                            <p><strong>Categoria:</strong> <?php echo $articulos['categoria']; ?></p>
                            <br />
                            <p><strong>Fecha de Publicación:</strong> <?php echo $articulos['fecha_publicacion']; ?></p>
                            <br />
                            <p><strong>Fuente de Publicación:</strong> <?php echo $articulos['fuente_publicacion']; ?></p>
                            <br />
                            <p><strong>ISSN:</strong> <?php echo $articulos['issn']; ?></p>
                            <br />
                            <p><strong>Indizado:</strong> <?php echo $articulos['indizado']; ?></p>
                            <br />
                            <p><strong>Arbitrado:</strong> <?php echo $articulos['arbitrado']; ?></p>
                        </div>
                    </div>
                    <div class="separator">
                        <h1 class="title__separator"><?php echo $tipo; ?></h1>
                    </div>
                    <div class="frame__container">
                        <iframe src="./trabajos/articulos/docs/<?php echo $articulos['url_descarga']; ?>" class="doc__frame" ></iframe>
                    </div>
                </div>

                <?php
            }
            break;
        case 'Libro':
            $lib = mysqli_query($conn, "SELECT * FROM libros WHERE titulo = '$titulo'");
            if ($libros = mysqli_fetch_assoc($lib)) {
                ?>
                <div class="doc__img">
                </div>
                <div class="doc">
                    <div class="doc__title">
                    <h2>
                        <?php echo $libros['titulo']; ?>
                    </h2>
                    </div>
                    <div class="doc__summary">
                        <img src="./trabajos/libros/images/<?php echo $libros['imagen'] ?>" class="doc__image" />
                        <div class="doc__description">
                            <p><?php echo $libros['descripcion']; ?></p>
                            <br />
                            <p><strong>Categoria:</strong> <?php echo $libros['categoria']; ?></p>
                            <br />
                            <p><strong>Fecha de Publicación:</strong> <?php echo $libros['fecha_publicacion']; ?></p>
                            <br />
                            <p><strong>Editorial:</strong> <?php echo $libros['editorial']; ?></p>
                            <br />
                            <p><strong>ISBN:</strong> <?php echo $libros['isbn']; ?></p>
                        </div>
                    </div>
                    <div class="separator">
                        <h1 class="title__separator"><?php echo $tipo; ?></h1>
                    </div>
                    <div class="frame__container">
                        <iframe src="./trabajos/libros/docs/<?php echo $libros['url_descarga']; ?>" class="doc__frame" ></iframe>
                    </div>
                </div>

                <?php
            }

            break;
        case 'Investigación':
            $investigacion = mysqli_query($conn, "SELECT * FROM investigaciones WHERE titulo = '$titulo'");
            if ($investigaciones = mysqli_fetch_assoc($investigacion)) {
                ?>
                 <div class="inv__img">
                </div>
                <div class="doc">
                    <div class="doc__title">
                    <h2>
                        <?php echo $investigaciones['titulo']; ?>
                    </h2>
                    </div>
                    <div class="doc__summary">
                        <img src="./trabajos/investigaciones/images/Riti.png" class="doc__image" />
                        <div class="doc__description">
                            <p><?php echo $investigaciones['descripcion']; ?></p>
                            <br />
                            <p><strong>Peridio de Inicio:</strong> <?php echo $investigaciones['periodo_inicio']; ?></p>
                            <br />
                            <p><strong>Peridio de Fin:</strong> <?php echo $investigaciones['periodo_fin']; ?></p>
                            <br />
                            <p><strong>Año de Inicio:</strong> <?php echo $investigaciones['anio_inicio']; ?> Año de Fin: <?php echo $investigaciones['anio_fin']; ?></p>
                        </div>
                    </div>
                    <div class="separator">
                        <h1 class="title__separator"><?php echo $tipo; ?></h1>
                    </div>
                    <div class="frame__container">
                        <iframe src="./trabajos/investigaciones/docs/<?php echo $investigaciones['url_descarga']; ?>" class="doc__frame" ></iframe>
                    </div>
                </div>

                <?php
            }
            break;
        default:
            # code...
            break;
    }
   
}

?>
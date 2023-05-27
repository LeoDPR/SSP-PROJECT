<?php

include('../config.php');

if (isset($_POST['investigacion'])) {

    $titulo = $_POST['investigacion'];
    $tipo = $_POST['tipo'];



    switch ($tipo) {
        case 'Artículo':

            $sql = "SELECT articulos.*, GROUP_CONCAT(CONCAT(autores.nombre, ' ', autores.apellido) SEPARATOR ', ') as nombre_autor
                 FROM articulos
                 INNER JOIN articulos_autores ON articulos.id_articulos = articulos_autores.id_articulo
                 INNER JOIN autores ON articulos_autores.id_autor = autores.id_autor
                 WHERE articulos.nombre = ?";

            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $titulo);
            mysqli_stmt_execute($stmt);

            $art = mysqli_stmt_get_result($stmt);

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
                            <p>
                                <?php echo $articulos['descripcion']; ?>
                            </p>
                            <br />
                            <p><strong>Autores:</strong>
                                <?php echo $articulos['nombre_autor'] ?>
                            </p>
                            <br />
                            <p><strong>Categoria:</strong>
                                <?php echo $articulos['categoria']; ?>
                            </p>
                            <br />
                            <p><strong>Fecha de Publicación:</strong>
                                <?php echo $articulos['fecha_publicacion']; ?>
                            </p>
                            <br />
                            <p><strong>Fuente de Publicación:</strong>
                                <?php echo $articulos['fuente_publicacion']; ?>
                            </p>
                            <br />
                            <p><strong>ISSN:</strong>
                                <?php echo $articulos['issn']; ?>
                            </p>
                            <br />
                            <p><strong>Indizado:</strong>
                                <?php if ($articulos['indizado'] == 1){
                                    echo "Si";
                                }else{
                                    echo "No";
                                }; ?>
                            </p>
                            <br />
                            <p><strong>Arbitrado:</strong>
                                <?php   if ($articulos['arbitrado'] == 1){
                                    echo "Si";
                                }else{
                                    echo "No";
                                }; ?>
                            </p>
                        </div>
                    </div>
                    <div class="separator">
                        <h1 class="title__separator">
                            <?php echo $tipo; ?>
                        </h1>
                    </div>
                    <div class="frame__container">
                        <iframe src="./trabajos/articulos/docs/<?php echo $articulos['url_descarga']; ?>" class="doc__frame"></iframe>
                    </div>
                </div>

                <?php
            }
            break;
        case 'Libro':

            $sql = "SELECT libros.*, GROUP_CONCAT(CONCAT(autores.nombre, ' ', autores.apellido) SEPARATOR ', ') as nombre_autor FROM libros 
            INNER JOIN libros_autores ON libros.id_libros = libros_autores.id_libro 
            INNER JOIN autores ON libros_autores.id_autor = autores.id_autor 
            WHERE libros.titulo =  ?";

            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $titulo);
            mysqli_stmt_execute($stmt);

            $lib = mysqli_stmt_get_result($stmt);


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
                            <p>
                                <?php echo $libros['descripcion']; ?>
                                <br />
                            <p><strong>Autores:</strong>
                                <?php echo $libros['nombre_autor'] ?>
                            </p>
                            </p>
                            <br />
                            <p><strong>Categoria:</strong>
                                <?php echo $libros['categoria']; ?>
                            </p>
                            <br />
                            <p><strong>Fecha de Publicación:</strong>
                                <?php echo $libros['fecha_publicacion']; ?>
                            </p>
                            <br />
                            <p><strong>Editorial:</strong>
                                <?php echo $libros['editorial']; ?>
                            </p>
                            <br />
                            <p><strong>ISBN:</strong>
                                <?php echo $libros['isbn']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="separator">
                        <h1 class="title__separator">
                            <?php echo $tipo; ?>
                        </h1>
                    </div>
                    <div class="frame__container">
                        <iframe src="./trabajos/libros/docs/<?php echo $libros['url_descarga']; ?>" class="doc__frame"></iframe>
                    </div>
                </div>

                <?php
            }

            break;
        case 'Investigación':

            $sql = "SELECT investigaciones.*, GROUP_CONCAT(CONCAT(autores.nombre, ' ', autores.apellido) SEPARATOR ', ') as nombre_autor FROM investigaciones 
            INNER JOIN investigaciones_autores ON investigaciones.id_investigacion = investigaciones_autores.id_investigacion 
            INNER JOIN autores ON investigaciones_autores.id_autor = autores.id_autor 
            WHERE investigaciones.titulo =  ? AND investigaciones_autores.asociado = 0";

            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $titulo);
            mysqli_stmt_execute($stmt);

            $investigacion = mysqli_stmt_get_result($stmt);

            
            $sql = "SELECT GROUP_CONCAT(CONCAT(autores.nombre, ' ', autores.apellido) SEPARATOR ', ') as nombre_asociados FROM investigaciones 
            INNER JOIN investigaciones_autores ON investigaciones.id_investigacion = investigaciones_autores.id_investigacion 
            INNER JOIN autores ON investigaciones_autores.id_autor = autores.id_autor 
            WHERE investigaciones.titulo =  ? AND investigaciones_autores.asociado = 1";

            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $titulo);
            mysqli_stmt_execute($stmt);

            $asociados_result = mysqli_stmt_get_result($stmt);
            $asociados_names = mysqli_fetch_assoc($asociados_result);
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
                        <img src="./trabajos/investigaciones/images/researchDefault.png" class="doc__image" />
                        <div class="doc__description">
                            <p>
                                <?php echo $investigaciones['descripcion']; ?>
                            </p>
                            <br />
                            <p><strong>Autores:</strong>
                                <?php echo $investigaciones['nombre_autor'] ?>
                            </p>
                            </p>
                            <p><strong>Asociados:</strong>
                                <?php echo $asociados_names['nombre_asociados'] ?>
                            </p>
                            </p>
                            <br />
                            <p><strong>Peridio de Inicio:</strong>
                                <?php echo $investigaciones['periodo_inicio']; ?>
                            </p>
                            <br />
                            <p><strong>Peridio de Fin:</strong>
                                <?php echo $investigaciones['periodo_fin']; ?>
                            </p>
                            <br />
                            <p><strong>Año de Inicio:</strong>
                                <?php echo $investigaciones['anio_inicio']; ?> <strong>Año de Fin:</strong>
                                <?php echo $investigaciones['anio_fin']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="separator">
                        <h1 class="title__separator">
                            <?php echo $tipo; ?>
                        </h1>
                    </div>
                    <div class="frame__container">
                        <iframe src="./trabajos/investigaciones/docs/<?php echo $investigaciones['url_descarga']; ?>"
                            class="doc__frame"></iframe>
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
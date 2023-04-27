<?php
    include ('./config.php');

    if (isset($_GET['delete'])) {

        $id = $_GET['delete'];

        mysqli_query($conn, "DELETE FROM investigaciones WHERE id_investigacion = $id");
        header('location:index.php');

    };
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejidad y gestion de las organizaciones</title>
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/views.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> -->
</head>

<body>

    <header class="hero">

        <nav class="nav">
            <div class="nav__logo">
                <h2 class="nav__title">Cuerpo academico</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#Inicio" class="nav__links" onclick="mostrar_ocultarInicio()">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#Noticias" class="nav__links" onclick="mostrar_ocultarNoticias()">Noticias</a>
                </li>
                <li class="nav__items">
                    <a href="#Trabajos" class="nav__links" onclick="mostrar_ocultarTrabajos()">Trabajos</a>
                </li>
                <li class="nav__items">
                    <a href="#Miembros" class="nav__links" onclick="mostrar_ocultarMiembros()">Miembros</a>
                </li>
                <li class="nav__items">
                    <a href="#Contacto" class="nav__links" onclick="mostrar_ocultarContacto()">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#Nosotros" class="nav__links" onclick="mostrar_ocultarNosotros()">Nosotros</a>
            </ul>
        </nav>
    </header>

    <!-- /////////Inicio -->

    <div id="Inicio">
        <section class="inicio__container">
            <h1 class="inicio__title">Complejidad y gestion de las organizaciones</h1>
            <p class="inicio__paragraph">Complejidad, Gestion de la Innovacion: teoria y aplicaciones</p>
        </section>

        <main>
            <section class="news  container">
                <div class="news__container">
                    <h2 class="subtitle2">Noticias/Eventos</h2>
                    <div class="articles__news" id="articles-news">
                      
                    </div>
                </div>
            </section>

            <section class="investigaciones container">
                <h2 class="subtitle2">Investigaciones</h2>
                <div class="investigaciones__container">
                    <div class="investigaciones__texts">

                        <h2 class="subtitle3">Lorem Ipsum</h2>
                        <p class="investigaciones__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec
                            pulvinar tempus es
                            t, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec
                            eros lorem, blandi
                            t ac commodo at, malesuada et mauris.</p>
                    </div>

                    <figure class="investigaciones__picture">
                        <img src="./images/varias/research.jpg" alt="imagen de investigacion" class="investigacion__img">
                    </figure>

                </div>

            </section>
        </main>
    </div>

    <!-- //////////Noticias////////// -->

    <div id="Noticias" class="hidden">
        <h1>Noticias</h1>
    </div>


    <!-- //////////Miembros//////////// -->

    <div id="Miembros" class="hidden">
        <h1>Miembros</h1>
    </div>


    <!-- //////////Trabajos////////////// -->

    <div id="Trabajos"  class="hidden">
        <aside class="sidebar">
            <ul class="aside__list">
                <li class="sidebar__item">
                    <h2>Trabajos</h2>
                </li>
                <li class="sidebar__item"><a href="#" class="aside__links" onclick="mostrar_ocultarInvestigaciones()" >Investigaciones</a></li>
                <li class="sidebar__item"><a href="#" class="aside__links" onclick="mostrar_ocultarLibros()" >Libros</a></li>
                <li class="sidebar__item"><a href="#" class="aside__links" onclick="mostrar_ocultarArticulos()" >Articulos</a></li>
            </ul>
        </aside>
        <main id="main__trabajos">
            <section class="info__trabajo">
                <div class="info__container">
                    <!--<figure class="info__picture">
                        <img src="./images/libros/modelo de interaccion.jpg" alt="imagen de trabajo" class="info__img">
                    </figure>
                    <div class="titulo__descripcion">
                        <h3 class="subtitle3">Lorem Ipsum</h3>
                        <p class="info__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec
                            pulvinar tempus es
                            t, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec
                            eros lorem, blandi
                            t ac commodo at, malesuada et mauris.</p>
                    </div> -->
                </div>
            </section>
        </main>

        <!--  /////////////////////     Agregar Investigaciones /////////////////     -->

       <!-- <div>
            <h1>Registros</h1>
            <div>
                <h2>Investigaciones</h2>
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="w-50" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha_publicacion" placeholder="Fecha" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="categoria" placeholder="Categoria" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion" placeholder="Descripción" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="file" name="url_descarga" placeholder="Nombre" class="form-control my-4" accept=".pdf"/>
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen" placeholder="Nombre" class="form-control my-4" accept="image/png, image/jpg, image/jpeg" />
                    </div>
                    <button class="btn btn-dark" type="submit" name="submit">Submit</button>
                </form>
            </div> -->
            <?php
                        if (isset($_POST['submit'])) {
                            $nombre = $_POST['nombre'];
                            $fecha_publicacion = $_POST['fecha_publicacion'];
                            $categoria = $_POST['categoria'];
                            $descripcion = $_POST['descripcion'];
                            $url_descarga = $_FILES['url_descarga']['name'];
                            $url_descarga_tmp_name = $_FILES['url_descarga']['tmp_name'];
                            $url_descarga_folder = 'trabajos/investigaciones/docs/'.$url_descarga;
                            $imagen = $_FILES['imagen']['name'];
                            $imagen_tmp_name = $_FILES['imagen']['tmp_name'];
                            $imagen_folder = 'trabajos/investigaciones/images/'.$imagen;

                            if (empty($url_descarga) || empty($imagen)) {
                                $message[] = 'Llena los campos de archivos';
                            } else {
                                $insert = "INSERT INTO investigaciones (nombre, fecha_publicacion, categoria, descripcion, url_descarga, imagen) values ('$nombre', '$fecha_publicacion', '$categoria', '$descripcion', '$url_descarga', '$imagen')";
                                $upload = mysqli_query($conn, $insert);

                                if ($upload) {
                                    move_uploaded_file($url_descarga_tmp_name, $url_descarga_folder);
                                    move_uploaded_file($imagen_tmp_name, $imagen_folder);
                                    $message[] = 'Nuevo archivo añadido';
                                } else {
                                    $message[] = 'No se pudo añadir archivo';
                                }
                            }

                            if (isset($message)) {
                                foreach($message as $message) {
                                    echo '<span class="alert alert-warning alert-dismissible fade show" >'.$message.'</span>';
                                }
                            }

                        }

                 ?>

                   <!--  /////////////////////     Agregar Libros   /////////////////     -->

          <!--  <div>
                <h2>Libros</h2>
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" placeholder="Titulo" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion_libro" placeholder="Descripción" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="categoria_libro" placeholder="Categoria" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha_publicacion_libro" placeholder="Fecha" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="file" name="url_descarga_libro" class="form-control my-4" accept=".pdf"/>
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen_libro" class="form-control my-4" accept="image/png, image/jpg, image/jpeg" />
                    </div>
                    <button class="btn btn-dark" type="submit" name="libro">Submit</button>
                </form>
            </div>  -->
            <?php
                        if (isset($_POST['libro'])) {
                            $titulo = $_POST['titulo'];
                            $descripcion_libro = $_POST['descripcion_libro'];
                            $categoria_libro = $_POST['categoria_libro'];
                            $fecha_publicacion_libro = $_POST['fecha_publicacion_libro'];
                            $url_descarga_libro = $_FILES['url_descarga_libro']['name'];
                            $url_descarga_libro_tmp_name = $_FILES['url_descarga_libro']['tmp_name'];
                            $url_descarga_libro_folder = 'trabajos/libros/docs/'.$url_descarga_libro;
                            $imagen_libro = $_FILES['imagen_libro']['name'];
                            $imagen_libro_tmp_name = $_FILES['imagen_libro']['tmp_name'];
                            $imagen_libro_folder = 'trabajos/libros/images/'.$imagen_libro;

                            if (empty($url_descarga_libro) || empty($imagen_libro)) {
                                $message[] = 'Llena los campos de archivos';
                            } else {
                                $insert_libro = "INSERT INTO libros (titulo, descripcion, categoria, fecha_publicacion, url_descarga, imagen) values ('$titulo', '$descripcion_libro', '$categoria_libro', '$fecha_publicacion_libro', '$url_descarga_libro', '$imagen_libro')";
                                $upload_libro = mysqli_query($conn, $insert_libro);

                                if ($upload_libro) {
                                    move_uploaded_file($url_descarga_libro_tmp_name, $url_descarga_libro_folder);
                                    move_uploaded_file($imagen_libro_tmp_name, $imagen_libro_folder);
                                    $message[] = 'Nuevo archivo añadido';
                                } else {
                                    $message[] = 'No se pudo añadir archivo';
                                }
                            }

                            if (isset($message)) {
                                foreach($message as $message) {
                                    echo '<span class="alert alert-warning alert-dismissible fade show" >'.$message.'</span>';
                                }
                            }

                        }

                 ?>

                     <!--  /////////////////////     Agregar Articulos   /////////////////     -->

          <!--  <div>
                <h2>Articulos</h2>
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_articulo" placeholder="Nombre" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha_publicacion_articulo" placeholder="Fecha" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="categoria_articulo" placeholder="Categoria" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion_articulo" placeholder="Descripción" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="file" name="url_descarga_articulo" class="form-control my-4" accept=".pdf"/>
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen_articulo" class="form-control my-4" accept="image/png, image/jpg, image/jpeg" />
                    </div>
                    <button class="btn btn-dark" type="submit" name="articulo">Submit</button>
                </form>
            </div>  -->
            <?php
                        if (isset($_POST['articulo'])) {
                            $nombre_articulo = $_POST['nombre_articulo'];
                            $fecha_publicacion_articulo = $_POST['fecha_publicacion_articulo'];
                            $categoria_articulo = $_POST['categoria_articulo'];
                            $descripcion_articulo = $_POST['descripcion_articulo'];
                            $url_descarga_articulo = $_FILES['url_descarga_articulo']['name'];
                            $url_descarga_articulo_tmp_name = $_FILES['url_descarga_articulo']['tmp_name'];
                            $url_descarga_articulo_folder = 'trabajos/articulos/docs/'.$url_descarga_articulo;
                            $imagen_articulo = $_FILES['imagen_articulo']['name'];
                            $imagen_articulo_tmp_name = $_FILES['imagen_articulo']['tmp_name'];
                            $imagen_articulo_folder = 'trabajos/articulos/images/'.$imagen_articulo;

                            if (empty($url_descarga_articulo) || empty($imagen_articulo)) {
                                $message[] = 'Llena los campos de archivos';
                            } else {
                                $insert_articulo = "INSERT INTO articulos (nombre, fecha_publicacion, categoria, descripcion, url_descarga, imagen) values ('$nombre_articulo', '$fecha_publicacion_articulo', '$categoria_articulo', '$descripcion_articulo', '$url_descarga_articulo', '$imagen_articulo')";
                                $upload_articulo = mysqli_query($conn, $insert_articulo);

                                if ($upload_articulo) {
                                    move_uploaded_file($url_descarga_articulo_tmp_name, $url_descarga_articulo_folder);
                                    move_uploaded_file($imagen_articulo_tmp_name, $imagen_articulo_folder);
                                    $message[] = 'Nuevo archivo añadido';
                                } else {
                                    $message[] = 'No se pudo añadir archivo';
                                }
                            }

                            if (isset($message)) {
                                foreach($message as $message) {
                                    echo '<span class="alert alert-warning alert-dismissible fade show" >'.$message.'</span>';
                                }
                            }

                        }

                 ?>

                <!--  /////////////////////   Mostrar Investigaciones /////////////////   -->

                <div id="Investigaciones">
                    <div class="cards">
                        <?php
                            $select = mysqli_query($conn, "SELECT * FROM investigaciones");

                            while($row = mysqli_fetch_assoc($select)) {
                        ?>
                            <div class="card__container">
                                <div class="card">
                                    <figure>
                                        <img src="trabajos/investigaciones/images/Riti.png" class="card__img"/>
                                    </figure>
                                    <div class="card__paragraph">
                                        <h4 class="card__title"><?php echo $row['titulo']; ?></h4>
                                        <a href="#" class="modal__open" >Leer Más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal">
                                <div class="modal__container">
                                    <iframe src="trabajos/investigaciones/docs/<?php echo $row['url_descarga']; ?>" class="modal__pdf" ></iframe>
                                    <a href="#" class="modal__close"  >Cerrar PDF</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--  /////////////////////   Mostrar Libros /////////////////     -->

                <div id="Libros" class="hidden" >
                    <div class="cards">
                        <?php
                            $libro = mysqli_query($conn, "SELECT * FROM libros");

                            while($libros = mysqli_fetch_assoc($libro)) {
                        ?>
                            <div class="card__container">
                                <div class="card">
                                    <figure>
                                        <img src="trabajos/libros/images/<?php echo $libros['imagen']; ?>" class="card__img"/>
                                    </figure>
                                    <div class="card__paragraph">
                                        <h4 class="card__title"><?php echo $libros['titulo']; ?></h4>
                                        <a href="#" class="modal__open" >Leer Más</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal">
                                <div class="modal__container">
                                    <iframe src="trabajos/libros/docs/<?php echo $libros['url_descarga']; ?>" class="modal__pdf" ></iframe>
                                    <a href="#" class="modal__close" >Cerrar PDF</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--  /////////////////////   Mostrar Articulos /////////////////     -->

                <div id="Articulos" class="hidden" >
                    <div class="cards">
                        <?php
                            $articulo = mysqli_query($conn, "SELECT * FROM articulos");

                            while($articulos = mysqli_fetch_assoc($articulo)) {
                        ?>
                            <div class="card__container">
                                <div class="card">
                                    <figure>
                                        <img src="trabajos/articulos/images/<?php echo $articulos['imagen']; ?>" class="card__img"/>
                                    </figure>
                                    <div class="card__paragraph">
                                        <h4 class="card__title"><?php echo $articulos['nombre']; ?></h4>
                                        <a href="#" class="modal__open" >Leer Más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal">
                                <div class="modal__container">
                                    <iframe src="articulos/docs/<?php echo $articulos['url_descarga']; ?>" class="modal__pdf" ></iframe>
                                    <a href="#" class="modal__close" >Cerrar PDF</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

        </div>

    </div>


    <!-- //////////Contacto////////////// -->


    <div id="Contacto" class="hidden">
        <h1>Contacto</h1>
    </div>


     <!-- //////////Nosotros///////// -->

     <div id="Nosotros" class="hidden">
        <div class="nosotros__container" >
            <aside class="nosotros__nav slideInUp">
                <a href="#nosotros__menu" class="nosotros__links" onclick="mostrar_ocultar_Subnosotros()">Nosotros</a>
                <hr class="hr__nav" style="box-shadow: 1px 1px 2px 2px gray; border: 1px solid black">
                <a href="#historia__container" class="nosotros__links" onclick="mostrar_ocultarHistoria()">Historia</a>
                <hr class="hr__nav">
                <a href="#universidad__container" class="nosotros__links" onclick="mostrar_ocultarUniversidad()">Universidad</a>
                <hr class="hr__nav">
            </aside>
            <div id="Nosotros2">
                <div class="nosotros__menu">
                    <div class="quienes__container hide">
                        <div>
                            <img src="./images/varias/Quienes somos.jpg" class="nosotros__imagen" alt="Miembros del cuerpo academico">
                        </div>
                        <div class="quienes__p">
                            <h2>¿Quiénes Somos?</h2>
                            <p class="quienes__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar
                                tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros lorem,
                                blandit ac commodo at, malesuada et mauris.</p>
                        </div>
                    </div>
                    <hr class="separacion">
                    <div class="mision__container hide">
                        <div class="mision__p">
                            <h2>Misión</h2>
                            <p class="quienes__paragraph">Contribuir a la comprensión y aplicación de Ciencias de la Complejidad con investigaciones y redes transdisciplinarias que promuevan 
                                el bienestar de la sociedad por medio de la solución de problemas complejos</p>
                        </div>
                        <div>
                            <img src="./images/varias/Mision.jpg" class="nosotros__imagen" alt="Conferencia del cuerpo academico">
                        </div>
                    </div>
                    <hr class="separacion">
                    <div class="mision__container hide">
                        <div>
                            <img src="./images/varias/Vision.jpg" class="vision__imagen" alt="Explanada con alumnos ">
                        </div>
                        <div class="quienes__p">
                            <h2>Visión</h2>
                            <p class="vision__paragraph">Ser un centro de investigación transdisciplinario con amplio reconocimiento a nivel nacional e internacional que aborde los problemas complejos que impactan a la sociedad, 
                                por medio de la realización de proyectos de investigación y capital humano transdisciplinario basado en las ciencias de la complejidad.</p>
                        </div>
                    </div>
                    <hr class="separacion">
                    <div class="ubi__container hide">
                        <h1 class="ubicacion__titulo">Ubicación</h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1656.8180002520467!2d-116.9617410394941!3d32.5326583601202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d947c983eecfb7%3A0xafe78c95d676a6ce!2sEdificio%20de%20Posgrado%20FCA!5e0!3m2!1ses!2smx!4v1679282317359!5m2!1ses!2smx" width="900" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="ubicacion"></iframe>
                    </div>
                </div>
            </div>
            <div id="Historia" class="hidden">
                <div class="origen__container hide">
                    <h1>Origen</h1>
                    <p class="origen__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar
                        tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros lorem,
                        blandit ac commodo at, malesuada et mauris.</p>
                </div>
                <hr class="separacion">
                <div class="nombre__container hide">
                    <h1>Nombre</h1>
                    <div class="nombres hide">
                        <div class="nombre hide">
                            <h2 style="margin-bottom: 1em;">Viejo</h2>
                            <p>Gestión de la Inovación y Tecnología</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar
                                tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros lorem,
                                blandit ac commodo at, malesuada et mauris.</p>
                        </div>
                        <div class="nombre hide">
                            <h2 style="margin-bottom: 1em;">Nuevo</h2>
                            <p>Complejidad y Gestión en las Organizaciones</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar
                                tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros lorem,
                                blandit ac commodo at, malesuada et mauris.</p>
                        </div> 
                    </div>
                </div>
                <hr class="separacion">
                <h1 style="text-align: center; margin-top: 1em;" class="hide">Logo</h1>
                <div class="nombres hide">
                    <div class="nombre">
                        <h2>Viejo</h2>
                        <img src="./images/logos/Logo viejo.png" class="logos">
                    </div>
                    <div class="nombre">
                        <h2>Nuevo</h2>
                        <img src="./images/logos/Cecob.jpg" class="logos">
                    </div>
                </div>
            </div>
            <div id="Universidad" class="hidden hide">
               <h1 style="margin-top: 2em;">Universidad Autónoma de Baja California</h1>
                <div class="universidad__container">
                    <div>
                       <img src="./images/logos/escudo-actualizado-2022.png" class="UABC__logo"> 
                    </div>
                    <div style="margin-top: 2em;">
                        <h4><strong><i>Mensaje del Rector</i></strong></h4>
                        <p class="p__rector">Les doy la más cordial bienvenida a la Universidad Autónoma de Baja California, institución líder en educación superior en el noroeste de México; 
                        que ha merecido la confianza de la sociedad bajacaliforniana por más de 65 años, 
                        con la formación de profesionistas competentes que contribuyen a la solución de problemas de la región y del país.</p>
                        <p class="p__rector">Para la UABC los estudiantes son nuestra más alta prioridad, por lo que nos esforzamos día a día para ofrecer una formación profesional de calidad, que atienda a los avances disciplinares; 
                            así como a las transformaciones sociales, económicas, ambientales y tecnológicas. Además, se busca que esta formación sea una experiencia de verdadero desarrollo humano,
                             que considere la adquisición de competencias para el trabajo y fortalezca las actitudes y valores que hagan posible la vida comunitaria.</p>
                        <p class="p__rector">Contamos con una comunidad académica consolidada que, ostenta altos reconocimientos ante las instancias educativas y de investigación a nivel federal. 
                            Buena parte de las y los docentes, son al mismo tiempo, destacados profesionales en sus respectivos campos de ocupación.</p>
                    </div>
                    <p style="margin-top: 3em; width: 95%; margin-bottom: 3em;">Somos una institución preocupada por generar conocimiento que sea útil a la sociedad identificada en los objetivos del desarrollo sostenible, 
                        como una obligación que deriva de la propia misión universitaria. Somos una universidad de oportunidades para todas las personas, sin distingos de origen, de identidad, de campus o de edad… en unión, somos UABC.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <nav class="footer">
            <table class="footer__table">
                <tr>
                    <th>Secciones</th>
                    <th>Información</th>
                    <th>UABC</th>
                    <th>Redes Sociales</th>
                </tr>
                <tr>
                    <td><a href="#Noticias" class="nav__links" onclick="mostrar_ocultarNoticias()">Noticias</a></td>
                    <td></td>
                    <td><a href="https://www.uabc.mx/historia/" class="nav__links">Historia</a></td>
                    <td><a href="https://www.facebook.com/centrodeestudiosdelacomplejidadfca"><img
                                src="./images/logos/Facebook logo.jpg" class="social_media"></a></td>
                </tr>
                <tr>
                    <td><a href="#Trabajos" class="nav__links" onclick="mostrar_ocultarTrabajos()">Trabajos</a></td>
                    <td></td>
                    <td><a href="https://www.uabc.mx/programas-educativos/" class="nav__links">Oferta Educativa</a></td>
                </tr>
                <tr>
                    <td><a href="#Miembros" class="nav__links" onclick="mostrar_ocultarMiembros()">Miembros</a></td>
                    <td></td>
                    <td><a href="https://www.uabc.mx/movilidad-estudiantil/" class="nav__links">Vida Universitaria</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#Contacto" class="nav__links" onclick="mostrar_ocultarContacto()">Contacto</a></td>
                    <td></td>
                    <td><a href="https://www.uabc.mx/formacion-docente/" class="nav__links">Docencia e Investigación</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#Nosotros" class="nav__links" onclick="mostrar_ocultarNosotros()">Nosotros</a></td>
                    <td></td>
                    <td><a href="http://transparencia.uabc.mx/" class="nav__links">Transparencia</a></td>
                </tr>
            </table>
        </nav>
    </footer>

    <script src="./js/funciones.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>
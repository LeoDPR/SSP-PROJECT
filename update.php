<?php 

    include ('./config.php');

    $id = $_GET['edit'];

    if (isset($_POST['update'])) {
        $nombre = $_POST['nombre'];
        $fecha_publicacion = $_POST['fecha_publicacion'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $url_descarga = $_FILES['url_descarga']['name'];
        $url_descarga_tmp_name = $_FILES['url_descarga']['tmp_name'];
        $url_descarga_folder = 'investigaciones/docs/'.$url_descarga;
        $imagen = $_FILES['imagen']['name'];
        $imagen_tmp_name = $_FILES['imagen']['tmp_name'];
        $imagen_folder = 'investigaciones/images/'.$imagen;

        if (empty($url_descarga) || empty($imagen)) {
            $message[] = 'Llena los campos de archivos';
        } else {
            $update = "UPDATE  investigaciones SET nombre='$nombre', fecha_publicacion='$fecha_publicacion', categoria='$categoria', descripcion='$descripcion', url_descarga='$url_descarga', imagen='$imagen' WHERE id_investigacion = $id";
            $upload = mysqli_query($conn, $update);

            if ($upload) {
                move_uploaded_file($url_descarga_tmp_name, $url_descarga_folder);
                move_uploaded_file($imagen_tmp_name, $imagen_folder);
            } else {
                $message[] = 'No se pudo añadir archivo';
            }
        }
    };

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php 
    if (isset($message)) {
        foreach($message as $message) {
            echo '<span class="alert alert-warning alert-dismissible fade show" >'.$message.'</span>';
        }
    }
?>

    <div class="container">
        <h1>Update</h1>
        <div class="container d-flex justify-content-center">

            <?php
                $select = mysqli_query($conn, "SELECT * FROM investigaciones WHERE id_investigacion = $id");

                while($row = mysqli_fetch_assoc($select)) {
            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" class="w-50" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha_publicacion" placeholder="Fecha" value="<?php echo $row['fecha_publicacion']; ?>" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="categoria" placeholder="Categoria" value="<?php echo $row['categoria']; ?>" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion" placeholder="Descripción" value="<?php echo $row['descripcion']; ?>" class="form-control my-4" />
                    </div>
                    <div class="form-group">
                        <input type="file" name="url_descarga" class="form-control my-4" accept=".pdf"/>
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen" class="form-control my-4" accept="image/png, image/jpg, image/jpeg" />
                    </div>
                    <button class="btn btn-dark" type="submit" name="update">Submit</button>
                    <a href="index.php#Trabajos" class="btn btn-dark">Regresar</a>
            </form>
            <?php }; ?>
        </div>
    </div>
</body>
</html>
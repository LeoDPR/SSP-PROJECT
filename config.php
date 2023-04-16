<?php
    $conn=mysqli_connect('localhost', 'root', '', 'cuerpo_academico');
    if (!$conn) {
        die(mysqli_error($conn));
    }
?>
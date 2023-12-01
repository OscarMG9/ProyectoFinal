<?php include('../../php/db.php'); ?>

<?php 

$nombre = $_POST['nombre'];
$links = $_POST=['links'];
$linka = $_POST=['linka'];
$desc = $_POST=['desc'];
$img = $_POST['imagen'];
$id = $_POST['idartista'];
            
$query = "INSERT INTO album(nombrealbum, links, linka, descripcion, idartista) 
VALUES ('$nombre', '$links', '$linka', '$desc', '$id')";


mysqli_query($conn, $query);
    
header ("location: ./Album.php");


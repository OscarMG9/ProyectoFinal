<?php include('../../php/db.php')?>

<?php 
if (isset($_POST['submit']))
{
    $idalbum = $_POST['idalbum'];
    $titulo = $_POST['titulo'];
    $links = $_POST=['links'];
    $linka = $_POST=['linka'];
    $desc = $_POST=['desc'];
    $img = $_POST['img'];
    $id = $_POST['idartista'];
            
    $query = "INSERT INTO album(nombrealbum, links, linka, descripcion, img, idartista) 
    VALUES ('$titulo', '$links', '$linka', '$desc', '$img', '$id')";

    $result = mysqli_query($conn, $query);
    
    header ("location: album.php");
}

?>


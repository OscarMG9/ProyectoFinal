<?php include('../../php/db.php')?>


<?php 

if (isset($_POST['submit']))
{
    $id = $_POST['artista'];
    $nombre = $_POST['titulo'];
    $img = $_POST['img'];
    $links = $_POST=['links'];
    $linka = $_POST=['linka'];
    $desc = $_POST=['descripcion'];

    $query = "INSERT INTO album(nombrealbum, links, linka, descripcion, img, idartista)
            VALUES ('$nombre', '$links', '$linka', '$desc', '$img', '$id')";

    $result = mysqli_query($conn, $query);

    header("location: Album.php");

}

?>


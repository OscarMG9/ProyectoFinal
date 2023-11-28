<?php include('../../php/db.php')?>


<?php 

if (isset($_POST['submit']))
{

    $nombre = $_POST['titulo'];
    $links = $_POST['links'];
    $linka = $_POST=['linka'];
    $desc = $_POST=['descripcion'];
    $img = $_POST['img'];
    $idartista = $_POST['idartista'];

    $query = "INSERT INTO album(nombrealbum, links, linka, descripcion, img, idartista)
            VALUES ('$nombre', '$links', '$linka', '$desc', '$img', '$idartista')";

    $result = mysqli_query($conn, $query);

    header("location: Album.php");

}

?>


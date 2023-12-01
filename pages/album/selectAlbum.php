<?php include('../../php/db.php')?>
<?php include('../../php/header.php')?>


<div class="text-light bg-dark">
<table class="table table-bordered">
          <thead>
            <th>Nombre</th>
            <th>Link Spotify</th>
            <th>Link Apple</th>
            <th>Descripción</th>
            <th>img</th>
            <th>Artista</th>
          </thead>

          <tbody>
            <?php 
              $query = "SELECT * FROM album";
              // $result = $conexion->query($query);

            $result_docente = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_docente)){ ?>
            <tr> 
             <td><?php echo $row['nombrealbum'] ?></td> 
             <td><?php echo $row['links'] ?></td> 
             <td><?php echo $row['linka'] ?></td> 
             <td><?php echo $row['descripcion'] ?></td> 
             <td><?php echo $row['img'] ?></td> 
             <td><?php echo $row['idartista'] ?></td> 
            </tr>
          
            <?php }
            ?>

          </tbody>
  </table>

</div>
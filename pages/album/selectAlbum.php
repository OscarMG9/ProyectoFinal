<?php include('../../php/db.php')?>
<?php include('../../php/header.php')?>


<table class="table table-bordered">
          <thead>
            <th>Nombre</th>
            <th>Ap. Paterno</th>
            <th>Ap. Materno</th>
            <th>Calle</th>
            <th>No.Calle</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Curp</th>
            <th>Perfil</th>
            <th>Tipo</th>
            <th>Turno</th>
            <th>Estado</th>
            <th>Documentos</th>
            <th>E/D</th>
            
          </thead>

          <tbody>
            <?php 


              // Consultar los docentes según el filtro
              $query = "SELECT * FROM Docente WHERE Tipo = '$filtro'";
              // $result = $conexion->query($query);

            $result_docente = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_docente)){ ?>
            <tr> 
             <td><?php echo $row['NombreDocente'] ?></td> 
             <td><?php echo $row['APaternoDocente'] ?></td> 
             <td><?php echo $row['AMaternoDocente'] ?></td> 
             <td><?php echo $row['CalleDireccionDocente'] ?></td> 
             <td><?php echo $row['NumeroDireccionDocente'] ?></td> 
             <td><?php echo $row['TelefonoDocente'] ?></td> 
             <td><?php echo $row['CorreoDocente'] ?></td> 
             <td><?php echo $row['CURPDocente'] ?></td> 
             <td><?php echo $row['PerfilProfesional'] ?></td> 
             <td><?php echo $row['Tipo'] ?></td> 
             <td><?php echo $row['Turno'] ?></td> 
             <td  class="btn btn-success text-light"><?php echo $row['Estado'] ?></td> 
             <td><a href="<?php echo $row['RutaArchivo']?>" target="_blanck">DOCS</a></td> 
             <td>
                <a class="btn btn-warning" href="edit_docente.php?IdDocente=<?php echo $row['IdDocente'] ?>">EDITAR</a>
                <a class="btn btn-danger" href="delete_docente.php?IdDocente=<?php echo $row['IdDocente']?>" onclick="confirmar();">ELIMINAR </a>
              </td>
            </tr>
          
            <?php }
            ?>

          </tbody>
        </table>

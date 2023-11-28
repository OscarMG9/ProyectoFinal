<?php include("../../php/db.php")?>
<?php include("../../php/header.php")?>


<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <h1 class="display-5">Registrar un nuevo album</h1>
                <form action="insertAlbum.php" method="POST" style="margin-top:5%;margin-bottom:5%">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <img src="../img/no-images.png" alt="" class="rounded mx-auto d-block" width="15%">
                                    </div>
                                </div>
                                <div class="form-row">

                           <!--Div para select/option Docente--> 
                            <h6>Artista</h6> 
                                <div class="form-control text-center">
                                        <label for="">
                                        <select name="artista" id="artista" class="">
                                        <?php                                    
                                        $query = "SELECT idartista, nombre, paterno, materno FROM artista";
                                        $ejecutar= mysqli_query($conn, $query)
                                        ?>
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['idartista']?>"><?php echo $opciones['nombre']?> <?php echo $opciones['paterno']?> <?php echo $opciones['materno']?></option>
                                        <?php endforeach  ?>
                                        </select>
                                        </label>               
                                </div>
                                <!--Termina select Option-->
                                
                                    <div class="form-group col-4">
                                        <label for="titleMusic" class="text-center">Título música</label>
                                        <input type="text" name="nombre" id="TM" class="form-control" placeholder="Título música">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="NameALabel" class="text-center">Nombre album</label>
                                        <input type="text" name="Nombrealbu," id="NM" class="form-control" placeholder="Nombre album">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label for="ImgA">Imagén del album</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="img" id="File" required="">
                                            <label class="custom-file-label" for="selectedFile">Selecciona archivo</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="L_spotify" class="text-center">Link Spotify</label>
                                        <input type="text" class="form-control" name="links" id="LS" placeholder="Link Spotify">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="L_apple" class="text-center">Apple Music</label>
                                        <input type="text" class="form-control" name="linka" id="LA" placeholder="Apple Music">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Descripcion" class="text-center">Descripción del album</label>
                                        <textarea class="form-control" name="Desc" id="D" placeholder="Descripción del album..."></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary" name="submit">Guardar</button>
                                <button type="reset" class="btn btn-outline-light">Limpiar</button>
                            </div>
                        </div>
                        <br>
                </form>
            </div>
      </div>

      <?php include("../../php/footer.php");?>
<?php include("../../php/db.php")?>
<?php include("../../php/header.php")?>


<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 container">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                
    <h1 class="display-5">Registrar un nuevo album</h1>

                <form action="./insertAlbum.php" method="post" style="margin-top:5%;margin-bottom:5%">
                        <div class="form-row">
                            <div class="form-group col-12">

                                <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="NameALabel" class="text-center">Nombre album</label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre album">
                                        </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="L_spotify" class="text-center">Link Spotify</label>
                                        <input type="text" class="form-control" name="links" placeholder="URL">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="L_apple" class="text-center">Apple Music</label>
                                        <input type="text" class="form-control" name="linka" placeholder="URL">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label for="Descripcion" class="text-center">Descripción del album</label>
                                        <input type="text" name="desc" class="form-control" placeholder="Descripcion">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="ImgA">Imagén del album</label>
                                        <div class="custom-file">
                                            <input type="text" name="imagen" placehpolder="URL">
                                            <label class="" for="">Selecciona archivo</label>
                                        </div>
                                    </div>
                                    
                                        <!--Div para select/option Docente--> 
                                    <div class="p-4 text-center col-4">
                                        <label for="">Artista:
                                        <select type="number" name="idartista" id="artista" >
                                        <?php                                    
                                        $query = "SELECT * FROM artista";
                                        $ejecutar= mysqli_query($conn, $query)
                                        ?>
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['idartista']?>"><?php echo $opciones['nombre']?> <?php echo $opciones['paterno']?> <?php echo $opciones['materno']?></option>
                                        <?php endforeach  ?>
                                        </select>
                                        </label>               
                                    </div>
                                         <!--Termina select Option-->
                                </div>
                                <input type="submit" name="insertAlbum.php" class="btn btn-success" value="Guardar">
                                <button type="reset" class="btn btn-outline-light">Limpiar</button>
                            </div>
                        </div>
                        <br>
                </form>
            </div>
      </div>

      <?php include("../../php/footer.php");?>
<?php include("../php/db.php")?>
<?php include("../php/header.php")?>

      <div class=" w-100 my-md-3 pl-md-3">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <h1 class="display-5">Registrar un nuevo album</h1>
                <form action="" style="margin-top:5%;margin-bottom:5%">
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
                                        <input type="text" name="titleMusic" id="TM" class="form-control" placeholder="Título música">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="NameALabel" class="text-center">Nombre album</label>
                                        <input type="text" name="NameAlbum" id="NM" class="form-control" placeholder="Nombre album">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label for="ImgA">Imagén del album</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="NameFile" id="File" required="">
                                            <label class="custom-file-label" for="selectedFile">Selecciona archivo</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="L_spotify" class="text-center">Link Spotify</label>
                                        <input type="text" class="form-control" name="LinkSpotify" id="LS" placeholder="Link Spotify">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="L_apple" class="text-center">Apple Music</label>
                                        <input type="text" class="form-control" name="LinkApple" id="LA" placeholder="Apple Music">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Descripcion" class="text-center">Descripción del album</label>
                                        <textarea class="form-control" name="Desc" id="D" placeholder="Descripción del album..."></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                <button type="reset" class="btn btn-outline-light">Limpiar</button>
                            </div>
                        </div>
                        <br>
                </form>
            </div>
      </div>
</body>
</html>
<script src="./js/Pa'_lo_q_gusten.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
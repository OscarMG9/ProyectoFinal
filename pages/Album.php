<?php include("../php/db.php")?>
<?php include("../php/header.php")?>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Inicio</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Artista</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Album</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
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
                                    <div class="form-group col-4">
                                        <label for="artistLabel" class="text-center">Artista</label>
                                        <select name="artist" id="ArtistA" class="form-control">
                                            <option value="" selected>Selecciona un Artista</option>
                                            <option value="">...</option>
                                        </select>
                                    </div>
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
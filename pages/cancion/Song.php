<?php include("../../php/db.php")?>
<?php include("../../php/header.php")?>
<html lang="en">

    <h1 class="text-center text-light mt-3">Registrar Canción</h1>
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-12" style="background: rgb(101, 154, 79);">
                <div class="row">
                    <div class="col-4 my-4">
                        <img src="../img/no-images.png" alt="" width="75%">
                    </div>
                    <div class="col-8">
                        <form action="" method="get" class="form-group text-left mt-3">
                            <label for="NameSong" class="text-white">Canción:</label>
                            <input type="text" id="SongName" name="NameSong" class="form-control" placeholder="Nombre de la canción">
                            <label for="NameArtist" class="text-white">Artista:</label>
                            <select name="artist" id="ArtistA" class="form-control">
                                <option value="" selected>Selecciona un Artista</option>
                                <option value="">...</option>
                            </select>
                            <label for="Album" class="text-white">Album</label>
                            <select name="AlbumName" id="AlbumN" class="form-control">
                                <option value="" selected>Selecciona su album</option>
                                <option value="">...</option>
                            </select>
                            <label for="" class="text-white">Foto del artista</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="SongPhoto" id="SPhoto" required="">
                                <label class="custom-file-label" for="selectedPhoto">Selecciona Foto</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="my-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-light">Limpiar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("../../php/footer.php")?>
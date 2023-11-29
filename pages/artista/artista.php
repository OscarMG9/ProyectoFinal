<?php include("../../php/db.php")?>
<?php include("../../php/header.php")?>


    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-success-subtle bg-dark text-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden rounded border border-success mt-3">
            <h1 class="display-5 text-light"><strong>Registar nuevo Artista:</strong> </h1>
            <form action="" style="margin-top:5%;margin-bottom:5%" method="put">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <img src="../img/artistNew.jpg" alt="" class="rounded-circle mx-auto d-block" width="15%">
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="Name" class="text-center">Nombre</label>
                                    <input type="text" name="Name" id="N" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group col-4">
                                    <label for="ApellidoP" class="text-center">Apellido Paterno</label>
                                    <input type="text" name="ApellidoPaterno" id="AP" class="form-control" placeholder="Apellido Paterno">
                                </div>
                                <div class="form-group col-4">
                                    <label for="ApellidoM" class="text-center">Apellido Materno</label>
                                    <input type="text" name="ApellidoMaterno" id="AM" class="form-control" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="ImgA">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="NamePhoto" id="Photo" required="">
                                        <label class="custom-file-label text-left" for="selectedFile">Seleccionar Foto</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="Biografía" class="text-center">Biografía del Artista</label>
                                    <textarea class="form-control" name="Bio" id="B" placeholder="Biografía..."></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            <button type="reset" class="btn btn-outline-danger">Limpiar</button>
                        </div>
                    </div>
                    <br>
            </form>
        </div>
  </div>

  <?php include("../../php/footer.php")?>
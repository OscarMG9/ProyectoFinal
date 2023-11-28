<!-- <?php include("../php/header.php")?> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/refresh-525698_1280.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>UpdateArtist</title>
</head>
<body class="bg-black">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-success-subtle text-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden rounded border border-success">
            <h1 class="display-5"><strong>Artista: </strong> </h1>
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
                                        <label class="custom-file-label" for="selectedFile">Selecciona Foto</label>
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
</body>
</html>
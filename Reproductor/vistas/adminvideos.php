<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Video CAMPVS-HEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/gob_hep_2011.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="#"><b>CAMPVS HEP</b> - Videos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav   ">
                    <a class="nav-link active" aria-current="page" href="vistas/sitio-en-construccion/construccion.html">Inicio</a>
                    <a class="nav-link active" href="vistas/sitio-en-construccion/construccion.html">Categorias</a>
                    <a class="nav-link active" href="vistas/sitio-en-construccion/construccion.html">Listado</a>
                    <a class="nav-link active" href="../reproductor/reproductor.php">Acceder al Reproductor</a>
                </div>
            </div>
        </div>
    </nav>

    <br /><br />

    <!--agrega dato-->
    <div class="container text-center">
        <hr style="border-top:3px solid #ccc;" />
        <br /><br />

        <form action="../modelos/save_video.php" method="post" enctype="multipart/form-data" class=" row row-cols-lg-auto g-3 align-items-center">
            <div class="col-12"></div>
            <div class="col-12">
                <input type="text" name="descripcion" class="form-control" id="floatingInput" placeholder="Descripcion">
            </div>
            <!--<div class=" col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                    <select class="form-select" id="inlineFormSelectPref">
                    <option disabled selected>Seleccione una opcion..</option>
                    <option value="1">Archivo de video</option>
                    <option value="2" disabled>Archivo de audio</option>
                    
                    </select>
                </div>-->
            <div class=" col-12">
                <input class="form-control" type="file" id="video" name="video">
            </div>

            <div class="col-12">
                <button type="button" class="btn btn-danger" data-dismiss="">
                    Cancelar</button>
                <button name="save" type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-save-file">
                        Guardar
                    </span>
                </button>
            </div>
        </form>
        <!--fin boton-->
        <br /><br />

        <hr style="border-top:3px solid #ccc;" />
        <!--muestra informacion agregada-->
        <div class="col-md-12">
            <?php
            //consulta a la base de datos
            require '../modelos/conexion/conn.php';
            $codigo;
            $query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_errno($codigo));
            //printf($codigo);
            while ($fetch = mysqli_fetch_array($query)) {
            ?>
                <!--muestra la tabla con los datos agregados-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col">Id:
                            <input type="text" class="border-0" value="<?php echo $fetch['video_id'] ?>">
                        </div>
                        <div class="col">
                            <label for="">Nombre del Archivo</label>
                            <input type="text" class=" border-0" value="<?php echo $fetch['video_name'] ?>">
                        </div>
                        <div class="col">
                            <label for="">Descripcion:</label>
                            <div>
                                <input type="text" class="border-0" value="<?php echo $fetch['descripcion'] ?>">
                            </div>

                        </div>
                        <div class="col">
                            <label for="">Acceso modo Usuario:</label>
                            <br>
                            <a href="reproductor/reproductor.php?saludo=<?php echo $fetch['location'] ?>">link</a>

                        </div>
                        <div class="col">
                            <label for="">Acceso modo Admin</label>
                            <br>
                            <!--<input  type="text"
                                class="border-0" 
                                value="<?php //echo $fetch['location'] 
                                        ?>">-->
                            <a href="../modelos/<?php echo $fetch['location'] ?>" target="_blank" rel="noopener noreferrer">link </a>
                        </div>
                        <div class="col">
                            <video width="100%" height="150">
                                <source src="../modelos/<?php echo $fetch['location'] ?>">
                                <!--<source src="modelos/<?php echo $fetch['location'] ?>" type="video/mp4" />
                                <img src="imagen.png" alt="Video no soportado" />
                                Su navegador no soporta contenido multimedia.-->
                            </video>

                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
        <!--fin -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-white" id="mainNav" style="opacity: 0.90;filter: contrast(100%);">
        <div class="container-fluid"><a class="navbar-brand" href="index.php" style="font-size: 25px;font-family: Aldrich, sans-serif;">WIKI</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-1 justify-content-end" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" style="font-family: Aldrich, sans-serif;color: rgb(29,82,63);" href="Agregar.php">Agregar&nbsp;</a></li>

                    <li class="nav-item"><a class="nav-link link-dark" style="font-family: Aldrich, sans-serif;border-color: rgba(0, 0, 0, 0.55);border-top-color: rgba(0,;border-right-color: 0,;border-bottom-color: 0,;border-left-color: 0.55);color: rgb(29,82,63);" href="Personajes.php">&nbsp;Personajes</a></li>

                    <li class="nav-item"><a class="nav-link" href="#" style="font-family: Aldrich, sans-serif;color: #1d523f;">About me</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div></div>
    <div id="Anime" style="background: url(&quot;assets/img/bg%20anime.jpg&quot;) center;">
        <section>
            <div class="bg-light border rounded border-light jumbotron py-5 px-4" style="background: var(--bs-white);border-color: var(--bs-white);">
                <div class="container profile profile-view" id="profile">
                    <div class="row">
                        <div class="col-md-12 alert-col relative">
                            <div class="alert alert-info alert-dismissible absolue center" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>Profile save with success</span></div>
                        </div>
                    </div>
                    <form method="post" action="Save.php" enctype="multipart/form-data">
                        <div class="row profile-row">
                            <div class="col-md-4 relative">
                                <div class="avatar">
                                    <div class="avatar-bg center"></div>
                                </div><input class="form-control form-control" type="file" name="avatar-file">
                            </div>
                            <div class="col-md-8">
                                <h1>Profile </h1>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-3"><label class="form-label" for="Nombre">Nombre</label><input class="form-control" type="text" name="Nombre" placeholder="Nombre"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-3"><label class="form-label" for="Apellido">Apellido</label><input class="form-control" type="text" name="Apellido" placeholder="Apellido"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="Nacionalidad">Nacionalidad</label><input class="form-control" type="text" placeholder="Nacionalidad" name="Nacionalidad"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-3"><label class="form-label" for="Raza">Raza</label><input class="form-control" type="text" name="Raza" placeholder="Raza"></div>
                                        <div>
                                            <div class="col"><label class="form-label" for="Estado">Estado</label><input class="form-control" type="text" name="Estado" placeholder="Estado"></div>
                                            <div class="col"><label class="form-label" for="Fecha_nac">Fecha nacimiento</label><input class="form-control" type="date" name="Fecha_nac"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-3"><label class="form-label" for="Cedula">Cedula</label><input class="form-control" type="text" name="Cedula" placeholder="Documento"></div>
                                        <div>
                                            <div class="col"><label class="form-label" for="Sexo">Sexo</label><input class="form-control" type="text" name="Sexo" placeholder="Sexo"></div>
                                            <div class="col"><label class="form-label" for="Poder">Poder</label><input class="form-control" type="text" placeholder="Poder" name="Poder"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                         <div class="col">
                                            <label class="form-label" for="Serie">Serie</label>
                                            <input class="form-control" type="text" name="Serie" placeholder="Serie a la que pertenece...">
                                        </div>

                                            <div class="col">
                                                <label class="form-label" for="Ocupacion">Ocupacion</label>
                                                <input class="form-control" type="text" name="Ocupacion" placeholder="Ocupacion">
                                            </div>
                                        </div><label class="form-label" for="Biografia">Biografia</label><textarea class="form-control" name="Biografia" placeholder="Escribe la biografia del personaje..."></textarea>
                                    </div>
                                    <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button><button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>APLSoft Consulting</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">APLSoft Consulting© 2021</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>
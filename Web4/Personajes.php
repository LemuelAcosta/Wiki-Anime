<?php 
    include('DB.php');
?>

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
    <div id="Anime" style="background: url(&quot;assets/img/bg%20anime.jpg&quot;) center;">
        <section>
            <div class="bg-light border rounded border-light jumbotron py-5 px-4" style="background: var(--bs-white);border-color: var(--bs-white);">
                <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="bg-light border rounded border-light hero-nature carousel-hero jumbotron py-5 px-4">
                                <h1 class="hero-title" style="font-family: Aldrich, sans-serif;">Naruto</h1>
                                <p class="hero-subtitle" style="font-family: Aldrich, sans-serif;">Es una serie de manga escrita e ilustrada por Masashi Kishimoto. La obra narra la historia de un ninja adolescente llamado Naruto Uzumaki.</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bg-light border rounded border-light hero-photography carousel-hero jumbotron py-5 px-4">
                                <h1 class="hero-title">Goku</h1>
                                <p class="hero-subtitle">Son Gokū es un personaje ficticio, protagonista de la serie de manga y anime Dragon Ball. Fue creado por Akira Toriyama en 1984.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bg-light border rounded border-light hero-technology carousel-hero jumbotron py-5 px-4">
                                <h1 class="hero-title">Meliodas</h1>
                                <p class="hero-subtitle">Meliodas o Mediodas es una figura en la leyenda artúrica de la prosa Tristan del siglo XIII y relatos posteriores, incluido Le Morte d'Arthur. Es el segundo rey de Lyonesse, hijo de Felec de Cornualles y vasallo del rey Mark.</p>
                            </div>
                        </div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
    </div>
    <div style="height: 300px;">
        <h1 class="text-center" style="height: -34px;margin: 36px;font-family: Aldrich, sans-serif;">Listado de personajes</h1>
        <div class="container">
            <div class="section">
                
            <div class="col-md-12 search-table-col" style="height: 135px;margin: 24px 0px 0px;font-family: Aldrich, sans-serif;"><span class="counter pull-right"></span>
                <div class="table-responsive table table-hover table-bordered results">
                    <table class="table table-hover table-bordered">
                        <thead class="bill-header cs">
                            <tr>
                                <th id="trs-hd" class="col-lg-1">Raza</th>
                                <th id="trs-hd" class="col-lg-2">Nombre</th>
                                <th id="trs-hd" class="col-lg-3">Apellido</th>
                                <th id="trs-hd" class="col-lg-2">Serie perteneciente</th>
                                <th id="trs-hd" class="col-lg-2">Poder</th>
                                <th id="trs-hd" class="col-lg-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $query = "SELECT * FROM personajes";
                            $result = mysqli_query($conn, $query);    

                            while($row = mysqli_fetch_assoc($result)) {
                         ?>
                            <tr class="warning no-result">
                                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $row["Raza"]; ?>
                                </td>
                                <td>
                                    <?php echo $row['Nombre']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Apellido']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Serie']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Poder']; ?>
                                </td>
                                <td>
                                        <a href="Edit.php?id=<?php echo $row['Id']?>">
                                            <button class="btn btn-success" style="margin-left: 5px;" type="submit">
                                                <i class="fa fa-edit" style="font-size: 15px;"></i>
                                            </button>
                                        </a>

                                        <a href="Delete.php?id=<?php echo $row['Id']?>">
                                            <button class="btn btn-danger" style="margin-left: 5px;" type="submit">
                                                <i class="fa fa-trash" style="font-size: 15px;"></i>
                                            </button>
                                        </a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div>
        <h1> </h1>
        <br>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>
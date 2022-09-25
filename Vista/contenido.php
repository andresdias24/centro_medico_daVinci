<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <?php
    if ($_SESSION['rol'] == "Administrador") { ?>
        <h2>Avisos Importantes Aminstradores</h2>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="https://previews.123rf.com/images/leowolfert/leowolfert1801/leowolfert180100019/92923998-administrador-de-atenci%C3%B3n-m%C3%A9dica-masculino-irreconocible-que-utiliza-una-aplicaci%C3%B3n-de-contenedor-de.jpg" class="d-block w-100" alt="..." style="width:100%;">
          </div>

          <div class="item">
            <img src="https://previews.123rf.com/images/leowolfert/leowolfert1801/leowolfert180100019/92923998-administrador-de-atenci%C3%B3n-m%C3%A9dica-masculino-irreconocible-que-utiliza-una-aplicaci%C3%B3n-de-contenedor-de.jpg" class="d-block w-100" alt="..." style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <?php
    } else if ($_SESSION['rol'] == "Paciente") { ?>
        <h2>Avisos Importantes Pacientes</h2>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="https://www.bayer.com/sites/default/files/styles/1_91_1_aspect_ratio/public/2021-01/58.jpg?h=2f83cd36&itok=5QDUCdnv" class="d-block w-100" alt="..." style="width:100%;">
          </div>

          <div class="item">
            <img src="https://www.bayer.com/sites/default/files/styles/1_91_1_aspect_ratio/public/2021-01/58.jpg?h=2f83cd36&itok=5QDUCdnv" class="d-block w-100" alt="..." style="width:100%;">
          </div>

          <div class="item">
            <img src="https://www.bayer.com/sites/default/files/styles/1_91_1_aspect_ratio/public/2021-01/58.jpg?h=2f83cd36&itok=5QDUCdnv" class="d-block w-100" alt="..." style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <?php
    } else if ($_SESSION['rol'] == "Medico") { ?>
        <h2>Avisos Medicos</h2>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="https://cdn.lecturio.com/assets/Featured-image-Student-Blog-Hospital-Team.jpg" class="d-block w-100" alt="..." style="width:100%;">
          </div>

          <div class="item">
            <img src="https://cdn.lecturio.com/assets/Featured-image-Student-Blog-Hospital-Team.jpg" class="d-block w-100" alt="..." style="width:100%;">
          </div>

          <div class="item">
            <img src="https://cdn.lecturio.com/assets/Featured-image-Student-Blog-Hospital-Team.jpg" class="d-block w-100" alt="..." style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <?php
    }
    ?>
  </div>
  </div>

</body>

</html>
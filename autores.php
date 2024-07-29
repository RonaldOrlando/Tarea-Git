<?php
include("modelo/conexion.php");
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Libreria ITLA</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>
              Libreria ITLA
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="libros.php"> Libros </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="autores.php"> Autores </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="registrate.php">Registrate</a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->


  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Autores
      </h2>
      <p class="text-center">
        Los autores mas famosos
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/teacher-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Johnson White</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/teacher-2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Chastity Locksley</h5>
            </div>

          </div>
          <div class="card">
            <img class="card-img-top" src="images/teacher-3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Innes del Castillo</h5>

            </div>

          </div>

          <div class="card">
            <img class="card-img-top" src="images/teacher-4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Michel DeFrance</h5>

            </div>

          </div>
        </div>
      </div>
      <h2 class="main-heading ">
        Aqui estan todos nuestros autores
      </h2>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Pais</th>
          </tr>
        </thead>
        <?php
        $libreria = new DBGestionLibreria();
        $autores = $libreria->getAutores();
        foreach ($autores as $registro) {
          print('<tbody>' .
            '<tr class="table-primary">' .
            '<th>' . $registro['nombre'] . '</th>' .
            '<th>' . $registro['apellido'] . '</th>' .
            '<th>' . $registro['telefono'] . '</th>' .
            '<th>' . $registro['ciudad'] . '</th>' .
            '<th>' . $registro['pais'] . '</th>' .
            '</tr>' .
            '</tbody>');
        }
        ?>

      </table>

    </div>
  </section>

  <!-- teacher section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- progreesbar script -->

  </script>
  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>
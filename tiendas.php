<?php
include('modelo/conexion.php');
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

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        Todas nuestras tiendas disponibles
      </h2>

      <table class="table-secondary">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Estado</th>
            <th scope="col">Pais</th>
            <th scope="col">Codigo Postal</th>
          </tr>
        </thead>
        <?php
        $libreria = new DBGestionLibreria();
        $titulos = $libreria->getTitulos();
        //var_dump($titulos);
        foreach ($titulos as $registro) {
          //print_r($registro);
          //print('<p>' . $registro['titulo'] . '</p>');
          print('<tbody>' .
            '<tr class="table-primary">' .
            '<th>' . $registro['titulo'] . '</th>' .
            '<th>' . $registro['tipo'] . '</th>' .
            '<th>' . $registro['precio'] . '</th>' .
            '<th>' . $registro['avance'] . '</th>' .
            '<th>' . $registro['notas'] . '</th>' .
            '<th>' . $registro['fecha_pub'] . '</th>' .
            '</tr>' .
            '</tbody>');


        }

        ?>
      </table>



      <div class="d-flex justify-content-center mt-5">
        </a>
      </div>
    </div>
  </section>




  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- progreesbar script -->


</body>

</html>
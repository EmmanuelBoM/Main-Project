<?php
//<!DOCTYPE html><html lang="en">
include("conecta.php");
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans:ital@1&family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f9e8b427c6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/fullBecas.css">
    <title>Todas las becas</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="items-menu">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingreso a Universidad
                      </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Convocatorias de ingreso</a>
                                <a class="dropdown-item" href="#">Rescursos de aprendizake</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Busca una beca</a>
                        </li>


                        <button class="btn btn-login" type="submit">Iniciar sesión</button>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="busqueda">
            <div class="inputs">
                <div class="buscar">
                    <i class="fas fa-search"></i>
                    <input type="text">
                </div>


                <select class="form-control">
                    <option>Default select</option>
                </select>
            </div>
        </section>

        <section class="titulos">
            <h5 class="texto">¿Necesitas materiales, comida escolar o colegiaturas más accesibles?</h5>
            <h5 class="texto">Pues adelante, échale un vistazo -lento- a</h5>
            <h1 class="titulo">todas las becas</h1>
            <h5 class="texto">y guarda tus prospectos usando un 🧡 </h5>
        </section>

        <section class="cards">
            <div class="row">
                <div class="col-12">
                    <div class="container cont-cards">
                        <div class="row mt-3 justify-content-center">

                          <?php
                          $sqld="SELECT * FROM beca;";
                          if ($resultado = $mysqli->query($sqld)) {}
                            $arreglomamon;$bandera=0;
                            foreach ($resultado as $key) {
                              $arreglomamon[$bandera]=$key;

                              echo'<div class="card mr-3 mb-3">
                                  <div class="card-body">
                                      <h5 class="card-title">'.$arreglomamon[$bandera]['nombre'].'</h5>
                                      <div class="row">
                                          <div class="col-6">
                                              <img class="card-img" src="'.$arreglomamon[$bandera]['logo'].'" alt="">
                                          </div>
                                          <div class="col-6">
                                              <p class="subtitle">La otorga:</p>
                                              <div class="et-morada">'.$arreglomamon[$bandera]['patrocinador'].'</div>
                                              <p class="subtitle">Durante:</p>
                                              <div class="et-morada">'.$arreglomamon[$bandera]['duracion'].'</div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-12 fechas-conv">
                                              <p class="subtitle2">Inicio de convocatoria:</p>
                                              <div class="inicio et-verde">'.$arreglomamon[$bandera]['fecha_inicio'].'</div>
                                              <p class="subtitle2">Fin de convocatoria:</p>
                                              <div class="fin et-roja">'.$arreglomamon[$bandera]['fecha_fin'].'</div>
                                              <p class="subtitle2">Monto:</p>
                                              <div class="et-morada">'.$arreglomamon[$bandera]['descripcion'].'</div>
                                          </div>
                                      </div>

                                  </div>
                              </div>';

                              $bandera=$bandera+1;
                            }


                            ?>


                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

</body>

</html>

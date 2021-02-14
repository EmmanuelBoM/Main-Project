<?php
include("conecta.php");
//<!DOCTYPE html><html lang="en">

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
    <link rel="stylesheet" href="./css/index.css">
    <title>[Proyecto]</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <section class="imagen">

            <div class="contenedor-items">
                <div class="textos">
                    <h1>¿Cuál será tu siguiente<span class="highlight-container"><span class="highlight">gran aventura?</span></span>
                    </h1>
                    <p>Ha llegado el momento de que valga la pena <span class="highlight-container2">todo el esfuerzo<span class="highlight2"></span></span> que has hecho!</p>

                </div>
                <button class="btn btn-signup">Comienza Aqui</button>
            </div>
        </section>

        <section class="acerca-de">
            <div class="contenedor-items">
                <img src="./img/index/3.1.png" alt="" class="ef1">
                <div class="textos">
                    <h3 class="l1">En [PROYECTO], creemos que un buen comienzo para disminuir la brecha educativa en México es acercar a las personas a las oportunidades de su vida.</h3>
                    <p class="l2">Entérate aquí de cuál será tu siguiente paso.</p>
                    <p class="l3">Estudia, viaja, prepárate.</p>
                </div>
                <img src="./img/index/3.2.png" alt="" class="ef2">
            </div>
            <img src="./img/index/2.png" alt="" class="vector">
        </section>

        <section class="cards">

            <!-- CONVOCATORIAS DESTACADAS -->
            <div class="row conv-dest">
                <div class="col-12">
                    <h2 class="titulo">Convocatorias destacadas</h2>
                    <img class="birr1" src="./img/index/4.1.png" alt="">
                    <img class="birr2" src="./img/index/4.2.png" alt="">
                    <img class="birr3" src="./img/index/4.3.png" alt="">
                    <div class="container cont-cards">
                      <div class="row mt-3 justify-content-center">
                      <?php
                      $sqld="SELECT * FROM convocatoria_universidad;";
                      if ($resultado = $mysqli->query($sqld)) {}
                      $arreglomamon;$bandera=0;
                      foreach ($resultado as $key) {
                        $arreglomamon[$bandera]=$key;

                      echo '
                            <div class="card mr-3 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">'.$arreglomamon[$bandera]['nombre'].'</h5>
                                    <div class="row">
                                        <div class="col-6 img-cont">
                                            <img class="card-img" src="'.$arreglomamon[$bandera]['logo'].'" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p class="subtitle">Financiamiento:</p>
                                            <div class="financiamiento et-morada">'.$arreglomamon[$bandera]['estado'].'</div>
                                            <p class="subtitle">Estado:</p>
                                            <div class="estado et-morada">'.$arreglomamon[$bandera]['lugar'].'</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fechas-conv">
                                            <p class="subtitle2">Inicio de convocatoria:</p>
                                            <div class="inicio et-verde">'.$arreglomamon[$bandera]['fecha_inicio'].'</div>
                                            <p class="subtitle2">Fin de convocatoria:</p>
                                            <div class="fin et-roja">'.$arreglomamon[$bandera]['fecha_fin'].'</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';

                        $bandera=$bandera+1;
                          }
                      ?>
                      </div>

                    </div>

                    <img class="linea1" src="./img/index/5.1.png" alt="">
                    <img class="linea2" src="./img/index/5.1.png" alt="">
                    <img class="mano1" src="./img/index/5.0.png" alt="">
                </div>
            </div>

            <!-- BECAS DESTACADAS -->
            <div class="row becas-dest">
                <div class="col-12">
                    <h2 class="titulo t-becas">Becas destacadas</h2>
                    <div class="container cont-cards">
                        <div class="row mt-3 justify-content-center">

                          <?php
                          $sqld="SELECT * FROM beca;";
                          if ($resultado = $mysqli->query($sqld)) {}
                            $arreglomamon;$bandera=0;
                            foreach ($resultado as $key) {
                              $arreglomamon[$bandera]=$key;

                            echo'  <div class="card mr-3 mb-3">
                                  <div class="card-body">
                                      <h5 class="card-title">'.$arreglomamon[$bandera]['nombre'].'</h5>
                                      <div class="row">
                                          <div class="col-6">
                                              <img class="card-img" src="'.$arreglomamon[$bandera]['logo'].'" alt="">
                                          </div>
                                          <div class="col-6">
                                              <p class="subtitle">La otorga:</p>
                                              <div class="financiamiento et-morada">'.$arreglomamon[$bandera]['patrocinador'].'</div>
                                              <p class="subtitle">Durante:</p>
                                              <div class="estado et-morada">'.$arreglomamon[$bandera]['duracion'].'</div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-12 fechas-conv">
                                              <p class="subtitle2">Inicio de convocatoria:</p>
                                              <div class="inicio et-verde">'.$arreglomamon[$bandera]['fecha_inicio'].'</div>
                                              <p class="subtitle2">Fin de convocatoria:</p>
                                              <div class="fin et-roja">'.$arreglomamon[$bandera]['fecha_fin'].'</div>
                                              <p class="subtitle2">Monto:</p>
                                              <div class="fin et-morada">'.$arreglomamon[$bandera]['monto'].'</div>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-footer">¡Conócenos!</h1>
                    <p class="texto-footer">Síguenos y ayuda a la comunidad a crecer✨</p>
                    <p class="email-contacto">email@us.com</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

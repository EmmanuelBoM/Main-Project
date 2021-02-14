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
    <link rel="stylesheet" href="./css/fullRecursos.css?v=<?php echo time(); ?>">
    <title>Todos los recursos</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        <img src="./img/logo1.png" alt="" class="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="items-menu">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingreso a Universidad
                      </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./fullConv.php?listaEstados=">Convocatorias de ingreso</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./fullRecursos.php">Recursos de aprendizaje</a>
                                
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./fullBecas.php">Busca una beca</a>
                        </li>


                        <button  id = "btn-login" class="btn btn-login" type="submit">Iniciar sesión</button>
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

            </div>
        </section>

        <section class="titulos">
            <h5 class="texto">Todo lo bueno cuesta y el esfuerzo se recompensa.</h5>
            <h5 class="textos">Para llegar a darlo todo en el examen, aquí tienes algunos</h5>
            <h1 class="titulo">recursos de estudio</h1>
            <h5 class="texto">Guarda los que más te sirvan usando un 🧡 </h5>
        </section>

        <section class="cards">
            <div class="row">
                <div class="col-12">
                    <div class="container cont-cards">
                         <div class="row mt-3 justify-content-center">
                           <?php
                           $sqld="SELECT * FROM herramienta;";
                           if ($resultado = $mysqli->query($sqld)) {}
                             $arreglomamon;$bandera=0;
                             foreach ($resultado as $key) {
                               $arreglomamon[$bandera]=$key;

                               echo'<div class="card mr-3 mb-3">
                                   <div class="card-body">
                                       <h5 class="card-title">'.$arreglomamon[$bandera]['nombre'].'</h5>
                                       <div class="row">
                                           <div class="col-6 img-cont">
                                               <img class="card-img" src="'.$arreglomamon[$bandera]['logo'].'" alt="">
                                           </div>
                                           <div class="col-6">
                                               <p class="subtitle">Impartido por:</p>
                                               <div class="et-morada">'.$arreglomamon[$bandera]['impartidor'].'</div>
                                               <p class="subtitle">Costo:</p>
                                               <div class="et-morada">'.$arreglomamon[$bandera]['costo'].'</div>
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

    <script src='./js/index.js'></script>

</body>

</html>

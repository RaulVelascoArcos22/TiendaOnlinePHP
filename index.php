<?php
session_start();
require 'funciones.php';

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeBit Cine</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="main.css">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">CodeBit Cine</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CodeBit Cine</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadPeliculas(); ?></span></a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="main">
    <?php
              require 'vendor/autoload.php';
              $pelicula = new Kawschool\Pelicula;
              $info_peliculas = $pelicula->mostrar();
              $cantidad = count($info_peliculas);
              if($cantidad > 0){
                for($x =0; $x < $cantidad; $x++){
                  $item = $info_peliculas[$x];
            ?>
              <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h1 class="text-center p"><?php print $item['titulo'] ?></h1>  
                    </div>
                    <div class="panel-body">
                      <?php
                          $foto = 'imgs/'.$item['foto'];
                          if(file_exists($foto)){
                        ?>
                          <img src="<?php print $foto; ?>" class="img-responsive">
                      <?php }else{?>
                        <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                      <?php }?>
                    </div>
                    <div class="panel-footer">
                        <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn btn-primary btn-block">
                          <span class="glyphicon glyphicon-shopping-cart"></span>Comprar
                        </a>
                    </div>
                  </div>
              
              
              </div>
          <?php
                }
            }else{?>
              <h4>NO HAY REGISTROS</h4>

          <?php }?>




        </div>
      
        

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>

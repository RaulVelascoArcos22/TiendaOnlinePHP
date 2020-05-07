
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeBit Cine</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
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
          <a class="navbar-brand" href="../dashboard.php">CodeBit Cine</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="../pedidos/index.php" class="btn">Pedidos</a>
            </li> 
            <li class="active">
              <a href="index.php" class="btn">Peliculas</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Salir</a></li>
                </ul>
            </li>
          </ul>




        </div>
      </div>
    </nav>

    <div class="container" id="main">
      <div class="main-form">
      <div class="row">

 <div class="col-md-12">
  <fieldset>
    <legend>Datos de la Pelicula</legend>
    <form method="POST" action="../acciones.php" enctype="multipart/form-data" >
              <div class="form-group">
                  <label>Titulo</label>
                  <input type="text" class="form-control" name="titulo" required>
              </div>
              <div class="form-group">
                  <label>Descripción</label>
                  <textarea class="form-control" name="descripcion" id="" cols="3" required></textarea>
              </div>
              <div class="form-group">
                  <label>Categorias</label>
                  <select class="form-control" name="categoria_id" required>
                    <option value="">--SELECCIONE--</option>
                    <?php
                     require '../../vendor/autoload.php';
                      $categoria = new Kawschool\Categoria;
                      $info_categoria = $categoria->mostrar();
                      $cantidad = count($info_categoria);
                        for($x =0; $x< $cantidad;$x++){
                          $item = $info_categoria[$x];
                      ?>
                        <option value="<?php print $item['id'] ?>"><?php print $item['nombre'] ?></option>
                      <?php

                        }
                      ?>
                  </select>
              </div>
              <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="foto" required>
              </div>
              <div class="form-group">
                  <label>Precio</label>
                  <input type="text" class="form-control" name="precio" placeholder="0.00" required>
              </div>
      <input type="submit" name="accion" class="btn btn-primary" value="Registrar">
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </form>
  </fieldset>

</div>
</div>
        
      </div>
      <!-- FIn -->

    </div> 
    <!-- FIn -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

  </body>
</html>

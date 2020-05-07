<?php
//ACTIVAR LAS SESSIONES EN PHP
session_start();
require 'funciones.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    require 'vendor/autoload.php';
    $pelicula = new Kawschool\Pelicula;
    $resultado = $pelicula->mostrarPorId($id);
    
    if(!$resultado) 
        header('Location: index.php');
        if(isset($_SESSION['carrito'])){ //SI EL CARRITO EXISTE
            //SI EL PELICULA EXISTE EN EL CARRITO
            if(array_key_exists($id,$_SESSION['carrito'])){
                actualizarPelicula($id);
            }else{
                //  SI EL CARRITO NO EXISTE EN EL CARRITO
                agregarPelicula($resultado, $id);
            }
    
        }else{
            //  SI EL CARRITO NO EXISTE
            agregarPelicula($resultado, $id);
    
        }
    

}
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
      </div>
    </nav>
    <div class="container" id="main">
    <div class="row">
            <div class="jumbotron">
                <p>Gracias por su compra</p>
                <p>
                    <a href="index.php">Regresar</a>
                </p>
            </div>



        </div>
      </div> <!-- /container -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>

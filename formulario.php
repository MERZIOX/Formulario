<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos</title>
</head>

<body>






  <?php

  $nombre1 = $_POST['nombre1'];
  $nombre2 = $_POST['nombre2'];
  $apellido1 = $_POST['apellido1'];
  $apellido2 = $_POST['apellido2'];
  $pass1 = $_POST['pass1'];
  $email = $_POST['correo'];
  $fecha = $_POST['fecha'];
  $genero = $_POST['genero'];
  $ciudad = $_POST['ciudad'];


  ?>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "registro") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into personas(primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,correo,contrasena,fecha_nacimiento,ciudad,genero) values 
                       ('$_REQUEST[nombre1]','$_REQUEST[nombre2]','$_REQUEST[apellido1]','$_REQUEST[apellido2]','$_REQUEST[correo]','$_REQUEST[pass1]','$_REQUEST[fecha]','$_REQUEST[ciudad]','$_REQUEST[genero]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);


  ?>

  <h1 class="h1">ENHORABUENA <br>
    Gracias por unirtenos aqui abajo podras ver todos los datos que registramos de tí. <br>
    Luego se te entregara un codigo para el acceso.</h1>

  <img src="" alt="">


  <table class="table table-bordered">
    <thead class="thead-dark">
      <th>Primer nombre</th>
      <th>Segundo nombre</th>
      <th>Primer apellido</th>
      <th>Segundo apellido</th>
      <th>Contraseña</th>
      <th>Correo electronico</th>
      <th>Fecha</th>
      <th>Genero</th>
      <th>Ciudad</th>

      <thead class="thead-light">
        <td><?php echo " $nombre1 " ?></td>
        <td><?php echo " $nombre2 " ?></td>
        <td><?php echo " $apellido1 " ?></td>
        <td><?php echo " $apellido2 " ?></td>
        <td><?php echo " $pass1 " ?></td>
        <td><?php echo " $email " ?></td>
        <td><?php echo " $fecha " ?></td>
        <td><?php echo " $genero " ?></td>
        <td><?php echo " $ciudad " ?></td>
        </tr>
        <hr>
        <div class="plex">
          <img id="img" src="IMG\finalizado-png.png" alt="">
        </div>
        <style>
          .h1 {
            text-align: center
          }

          #img {
            align-self: center
          }

          .plex {
            display: flex;
            justify-content: center
          }
        </style>
</body>

</html>
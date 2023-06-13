
<?php
include('conexion.php');

$con = connection();
$sql = "SELECT * FROM `clientes`";
$query = mysqli_query($con, $sql);

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <!--meta description-->
    <meta name="description" content="ZALT la mejor empresa de logistica" />
    <!--palabras claves seo-->
    <meta name="keywords" content="html,css,js,bootstrap" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  

    <link rel="stylesheet" href="../css/main.css" />
    <title>Clientes</title>
  </head>
  <body>


  <div class="container">
  <h1>Clientes</h1>

<table class="table">
<thead>
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Email</th>
    <th scope="col">Servicio</th>
    <th scope="col">Direccion</th>
    <th scope="col">Departamento</th>
    <th scope="col">Cuidad</th>
    <th scope="col">Telefono</th>
    <th>Acciones</th>
  
  </tr>
</thead>

<tbody>
<?php
          $query = "SELECT * FROM clientes";
          $result_tasks = mysqli_query($con, $sql);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td><?php echo $row['nombres'] ; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['servicio']; ?></td>
      <td><?php echo $row['direccion']; ?></td>
      <td><?php echo $row['departamento']; ?></td>
      <td><?php echo $row['cuidad']; ?></td>
      <td><?php echo $row['telefono']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="borrar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
  
 
</tbody>
</table>
  </div>
 

  </body>
   
</html>

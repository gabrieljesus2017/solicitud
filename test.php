
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"/>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"/>

    <link rel="stylesheet" href="../css/main.css" />
    <title>Clientes</title>
  </head>
  <body>


  <div class="container">
  <h1>Clientes</h1>
  <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">PHP MySQL CRUD</a>
      </div>
    </nav>


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
            </a>
            <?php if (isset($row['id'])) : ?>
    <a href="borrar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
        Borrar <i class="far fa-trash-alt"></i>
    </a>
<?php endif; ?>


<?php if (isset($row['id'])) : ?>
    <a href=".php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Borrar</a>
    <i class="fas fa-marker"></i>
<?php endif; ?>

               
              
            </td>
          </tr>
          <?php } ?>
  
 
</tbody>
</table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



  </body>
   
</html>

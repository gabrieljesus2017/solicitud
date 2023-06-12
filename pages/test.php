
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

    <link rel="stylesheet" href="../css/main.css" />
    <title>Test page</title>
  </head>
  <body>

  <h1>Usuarios</h1>

  <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td>
                        <?php echo $row['nombre']; ?>
                    </td>
                   
                    
                </tr>
            <?php endwhile; ?>

  </body>
   
</html>

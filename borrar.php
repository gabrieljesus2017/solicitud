
<?php
include('conexion.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM clientes WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
  
   
  }


  
  ?>
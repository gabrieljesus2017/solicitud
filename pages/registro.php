<?php
  // conexión con la base de datos y el servidor
  $server = "127.0.0.1:3306";
  $user = "root";
  $pass = "";
  $db = "solicitud";
  $conexion = new mysqli($server, $user, $pass, $db);
  if ($conexion->connect_errno) {
    die("La conexión ha fallado: " . $conexion->connect_error);
  }

  // obtenemos los valores del formulario
  $nombre = $_POST['inputName'] ?? '';
    $email = $_POST['inputEmail'] ?? '';
    $servicio = $_POST['inputServicios'] ?? '';
    $direccion = $_POST['inputAddress'] ?? '';
    $departamento = $_POST['inputZip1'] ?? '';
    $ciudad = $_POST['inputCity'] ?? '';
    $telefono = $_POST['inputPhone'] ?? '';

  // ingresamos la información a la base de datos
  $query = "INSERT INTO clientes (nombres, email, servicio, direccion, departamento, cuidad, telefono) VALUES(?, ?, ?, ?, ?, ?, ?)";

  // Preparar la consulta
   $stmt = $conexion-> prepare($query);
  if ($stmt === false) {
    die("Error en la consulta: " . $conexion->error);
  }

  // Asociar los parámetros a la consulta
  $stmt->bind_param("sssssss", $nombre, $email, $servicio, $direccion, $departamento, $ciudad, $telefono);

  // Ejecutar la consulta
  if ($stmt->execute()) {
    echo '
      <script>
        alert("Registro Exitoso");
        location.href="contacto.html";
      </script>
    ';
  } else {
    echo "Error guardando los datos: " . $stmt->error;
  }

  // cerrar la conexión
  $stmt->close();
  $conexion->close();
?>

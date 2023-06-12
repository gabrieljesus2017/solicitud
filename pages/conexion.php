<?php

function connection()
{
    $host = "127.0.0.1:3306";
    $user = "root";
    $pass = "";
    $bd = "solicitud";

    $connect = mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);

    return $connect;
}
;

?>
<?php 

    $conn = new mysqli('localhost','root','root','univ');//ip,usuario,contraseña,nombre_bbbdd
    if ($conn->connect_error){
        echo $error-> $conn->connect_error;
    }

?>
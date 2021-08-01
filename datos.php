<?php
    $conectar = mysqli_connect("localhost","root","", "datoseve");
    if(!$conectar) {
        echo"No es posible conectar con el servidor";
    }else{
        $base = mysqli_select_db($conectar, "datos");
        if(!$base) {
            echo"No se encontró la base de datos";
        }
    }

    $name=$_POST["name"];
    $email=$_POST["email"];
    $date=$_POST["date"];
    $tel=$_POST["tel"];
    $pais=$_POST["pais"];
    $ciudad=$_POST["ciudad"];
    $grado=$_POST["grado"];
    $escuela=$_POST["escuela"];
    $experiencia=$_POST["experiencia"];
    $motivo=$_POST["motivo"];

    $sql = "INSERT INTO datos VALUES('$name', '$email', '$date', '$tel', '$pais', '$ciudad', '$grado', '$escuela', '$experiencia', '$motivo')";

    $ejecutar = mysqli_query($conectar, $sql);

    if(!$ejecutar) {
        echo"Error";
    }else{
        echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
    }
?>
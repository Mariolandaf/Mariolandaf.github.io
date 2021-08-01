<?php
include("datos2.php");

$v1=$_POST["nombre"];
$v2=$_POST["email"];
$v3=$_POST["fecha"];
$v4=$_POST["tel"];
$v5=$_POST["pais"];
$v6=$_POST["ciudad"];
$v7=$_POST["grado"];
$v8=$_POST["escuela"];
$v10=$_POST["experiencia"];
$v11=$_POST["motivo"];

insertar($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11);

function insertar($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11) {
    global $conex;

    if(!mysqli_query($conex, "INSERT INTO datos(nombre, email, fecha, tel, pais, ciudad, grado, escuela, experiencia, motivo) VALUES ('".$v1."', '".$v2."', '".$v3."', '".$v4."', '".$v5."', '".$v6."', '".$v7."', '".$v8."', '".$v9."', '".$v10."', '".$v11."')"))
    {
        echo "ERROR!";
    }
    else {
        echo "Acción exitosa";
    }
}
?>
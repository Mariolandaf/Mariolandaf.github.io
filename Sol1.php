//Conexion base de datos y servidor

$link=mysql_connect (127.0.0.1,root,"") or die ("<h2>No se encuentra el servidor</h2>");;
$bd=mysql_select_bd("solicitud",$link) or die ("<h2>Error de conexion</h2>");;

//Valores del formulario

$Nombre=$_POST['Escriba su nombre'];
$Email=$_POST['Escriba su email'];
$Edad=$_POST['Ingrese su fecha de nacimiento'];
$NumCelular=$_POST['Ingrese su número celular'];
$PaisResidencia=$_POST['Escriba su país de residencia'];
$CiudadResidencia=$_POST['Especifique el nombre de la ciudad/comunidad donde vive'];
$UltimoGradoEstudios=$_POST['GradoUsuario'];
$InstitucionAcademica=$_POST['Mencione el nombre de la institución académica donde estudia actualmente o de la universidad donde se graduó'];
$Experiencia=$_POST['¡Cuéntanos!'];
$Motivo=$_POST['Escriba aquí'];

//Ingresar la informacion a la tabla de datos


mysql_query("INSER INTO solicitud VALUES"('$Nombre','$Email','$Edad','$NumCelular','$PaisResidencia','$CiudadResidencia','$UltimoGradoEstudios','$InstitucionAcademica','$Experiencia','$Motivo')",$link) or die  ("<h2>Error de envio</h2>");
echo'





<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="sistema";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die("NO HAY CONEXION A LA BASE DE DATOS".mysql_connection_error());
}
$id_calificacion=  $_POST["id_calificacion"];
$lenguaje = $_POST["lenguaje"];
$pensamiento = $_POST["pensamiento"];
$educacion = $_POST["educacion"];
$exploracion = $_POST["exploracion"];
$ingles = $_POST["ingles"];
$artes= $_POST["artes"];
$id_materia =1;
$promedio = ($lenguaje+$pensamiento+$educacion+$exploracion+$ingles+$artes)/6;


$consulta="UPDATE calificacion SET lenguaje='$lenguaje',pensamiento ='$pensamiento',educacion='$educacion', exploracion='$exploracion', ingles='$ingles',  artes='$artes'   where id_calificacion='$id_calificacion'";
$query = mysqli_query($conn, $consulta);

if($query){
echo "<script> alert('Datos guardados');
    location.href = 'calificacion_profesor.php';
    </script>";

}
else{
    return "error";
}
    
     
?>


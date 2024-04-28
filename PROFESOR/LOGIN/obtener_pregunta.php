
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="sistema";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die("NO HAY CONEXION A LA BASE DE DATOS".mysql_connection_error());
}else{

}

$nombre = $_POST["nombre"];


$sql = "SELECT pregunta_seg FROM usuario WHERE nombre = '$nombre'";
        $result = $conn->query($sql);

       
if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            
$pregunta_seg = $row["pregunta_seg"];
 
echo $pregunta_seg;
    
 
        } 
       
else {
            echo "No se encontró el usuario.";
        }

    


?>




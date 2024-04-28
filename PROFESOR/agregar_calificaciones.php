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


$id_alumno = $_POST["id_alumno"];
$lenguaje = $_POST["lenguaje"];
$pensamiento = $_POST["pensamiento"];
$educacion = $_POST["educacion"];
$exploracion = $_POST["exploracion"];
$ingles = $_POST["ingles"];
$artes= $_POST["artes"];
$id_materia =1;
$id_calificacion= null;


$promedio = ($lenguaje+$pensamiento+$educacion+$exploracion+$ingles+$artes)/6;

$insertar = "INSERT INTO calificacion VALUES('$id_calificacion','$lenguaje','$pensamiento','$educacion','$exploracion','$ingles','$artes','$promedio','$id_alumno','$id_materia')";
if ($conn->query($insertar) === TRUE) {
  $id_usuario = $conn->insert_id;
      //  echo "El último ID insertado es: " . $id_usuario;
   
} else {
    echo "Error al insertar el registro: " . $conn->error;
}
  
if($insertar){
   
    print <<< here
    <!DOCTYPE html>
    <html>
    <head>
    <title>Alerta con redirección</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <script>
    $(document).ready(function() {
    
    Swal.fire({
    title: 'Nuevos datos ingresados',
    text: 'Se guardaron exitosamente los datos',
    icon: 'success',
    confirmButtonText: 'Aceptar'
    }).then((result) => {
    if (result.isConfirmed) {
    window.location.href = 'calificacion_profesor.php';
    }});
    
    });
    </script>
    </body>
    </html>
    here;
     
}
else{
      
    print <<< here
    <!DOCTYPE html>
    <html>
    <head>
    <title>Alerta con redirección</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <script>
    $(document).ready(function() {
    
    Swal.fire({
    title: 'Nuevos datos ingresados',
    text: 'No se guardaron exitosamente los datos',
    icon: 'error',
    confirmButtonText: 'Aceptar'
    }).then((result) => {
    if (result.isConfirmed) {
    window.location.href = 'calificacion_profesor.php';
    }});
    
    });
    </script>
    </body>
    </html>
    here;
}
















                                               
?>
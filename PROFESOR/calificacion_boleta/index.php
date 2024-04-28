<!DOCTYPE html>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="sistema";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if(!$conn){
    die("NO HAY CONEXION A LA BASE DE DATOS".mysql_connection_error());
}


$id = isset($_GET["id_calificacion"]) ? $_GET["id_calificacion"] : 0;

$consulta="SELECT * FROM calificacion WHERE id_calificacion={$id} ";
$query = mysqli_query($conn, $consulta);
$row =$query->fetch_assoc();





$consulta2=" SELECT a.nombre, a.apellido_p, a.apellido_m FROM calificacion c JOIN alumno a ON c.id_alumno = a.id_alumno  WHERE c.id_calificacion ={$id} ";





?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Boleta de calificaciones</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
        <center><h2 class="name">JARDIN DE NIÑOS "LOS NENES DE CALVA" </h2> </center>
      <br><br>
       <div id="company">
        <div>Plantel Chimalhuacan</div>
        <div>Ciclo escolar 2022-2023</div>
        <div><a href="mailto:company@example.com">Jardin_nenes@calva.com</a></div>
        </div>
    </header>
    <main>
        <div id="client">
          <div class="to">Alumno:</div>
          <h2 class="name"><?php $consulta4 = " SELECT a.nombre, a.apellido_p, a.apellido_m FROM calificacion c JOIN alumno a ON c.id_alumno = a.id_alumno  WHERE c.id_calificacion ={$id} ";

$resultado = mysqli_query($conn, $consulta4);

if (!$resultado) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado) > 0) {
    // Mostrar el resultado
    $fila = mysqli_fetch_assoc($resultado);
    $nombre = $fila['nombre'];
        $apellido_p = $fila['apellido_p'];
            $apellido_m = $fila['apellido_m'];


    
    echo "" . $nombre."  ".$apellido_p."  ".$apellido_m;
} else {
    echo "No se encontraron resultados.";
}
 ?> </h2>
           <a >Grupo:</a><a><?php $consulta20 = " SELECT g.nombre AS nombre_grupo
FROM calificacion c
JOIN alumno a ON c.id_alumno = a.id_alumno
JOIN grupo g ON a.id_grupo = g.id_grupo
WHERE c.id_calificacion = {$id}";

$resultado20 = mysqli_query($conn, $consulta20);

if (!$resultado20) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado20) > 0) {
    // Mostrar el resultado
    $fila20 = mysqli_fetch_assoc($resultado20);
    $nombre_grupo = $fila20['nombre_grupo'];
    
    echo "  " . $nombre_grupo;
} else {
    echo "No se encontraron resultados.";
}
 ?></a>
        </div>
        <br>
        <div id="invoice">
          <h1>Boleta de evaluacion</h1>
          
          
          
          <div class="date">
              <script>
date = new Date().toLocaleDateString();
document.write(date);
</script>
          </div>
          <div class="date">CCT: 22009822</div><br>
        </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">CLAVE</th>
            <th class="">MATERIA</th>
            <th class="total">CALIFICACION FINAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">012001</td>
            <td class="desc"><h3>LENGUAJE Y COMUNICACION</h3>El alumno aprendio a establecer relaciones interpersonales, expresar sensaciones, emociones, sentimientos.</td>

          
            <td class="total"><center><?php $consulta5 = " SELECT lenguaje
FROM calificacion
WHERE id_calificacion = {$id}";

$resultado2 = mysqli_query($conn, $consulta5);

if (!$resultado2) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado2) > 0) {
    // Mostrar el resultado
    $fila2 = mysqli_fetch_assoc($resultado2);
    $lenguaje = $fila2['lenguaje'];
    
    echo "" . $lenguaje;
} else {
    echo "No se encontraron resultados.";
}
 ?></center></td>
          </tr>
          <tr>
            <td class="no">024002</td>
            <td class="desc"><h3>PENSAMIENTO MATEMATICO</h3>El alumno aprendio a formar las bases del pensamiento lógico matemático para resolver situaciones y problemas en los diferentes campos del saber humano.
</td>
          
            <td class="total"><center><?php $consulta9 = " SELECT pensamiento
FROM calificacion
WHERE id_calificacion = {$id}";

$resultado9 = mysqli_query($conn, $consulta9);

if (!$resultado9) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado9) > 0) {
    // Mostrar el resultado
    $fila9 = mysqli_fetch_assoc($resultado9);
    $pensamiento = $fila9['pensamiento'];
    
    echo "" . $pensamiento;
} else {
    echo "No se encontraron resultados.";
}
 ?></center></td>
          </tr>
          <tr>
            <td class="no">032032</td>
            <td class="desc"><h3>EDUCACION SOCIOEMOCIONAL</h3>El alumno aprendio tener autoconocimiento, cpmprender su entorno,generar autoconfianza, respeto y resiliencia.</td>
        
            <td class="total"><center><?php $consulta10 = " SELECT educacion
FROM calificacion
WHERE id_calificacion = {$id}";

$resultado10 = mysqli_query($conn, $consulta10);

if (!$resultado10) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado10) > 0) {
    // Mostrar el resultado
    $fila10 = mysqli_fetch_assoc($resultado10);
    $educacion = $fila10['educacion'];
    
    echo "" . $educacion;
} else {
    echo "No se encontraron resultados.";
}
 ?></center></td>
          </tr>
           <tr>
            <td class="no">046001</td>
            <td class="desc"><h3>EXPLORACION Y COMPRENCION DEL MUNDO NATURAL Y SOCIAL</h3>El alumno aprendio  a  reconozcan la importancia de cuidar su cuerpo y de participar en acciones para 
prevenir accidentes y desastres en el lugar donde viven.y</td>
         
          <td class="total"><center><?php $consulta11 = " SELECT exploracion
FROM calificacion
WHERE id_calificacion = {$id}";

$resultado11 = mysqli_query($conn, $consulta11);

if (!$resultado11) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado11) > 0) {
    // Mostrar el resultado
    $fila11 = mysqli_fetch_assoc($resultado11);
    $exploracion = $fila11['exploracion'];
    
    echo "" . $exploracion;
} else {
    echo "No se encontraron resultados.";
}
 ?></center></td>
          
          </tr>
          <tr>
            <td class="no">059001</td>
            <td class="desc"><h3>INGLES</h3>El alumno aprendio bases del idioma ingles como reconcoer numeros, letras, colores, promobres y palabras basicas.</td>
          
            <td class="total"><center><?php $consulta12 = " SELECT ingles
FROM calificacion
WHERE id_calificacion = {$id}";

$resultado12 = mysqli_query($conn, $consulta12);

if (!$resultado12) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado12) > 0) {
    // Mostrar el resultado
    $fila12 = mysqli_fetch_assoc($resultado12);
    $ingles = $fila12['ingles'];
    
    echo "" . $ingles;
} else {
    echo "No se encontraron resultados.";
}
 ?></center></td>
          </tr>
           <tr>
            <td class="no">063200</td>
            <td class="desc"><h3>ARTES</h3>El alumno aprende a desarrollar su creatividad y la forma de enterder las ideas de otros.</td>
          
 <td class="total"><center><?php $consulta13 = " SELECT artes
FROM calificacion
WHERE id_calificacion = {$id}";

$resultado13 = mysqli_query($conn, $consulta13);

if (!$resultado13) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado13) > 0) {
    // Mostrar el resultado
    $fila13 = mysqli_fetch_assoc($resultado13);
    $artes = $fila13['artes'];
    
    echo "" . $artes;
} else {
    echo "No se encontraron resultados.";
}
 ?></center></td>          </tr>
        </tbody>
        <tfoot>
        </tfoot>
      </table>
      <center> <div id="thanks">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROMEDIO FINAL &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <?php $consulta14 = " SELECT promedio
FROM calificacion
WHERE id_calificacion = {$id}";

$resultado14 = mysqli_query($conn, $consulta14);

if (!$resultado14) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado14) > 0) {
    // Mostrar el resultado
    $fila14 = mysqli_fetch_assoc($resultado14);
    $promedio = $fila14['promedio'];
    
    echo "                               " ."                               " . $promedio;
} else {
    echo "No se encontraron resultados.";
}
 ?> </div></center> 
      
      <div id="notices">
        <div>Tutor :</div>
        <div class="notice"><?php $consulta21 = "SELECT t.nombre, t.apellido_p, t.apellido_m
FROM calificacion c
JOIN alumno a ON c.id_alumno = a.id_alumno
JOIN tutor t ON a.id_tutor = t.id_tutor
WHERE c.id_calificacion = {$id}";

$resultado21 = mysqli_query($conn, $consulta21);

if (!$resultado21) {
    die("Error al realizar la consulta: " . mysqli_error($conn));
}

if (mysqli_num_rows($resultado21) > 0) {
    // Mostrar el resultado
    $fila21 = mysqli_fetch_assoc($resultado21);
    $nombre = $fila21['nombre'];
        $apellido_p = $fila21['apellido_p'];
        $apellido_m = $fila21['apellido_m'];

    
    echo "" . $nombre."   " .$apellido_p. "   " .$apellido_m;
} else {
    echo "No se encontraron resultados.";
}
 ?></div>
        <br><br>
        
      </div><br><br>
      <center>Firma del tutor</center>
      <footer>
      FIRMA DEL DIRECTOR DEL PLANTEL 
    </footer>
    </main>
    
  </body>
</html>
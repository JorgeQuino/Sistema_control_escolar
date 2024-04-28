<!DOCTYPE html>
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
?>
<html lang="es">
<head>
	<title>Calificacion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				JARDIN DE NIÑOS<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">LOS NENES DE CALVA</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="inicio.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administracion <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="horario.html"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Horario</a>
						</li>
						<li>
							<a href="materias.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Materia</a>
						</li>
						<li>
							<a href="grupos.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Grupo</a>
						</li>
						
						<li>
							<a href="calificacion.php"><i class="zmdi zmdi-font zmdi-hc-fw"></i>Calificacion</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="usuario.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>Usuarios Nuevos</a>
						</li>
						<li>
							<a href="administrador.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="profesor.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Profesores</a>
						</li>
						<li>
							<a href="estudiante.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiantes</a>
						</li>
						<li>
							<a href="tutor.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>Tutores</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i>Registro de pagos<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						
						<li>
							<a href="pagos.php"><i class="zmdi zmdi-money zmdi-hc-fw"></i>Generar pagos</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">0</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Administracion <small>Calificacion</small></h1>
			</div>
			<p class="lead">Carga de calificaciones.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="agregar_calificaciones.php"  method="post">
									    	
											<div class="form-group label-floating">
											  <label class="control-label">Id del alumno</label>
											  <input name="id_alumno"class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Lenguaje y Conmunicacion</label>
											  <input name="lenguaje" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Pensamiento Matematico</label>
											  <input name="pensamiento" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Educacion Socioemocional</label>
											  <input name="educacion" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Exploracion y Comprencion del Mundo Natural y Social</label>
											  <input name="exploracion" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Ingles</label>
											  <input  name="ingles" class="form-control" type="text">
											</div>
                                        <div class="form-group label-floating">
											  <label class="control-label">Artes</label>
											  <input name="artes" class="form-control" type="text">
											</div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#ID</th>
											<th class="text-center">Id_alumno</th>
											<th class="text-center">Lenguaje y Comunicacion</th>
											<th class="text-center">Pensamiento Matematico</th>
											<th class="text-center">Educacion Socioemocional</th>
											<th class="text-center">Exploracion y Comunicacion</th>
											<th class="text-center">Ingles</th>
											<th class="text-center">Artes</th>
																						<th class="text-center">Promedio</th>

											<th class="text-center">Actualizar</th>
											<th class="text-center">Borrar</th>
								            <th class="text-center">Imprimir</th>

										</tr>
									</thead>
									<?php  foreach($conn->query("SELECT * FROM calificacion")as $row)?>

										
<tbody>
    <?php  
    foreach($conn->query("SELECT id_calificacion, lenguaje, pensamiento, educacion, exploracion, ingles, artes, promedio, id_alumno FROM calificacion") as $row) {
        ?>
        <tr>
            <td><?php echo $row["id_calificacion"] ?></td>
            <td><?php echo $row["id_alumno"] ?></td>
            <td><?php echo $row["lenguaje"] ?></td>
            <td><?php echo $row["pensamiento"] ?></td>
            <td><?php echo $row["educacion"] ?></td>
            <td><?php echo $row["exploracion"] ?></td>
            <td><?php echo $row["ingles"] ?></td>
            <td><?php echo $row["artes"] ?></td>
            <td><?php echo number_format($row["promedio"], 1) ?></td>

                   <td><a class="btn btn-success editbtn" data-toggle="modal" data-target="#editar" ><i class="zmdi zmdi-refresh"></i></a></td>
            
        <td>
				        <a href="#" class="btn btn-danger btn-raised btn-xs" onclick="preguntar(<?php echo $row["id_calificacion"];?>)"
				        ><i class="zmdi zmdi-delete"></i></a>
				        </td>
            
          			<td>
				        <a href="#" class="btn btn-blue btn-raised btn-xs"onclick="preguntar2(<?php echo $row["id_calificacion"];?>)" ><i class="zmdi zmdi-print"></i></a>
				        </td>	
        </tr>
    <?php 
    }
    ?>
</tbody>

								</table>
								<div><input type="search" name="busqueda" placeholder="ID Alumno">
 <input type="submit" value="Buscar"></div>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificaciones <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">0m</div>
				      	<h4 class="list-group-item-heading">Sin notificaciones</h4>
				      	
				    </div>
			  	</div>
			  	
				
			  	
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Ayuda</h4>
			    </div>
			    <div class="modal-body">
			        <p>
Por el momento no disponible..
            			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	
	
	<script type="text/javascript">
        function preguntar(id_calificacion){
            if(confirm('¿ESTAS SEGURO DE BORRAR ESTE REGISTRO CON EL ID '+id_calificacion+'?'))

                
            {
                window.location.href = "eliminar_usuario.php?id_usuario= " + id_usuario;
            }
        }
    
    </script>
	
	
 <div class="modal fade" id="editar" tabindex="-1" role="dialog" ariallabelledby="exampleModalLabel" aria-hidden=true"">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Administracion <small>Calificacion</small></h1>
			</div>
			<p class="lead">Carga de calificaciones.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Actualizar</a></li>
					  	
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="actualizar_calificacion.php"  method="post">
									    	<div class="form-group label-floating">
											  <label class="control-label">ID calificacion</label>
											  <input name="id_calificacion" id="id_calificacion" class="form-control" type="text">
											</div>
											
											<div class="form-group label-floating">
											  <label class="control-label">Lenguaje y Conmunicacion</label>
											  <input name="lenguaje" id="lenguaje" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Pensamiento Matematico</label>
											  <input name="pensamiento" id="pensamiento" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Educacion Socioemocional</label>
											  <input name="educacion" id="educacion" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Exploracion y Comprencion del Mundo Natural y Social</label>
											  <input name="exploracion"  id="exploracion" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Ingles</label>
											  <input  name="ingles"  id="ingles" class="form-control" type="text">
											</div>
                                        <div class="form-group label-floating">
											  <label class="control-label">Artes</label>
											  <input name="artes"  id="artes" class="form-control" type="text">
											</div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	
					</div>
				</div>
			</div>
		</div>
	
	
	
	
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
	   <script>
    $('.editbtn').on('click',function(){
                    
       $tr= $(this).closest('tr');    
    var datos=$tr.children("td").map(function (){
        return $(this).text();
    });
      $('#id_calificacion').val(datos[0]);
      $('#lenguaje').val(datos[1]);
      $('#pensamiento').val(datos[2]);
      $('#educacion').val(datos[3]);
              $('#exploracion').val(datos[4]);
              $('#ingles').val(datos[5]);
              $('#artes').val(datos[6]);




    
    
});
        
</script>
<script type="text/javascript">
        function preguntar2(id_calificacion){
            if(confirm('¿QUIERES IMPRIMIR LA BOLETA CON EL : '+id_calificacion+'?'))
            {
                window.location.href = "../ADMINISTRADOR/calificacion_boleta/index.php ?id_calificacion= " + id_calificacion;
            }
        }

    </script>


</body>
</html>
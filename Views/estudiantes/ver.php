
<section class="content-header">
	<h1>
	  Estudiantes
	  <small>Detalles</small>
	</h1>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">


			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Detalles del Estudiante</h3>
				</div>
				
				<div class="box-body">


					<div class="row">
						<div class="col-md-3 text-center" style="vertical-align: middle">
							<center><img src="<?php echo URL; ?>Views/template/imagenes/estudiantes/<?php echo $datos['imagen'] ?>" alt="" class="img-responsive"></center>
						</div>
						<div class="col-md-9">
							<ul class="list-group" > 
								<li class="list-group-item">
									<b>Nombres y Apellidos: </b><?php echo $datos['nombre'] ?>
								</li>
								<li class="list-group-item">
									<b>Edad: </b><?php echo $datos['edad'] ?>
								</li>
								<li class="list-group-item">
									<b>Promedio: </b><?php echo $datos['promedio'] ?>
								</li>
								<li class="list-group-item">
									<b>Sección: </b><?php echo $datos['nombre_seccion'] ?>
								</li>
								<li class="list-group-item">
									<b>Fecha de Registro: </b><?php echo $datos['fecha'] ?>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
				<!-- /.box-body -->

			</div>


		</div>
	</div>

		

</section>
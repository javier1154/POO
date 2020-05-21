<?php  
$estudiantes = new Controllers\estudiantesController();
$secciones = $estudiantes->listarSecciones();
?>

<section class="content-header">
	<h1>
	  Estudiantes
	  <small>Editar</small>
	</h1>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">


			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Datos del Estudiante</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="" method="POST">
					<div class="box-body">
						<div class="form-group">
							<label for="nombre">Nombres y Apellidos</label>
							<input type="hidden" name="id" value="<?php echo $datos['id'] ?>" required>
							<input type="text" name="nombre" value="<?php echo $datos['nombre'] ?>" class="form-control" id="nombre" required>
						</div>
						<div class="form-group">
							<label for="edad">Edad</label>
							<input type="number" name="edad" value="<?php echo $datos['edad'] ?>" class="form-control" id="edad" required>
						</div>
						<div class="form-group">
							<label for="promedio">Promedio</label>
							<input type="number" name="promedio" value="<?php echo $datos['promedio'] ?>" class="form-control" id="promedio" required>
						</div>
						<div class="form-group">
							<label for="id_seccion">Sección</label>
							<select name="id_seccion" id="id_seccion" required class="form-control">
								<?php  
								while($row =mysqli_fetch_array($secciones)){
									?>
									<option <?php if($row['id'] == $datos['id_seccion']){ echo "selected='selected'"; } ?> value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></option>
									<?php
								}
								?>
							</select>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Editar</button>
					</div>
				</form>
			</div>


		</div>
	</div>

		

</section>
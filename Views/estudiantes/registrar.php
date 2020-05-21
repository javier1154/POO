<section class="content-header">
	<h1>
	  Estudiantes
	  <small>Registrar</small>
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
				<form role="form" action="" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="nombre">Nombres y Apellidos</label>
							<input type="text" name="nombre" class="form-control" id="nombre" required>
						</div>
						<div class="form-group">
							<label for="edad">Edad</label>
							<input type="number" name="edad" class="form-control" id="edad" required>
						</div>
						<div class="form-group">
							<label for="promedio">Promedio</label>
							<input type="number" name="promedio" class="form-control" id="promedio" required>
						</div>
						<div class="form-group">
							<label for="id_seccion">Sección</label>
							<select name="id_seccion" id="id_seccion" required class="form-control">
								<option value="">Seleccione</option>
								<?php  
								while($row =mysqli_fetch_array($datos)){
									?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="imagen">Imagen</label>
							<input type="file" name="imagen" id="imagen">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Registrar</button>
					</div>
				</form>
			</div>


		</div>
	</div>

		

</section>
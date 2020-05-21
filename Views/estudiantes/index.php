<section class="content-header">
	<h1>
	  Estudiantes
	  <small></small>
	</h1>
</section>

<section class="content">
	
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th class="text-center">N°</th>
					<th class="col-md-1">Nombres</th>
					<th class="col-md-4">Nombres</th>
					<th class="col-md-1 text-center">Edad</th>
					<th class="col-md-1 text-center">Promedio</th>
					<th class="col-md-2">Sección</th>
					<th class="col-md-2 text-center">Fecha</th>
					<th class="col-md-1 text-center"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 0;
				while($row =mysqli_fetch_array($datos)){
					$i++;
					?>
					<tr>
						<td class="text-center"><?php echo $i ?></td>
						<th class="text-center"><img class="img-estudiante" src="<?php echo URL ?>Views/template/imagenes/estudiantes/<?php echo $row["imagen"] ?>"></th>
						<td>
							<a href="<?php URL ?>estudiantes/ver/<?php echo $row['id']; ?>">
								<?php echo $row["nombre"] ?>
							</a>
						</td>
						<td class="text-center"><?php echo $row["edad"] ?></td>
						<td class="info text-center bold"><?php echo $row["promedio"] ?></td>
						<td><?php echo $row["nombre_seccion"] ?></td>
						<td class="text-center"><?php echo $row["fecha"] ?></td>
						<td class="text-center">
							<a class="btn btn-warning btn-xs" href="<?php URL ?>estudiantes/editar/<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
							<a class="btn btn-danger btn-xs" href="<?php URL ?>estudiantes/eliminar/<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>

</section>


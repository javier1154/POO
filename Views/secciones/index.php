<section class="content-header">
	<h1>
	  Secciones
	  <small></small>
	</h1>
</section>

<section class="content">
	
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th class="text-center">N°</th>
					<th class="col-md-11">Nombres</th>
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
						<td><?php echo $row["nombre"] ?></td>
						<td class="text-center">
							<a class="btn btn-danger btn-xs" href="<?php URL ?>secciones/eliminar/<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<?php
				}

				
				?>
			</tbody>
		</table>
	</div>

</section>


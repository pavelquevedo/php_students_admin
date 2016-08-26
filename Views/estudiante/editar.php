<?php $secciones = $estudianteController->listarSecciones(); ?>
<div class="box-principal">
	<h3 class="titulo">Editar Estudiantes <?php echo $datos['nombre']; ?><hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Editar Esutidnate <?php echo $datos['nombre']; ?></h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos['imagen']; ?>">
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<label for="nombre" class="control-label">Nombre del estudiante</label>
							<input type="text" value="<?php echo $datos['nombre']; ?>" class="form-control" name="nombre" required>
						</div>
						<div class="form-group">
							<label for="edad" class="control-label">Edad</label>
							<input type="number" value="<?php echo $datos['edad']; ?>" class="form-control" name="edad" required>
						</div>
						<div class="form-group">
							<label for="promedio" class="control-label">Promedio</label>
							<input type="number" value="<?php echo $datos['promedio']; ?>" class="form-control" name="promedio" required>
						</div>
						<div class="form-group">
							<label for="promedio" class="control-label">Seccion (<b>Seccion Actual <?php echo $datos['nombre_seccion']; ?></b>)</label>
							<select name="id_seccion" class="form-control">
								<?php while($row = mysqli_fetch_array($secciones)){ ?>
									<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></option>
								<?php  }?>
							</select>
						</div>
						<input type="hidden" value="<?php echo $datos['id']; ?>" name="id" required>
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Editar" required>
							<input type="reset" class="btn btn-warning" value="Borrar" required>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
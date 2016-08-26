<div class="box-principal">
	<h3 class="titulo">Agregar Estudiantes<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Agregar un nuevo estudiante</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<label for="nombre" class="control-label">Nombre del estudiante</label>
							<input type="text" class="form-control" name="nombre" required>
						</div>
						<div class="form-group">
							<label for="edad" class="control-label">Edad</label>
							<input type="number" class="form-control" name="edad" required>
						</div>
						<div class="form-group">
							<label for="promedio" class="control-label">Promedio</label>
							<input type="number" class="form-control" name="promedio" required>
						</div>
						<div class="form-group">
							<label for="nombre" class="control-label">Seccion</label>
							<select name="id_seccion" class="form-control">
								<?php while($row = mysqli_fetch_array($datos)){ ?>
									<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></option>
								<?php  }?>
							</select>
						</div>
						<div class="form-group">
							<label for="imagen" class="control-label">Imagen</label>
							<input type="file" class="form-control" id="imagen" name="imagen" required>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Registrar" required>
							<input type="reset" class="btn btn-warning" value="Borrar" required>
						</div>

					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>
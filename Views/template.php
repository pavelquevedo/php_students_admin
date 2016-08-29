<?php namespace Views;

	$template = new Template();

	class Template{

		public function __construct(){

?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Administracion de estudiantes | Pavel Quevedo</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Students Admin Hola</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="http://localhost/students_admin/">Estudiantes <span class="sr-only">(current)</span></a></li>
		        <li><a href="http://localhost/students_admin/seccion/index">Secciones</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<div class="col-md-2"></div>
		<div class="col-md-8">
<?php
	
	}

	public function __destruct(){
?>
	
		</div>
		<div class="col-md-2"></div>
	</body>
	</html>

<?php
		}
	}
	
 ?>
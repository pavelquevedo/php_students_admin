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
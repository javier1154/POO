<?php namespace Views;

	$template = new Template();

	class Template{

		public function __construct(){
			?>
			<!DOCTYPE html>
			<html lang="es">
			<head>
				<meta charset="UTF-8">
				<title>POO</title>
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/AdminLTE.css">
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/_all-skins.min.css">
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/app.css">
			</head>
			<body class="hold-transition skin-blue layout-top-nav">
			<div class="wrapper">
				<?php
				include ROOT."Views/template/header.php";
				?>
				<div class="content-wrapper">
					<div class="container">


			<?php
		}

		public function __destruct(){
			?>
					</div>
				</div>
			</div>
			<script src="<?php echo URL; ?>Views/template/js/jQuery-2.2.0.min.js"></script>
			<script src="<?php echo URL; ?>Views/template/js/bootstrap.min.js"></script>
			<script src="<?php echo URL; ?>Views/template/js/AdminLTE.min.js"></script>
			</body>
			</html>
			<?php
		}

	}

?>
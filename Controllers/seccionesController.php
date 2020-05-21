<?php namespace Controllers;

	use Models\Seccion as Seccion;

	class seccionesController{
		
		private $seccion;

		public function __construct(){
			$this->seccion = new Seccion();
		}
		
		public function index(){
			$datos = $this->seccion->listar();
			return $datos;
		}


		//comentario de prueba en git

		public function registrar(){

			if ($_POST) {

				$this->seccion->nombre = $_POST["nombre"];
				$this->seccion->guardar();

				header("Location: " . URL . "secciones");

			}

		}

		public function eliminar($id){
			$this->seccion->id = $id;
			$datos = $this->seccion->eliminar();
			
			header("Location: " . URL . "secciones");
		}


	}

?>
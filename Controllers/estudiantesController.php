<?php namespace Controllers;

	use Models\Estudiante as Estudiante;
	use Models\Seccion as Seccion;
	
	class estudiantesController{

		private $estudiante;
		private $seccion;

		public function __construct(){
			$this->estudiante = new Estudiante();
			$this->seccion = new Seccion();
		}
		
		public function index(){
			$datos = $this->estudiante->listar();
			return $datos;
		}

		public function registrar(){

			if ($_POST) {
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;

				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){

					$nombre = date('is').$_FILES['imagen']['name'];
					$ruta = "Views".DS."template".DS."imagenes".DS."estudiantes".DS.$nombre;

					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

					$this->estudiante->nombre = $_POST["nombre"];
					$this->estudiante->edad = $_POST["edad"];
					$this->estudiante->promedio = $_POST["promedio"];
					$this->estudiante->id_seccion = $_POST["id_seccion"];
					$this->estudiante->imagen = $nombre;
					$this->estudiante->guardar();

					header("Location: " . URL . "estudiantes");

				}

			}else{
				$datos = $this->seccion->listar();
				return $datos;
			}

		}

		public function editar($id){

			if ($_POST) {

				$this->estudiante->id = $_POST["id"];
				$this->estudiante->nombre = $_POST["nombre"];
				$this->estudiante->edad = $_POST["edad"];
				$this->estudiante->promedio = $_POST["promedio"];
				$this->estudiante->id_seccion = $_POST["id_seccion"];
				$this->estudiante->editar();

				header("Location: " . URL . "estudiantes");

			}else{
				$this->estudiante->id = $id;
				$datos = $this->estudiante->ver();
				return $datos;
			}

		}

		public function listarSecciones(){
			$datos = $this->seccion->listar();
			return $datos;
		}

		public function ver($id){
			$this->estudiante->id = $id;
			$datos = $this->estudiante->ver();
			return $datos;
		}

		public function eliminar($id){
			$this->estudiante->id = $id;
			$datos = $this->estudiante->eliminar();
			
			header("Location: " . URL . "estudiantes");
		}


	}


?>
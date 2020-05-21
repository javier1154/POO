<?php namespace Models;

  	class Estudiante{
  	
  		public $id;
  		public $nombre;
  		public $edad;
  		public $promedio;
  		public $imagen;
  		public $fecha;
  		public $id_seccion;
  		private $con;

  		public function __construct(){
  			$this->con = new Conexion();
  		}

  		public function sete($atributo, $contenido){
  			$this->atributo = $contenido;
  		}

  		public function get($atributo){
  			return $this->atributo;
  		}

  		public function listar(){
  			$sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id ORDER BY id";
  			$datos = $this->con->consultaRetorno($sql);
  			return $datos;
  		}

  		public function guardar(){
  			$sql = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, id_seccion, fecha) VALUES (null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}', NOW())";
  			$this->con->consultaSimple($sql);
  		}

  		public function eliminar(){
  			$sql = "DELETE FROM estudiantes where id = '{$this->id}'";
  			$this->con->consultaSimple($sql);
  		}

  		public function editar(){
  			$sql = "UPDATE estudiantes SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' where id = '{$this->id}'";
  			$this->con->consultaSimple($sql);
  		}

  		public function ver(){
  			$sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id where t1.id = '{$this->id}'";
  			$datos = $this->con->consultaRetorno($sql);
  			$dato = mysqli_fetch_assoc($datos);
  			return $dato;
  		}

  	}  

?>
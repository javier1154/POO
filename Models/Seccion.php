<?php namespace Models;

  	class Seccion{
  	
  		public $id;
  		public $nombre;
  		private $con;

  		public function __construct(){
  			$this->con = new Conexion();
  		}

  		public function set($atributo, $contenido){
  			$this->atributo = $contenido;
  		}

  		public function get($atributo){
  			return $this->atributo;
  		}

  		public function listar(){
  			$sql = "SELECT * FROM secciones";
  			$datos = $this->con->consultaRetorno($sql);
  			return $datos;
  		}

  		public function guardar(){
  			$sql = "INSERT INTO secciones(id, nombre) VALUES (null, '{$this->nombre}')";
  			$this->con->consultaSimple($sql);
  		}

  		public function eliminar(){
  			$sql = "DELETE FROM secciones where id = '{$this->id}'";
  			$this->con->consultaSimple($sql);
  		}

  		public function editar(){
  			$sql = "UPDATE secciones SET nombre = '{$this->nombre}' where id = '{$this->id}'";
  			$this->con->consultaSimple($sql);
  		}

  		public function ver(){
  			$sql = "SELECT * FROM secciones id = '{$this->id}'";
  			$datos = $this->con->consultaRetorno($sql);
  			$dato = mysqli_fetch_assoc($datos);
  			return $dato;
  		}

  	}  

?>
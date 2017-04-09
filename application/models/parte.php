<?php 
class Parte extends CI_Model{
	public $tipo;
	public $marca;
	public $modelo;
	public $color;

	public function insertParte(){
		$this->tipo = (int) $_POST['tipo'];
		$this->marca = $_POST['marca'];
		$this->modelo = $_POST['modelo'];
		$this->color = (int) $_POST['color'];

		$this->db->insert('partes', $this);

	}
}

?>
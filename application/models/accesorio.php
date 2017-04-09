<?php
/*Modelo para los accesorios*/
class Accesorio extends CI_Model{
	/*Porpiedades que se van a insertar a la tabla correspondiente a accesorios en la base de datos,
	donde el nombre de la variable debe coincidir con el nombre del campo de la tabla*/
	public $marca;
	public $modelo;

	public function insertAccesorio(){
		/*Aqui se realiza la limpieza de los datos que vienen de post
		conversiones, modificaciones, etc, antes de que se inserten a la base de datos*/
		$this->marca = $_POST['marca'];
		$this->modelo = $_POST['modelo'];

		/*Insercion en la base de datos*/
		$this->db->insert('accesorios', $this);
	}
}

?>
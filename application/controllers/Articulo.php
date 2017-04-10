<!--Controlador para los articulos-->

<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Articulo extends CI_Controller {

	public function crearBicicleta(){
		return $this->load->view('Articulo/crearBicicleta');

	}

	public function crearParte(){
		
		return $this->load->view('Articulo/crearParte');
		
	}

	public function crearAccesorio(){
		return $this->load->view('Articulo/crearAccesorio');

	}

	public function verBicicleta(){
		$id = $_POST['id'];
		$tipo = $_POST['tipo'];

		switch ($tipo) {
			case '1':
				return $this->load->view('Articulo/verBicicleta');
				break;	
			
		}
	}

	public function cargarBicicleta(){
		/*Este force mete los valores en un array y los pasa al view, en el view se utilizan los valores del array con el nombre de sus indices*/
		$id =(int) $_POST['id'];
		$query = $this->db->query('SELECT * FROM bicicletas WHERE idBicicleta = ' . $id);
		$row = $query->row_array();
		$idCondicion = $row['condicion'];

		$queryEstado = $this->db->query('SELECT condicion FROM LK_condiciones WHERE idCondicion = ' . $idCondicion);
		$rowCondicion = $queryEstado->row();
		$condicion = $rowCondicion->condicion;
		$row['condicion'] = $condicion;
		return $this->load->view('Articulo/verBicicleta', $row);

	}

}


<?php
class Anuncio extends CI_Model{
	public $titulo;
	public $precio;
	public $provincia;
	public $descripcion;
	public $cantidad_clicks;
	public $fecha_publicacion;
	public $idUsuario;
	public $idBicicleta;
	public $idParte;
	public $idAccesorio;
	

public function insertAnuncio($tipoAnuncio){
	$idBicicleta = NULL;
	$idParte = NULL;
	$idAccesorio = NULL;
	switch ($tipoAnuncio){
		case 1:
			$result = $this->db->query('SELECT MAX(idBicicleta) as cantidad FROM bicicletas');
			$row = $result->row();
			$idBicicleta = (int) $row->cantidad;
			break;
		case 2:
			$result =  $this->db->query('SELECT MAX(idParte) as cantidad FROM partes');
			$row = $result->row();
			$idParte = (int) $row->cantidad;
			break;
		case 3:
			$result = $this->db->query('SELECT MAX(idAccesorio) as cantidad FROM accesorios');
			$row = $result->row();
			$idAccesorio = (int) $row->cantidad;
			break;
	}

	$this->titulo = $_POST['titulo'];
	$this->precio = (int) $_POST['precio'];
	$this->provincia = (int) $_POST['provincia'];
	$this->descripcion = $_POST['descripcion'];
	$this->cantidad_clicks = 0;
	$fecha = getdate();
	$this->fecha_publicacion = date("Y-m-d h:i:sa");
	$this->idUsuario = 1;
	$this->idParte = $idParte;
	$this->idBicicleta = $idBicicleta;
	$this->idAccesorio = $idAccesorio;

	$this->db->insert('anuncios', $this);

}
}


?>
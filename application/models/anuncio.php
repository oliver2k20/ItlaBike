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
	public $idArticulo;

public function insertAnuncio($tipoAnuncio);
	if($tipoAnuncio='Bicicleta'){
		$idArticulo = (int) $this->db->query('SELECT MAX(idBicicleta) FROM bicicletas');

}

?>
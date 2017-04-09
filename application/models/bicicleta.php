<?php 
class Bicicleta extends CI_Model{

	public $marca;
	public $modelo;
	public $frenos;
	public $pinon;
	public $cambios;
	public $cadena;
	public $pedales;
	public $tijera;
	public $ruedas;
	public $cuadro;
	public $condicion;
	public $estilo;
	public $manubrio;
	public $tija;
	public $color;
	public $sillin;
	public $biela;
	public $plato;


	public function insertBicicleta(){
		$this->marca = $_POST['marca'];
		$this->modelo = $_POST['modelo'];
		$this->frenos = $_POST['frenos'];
		$this->pinon = $_POST['pinon'];
		$this->cambios = $_POST['cambios'];
		$this->cadena = $_POST['cadena'];
		$this->pedales = $_POST['pedales'];
		$this->tijera = $_POST['tijera'];
		$this->ruedas = $_POST['ruedas'];
		$this->cuadro = $_POST['cuadro'];
		$this->condicion = (int) $_POST['condicion'];
		$this->estilo = (int) $_POST['estilo'];
		$this->manubrio = $_POST['manubrio'];
		$this->tija = $_POST['tija'];
		$this->color = (int) $_POST['color'];
		$this->sillin = $_POST['sillin'];
		$this->biela = $_POST['biela'];
		$this->plato = $_POST['plato'];

		$this->db->insert('bicicletas', $this);


	}
}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
	function __construct() {
        $this->userTbl = 'usuarios';
    }

    //Conseguir filas de la tabla usuarios
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);

        //Conseguir información filtrada
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("idUsuario",$params)){
            $this->db->where('idUsuario',$params['idUsuario']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //Retorna el resultado
         return $result;
    }

    public function insert($data = array()){
    	//Inserta datos en la tabla
    	$insert = $this->db->insert($this->userTbl, $data);
        
        //retorna el estado de la insersión
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
}
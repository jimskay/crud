<?php 

class Usuariosx extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function list_Usuarios()
	{

    $this->db->select();    	
    $this->db->from('paciente');
    $this->db->order_by("id", "ASC");

    return $this->db->get()->result_array();
         
	}  
         
  function removeUsuarios($usuarios)
  {

    $this->db->where('id', $usuarios);
    $this->db->delete('paciente');

  }
        
  function editaUsuario($id)
  {
      
    $this->db->select();
    $this->db->from('paciente');
    $this->db->where('id',$id);

    $data = $this->db->get()->result_array();

    return $data [0];

  }
        
}

 
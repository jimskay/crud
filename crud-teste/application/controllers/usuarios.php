<?php

class Usuarios extends CI_Controller {

  public function __construct() 
  {
/*    
      ini_set('display_errors', 1);
      ini_set('log_errors', 1);
      error_reporting(E_ALL);
*/

      parent::__construct();
      
      $this->load->helper(array('url'));
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');

  }

 
  public function index()
  {   
    
    $this->load->model('usuariosx');
    
    $data['usuarios']   = $this->usuariosx->list_Usuarios();
    $this->load->view('usuarios_lista', $data);

  } 

  public function adicionar_usuarios()
  {

      $this->load->model('usuariosx');
     
      $data['usuarios']   = $this->usuariosx->list_Usuarios();
       
      $this->load->view('usuarios_registro');
             
  }
    
  public function gravar_usuarios()
  {
              
    if ($_POST) {

      $config =  array(
         
                      array(
                         'field' => 'Nome',
                         'label' => 'Nome',
                         'rules' => 'required|trim|xss_clean'     
                      ), 

                      array(
                         'field' => 'Nome_mae',
                         'label' => 'Nome_mae',
                         'rules' => 'required|trim|xss_clean'     
                      ),
                      array(
                         'field' => 'Nome_pai',
                         'label' => 'Nome_pai',
                         'rules' => 'required|trim|xss_clean'     
                      ),                       

                      array(
                         'field' => 'Email',
                         'label' => 'E-mail',
                         'rules' => 'trim|max_length[99]|xss_clean'
                      )                     
                    
                );
       
        $this->form_validation->set_rules($config); 
        $this->form_validation->set_error_delimiters('<p style="font-weight: bold;color: #5d1613;">', '</p>');           
     
        if ($this->form_validation->run() === false) {
         
            $id = $this->input->post('id');
            
           
        } else {

          $this->load->model('usuariosx');

          //$data = $this->usuariosx->editaUsuario($id);             
             
          $nome      = $this->input->post('Nome');
          $nome_mae  = $this->input->post('Nome_mae');
          $nome_pai  = $this->input->post('Nome_pai');
          $email     = $this->input->post('Email');          
          $status    = $this->input->post('status');
          $dt        = $this->input->post('Data');

          $d         = explode('/',$dt);
          $dt        = $d[2].'-'.$d[1].'-'.$d[0];

          $data      = array(
                         'nome'     => $nome,
                         'nome_mae' => $nome_mae,
                         'nome_pai' => $nome_pai,                            
                         'email'    => $email,                            
                         'status'   => $status,
                         'data'     => $dt
                      );        
            
          if ($this->input->post('id')!='') {
               
            $idPaciente	= base64_decode($this->input->post('id'));
            $this->db->where('id',$idPaciente);               
            $this->db->update('paciente',$data);
         
          } else {
              
            $this->db->insert('paciente', $data);
        
          }
        
          redirect('index.php/usuarios');
          exit; 
         
      }
      
    }

  }

         
  public function editaUsuarios($id) 
  {
      
      $this->load->model('usuariosx');
      
      $data = $this->usuariosx->editaUsuario($id);

      $this->load->view('usuarios_edita', $data);

  }        
        
  public function remover_usuarios($id) 
  {
    
    if ($_POST) {

        $usuarios = $_POST['id'];
        $this->load->model('usuariosx');
        $this->usuariosx->removeUsuarios($usuarios);        

    }

  }
      
}
?>
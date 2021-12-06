<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model User_model.php_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class User_model extends CI_Model {

  // ------------------------------------------------------------------------

   function getData()
  {
    
     return $this->db->query("select * from user")->result();
    
  }
  function create($formArray){

    $this->db->insert('user',$formArray);
  }
  function getUserById($userId){
       $this->db->where('idUser',$userId);
       return $user=$this->db->get('user')->row_array();
  }
  function updateUser($userId,$formArray){
    $this->db->where('idUser',$userId);
    $this->db->update('user',$formArray);

  }
 function deleteUser($userId){
    $this->db->where('idUser',$userId);
    $this->db->delete('user');

 }
  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------

  // ------------------------------------------------------------------------

}

/* End of file User_model.php_model.php */
/* Location: ./application/models/User_model.php_model.php */
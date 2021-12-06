<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller User
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class User extends CI_Controller
{
    
  public function __construct()
  {

    parent::__construct();
   $this->load->model("user_model");


  }

  public function index()
  {

    // $data['users']= ["stefan","mladen"]; //
     $data['users']=$this->user_model->getData();

    $this->load->view('users',$data);
  }

  public function create(){

   $this->form_validation->set_rules('name','Name','required'); 
   $this->form_validation->set_rules('email','Email','required|valid_email'); 

   if($this->form_validation->run()==false){
        $this->load->view('create');
   }
   else{

    $formArray=array();
    $formArray['name']=$this->input->post('name');
    $formArray['email']=$this->input->post('email'); 
    $this->user_model->create($formArray);
    $this->session->set_flashdata('success','Record added successfully');
    redirect(base_url().'user');
   } 
  }
  function edit(){
    if($this->input->post()){
      $this->form_validation->set_rules('name','Name','required'); 
      $this->form_validation->set_rules('email','Email','required|valid_email'); 
      $formArray=array();

      $userId=$this->uri->segment(3);
      
      $formArray['name']=$this->input->post('name');
      $formArray['email']=$this->input->post('email');
      $this->user_model->updateUser( $userId,$formArray);
      $this->session->set_flashdata('success','Record updated successfully');
      redirect(base_url().'user');
    }else{
      $userId=$this->uri->segment(3);
      $data['user']= $this->user_model->getUserById($userId);
      $this->load->view('edit',$data);
    }
  }
  function delete($userId){
      $user=$this->user_model->getUserById($userId);
      $this->user_model->deleteUser($userId);
      $this->session->set_flashdata('success','Record deleted successfully');
      redirect(base_url().'user');
  }
 

}


/* End of file User.php */
/* Location: ./application/controllers/User.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Admin extends MY_Controller
{
  
  public function __construct(){
    
    parent::__construct();

    $this->load->model('admin_model','admin');
  }
  

 public function index(){

  		$this->load->view('admin/admin_login.php');
  	}


  public function dashboard(){
    if(!$this->session->userdata('userid')){
        redirect('admin/index');
     }
      $session_id = $this->session->userdata('userid');
      //$data = $this->model->getAllRecords($session_id);
      //$this->load->view('admin/admin_dashboard',$data);
      $this->load->view('admin/admin_dashboard');
    }
  
  public function login(){
    if($this->session->userdata('userid')){
        redirect('admin/dashboard');
     }
    if($this->form_validation->run('login_form')){
     
      $userid=$this->input->post('userid');
      $password=md5($this->input->post('password'));
     
      if($this->admin->login($userid,$password)){
       $this->session->set_userdata('userid',$userid);
        redirect('admin/dashboard');

      }

      else{
        echo "Password Don't Match";
      }
    }

    else{

      $this->load->view('admin/admin_login.php');
}
    }


    public function signup(){
      if($this->session->userdata('userid')){
        redirect('admin/dashboard');
     }
     $this->load->view('admin/admin_signup');
    }
}
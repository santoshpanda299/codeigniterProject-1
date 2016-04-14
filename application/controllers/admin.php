<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Admin extends MY_Controller
{
  	public function index(){

  		if( $this->session->userdata('session_id') ){
  			//redirect('admin/account');
  			//echo "session Not Started";
  		}

  		$this->load->view('admin/admin_login.php');
  	}
  	public function login(){
    
    if($this->form_validation->run('login_form')){
      $data = $this->input->post();
      echo "<pre>";
      print_r($data);
    }
    else{
      $this->load->view('admin/admin_login.php');
}
    }
}
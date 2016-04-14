<?php
/**
* 
*/
class Admin_model extends MY_Model
{
	public function login($userid,$password){
		$query= $this->db->get_where('users',['userid'=>$userid,'password'=>$password]);
		if($query->num_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}
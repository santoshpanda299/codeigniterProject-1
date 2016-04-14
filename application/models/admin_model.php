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

	public function getAllRecords($userid){
		$qury = $this->db->get_where('users',['userid'=>$userid]);
		if($qury->num_rows()){
			$uid = $qury->row('id');
		$query= $this->db
		   			 ->select('*')
					 ->get_where('record',['userid'=>$uid]);
		echo "<pre>";
		print_r($query->row());
		exit;

			
		}
		else{
			return FALSE;
		}

	}
}
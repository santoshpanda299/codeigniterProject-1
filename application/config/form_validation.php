<?php 

$config = [

 		'login_form' => [
 								[
 									 'field' => 'userid',
                                     'label' => 'Username',
                                     'rules' => 'required'
 								],
 								[
 									 'field' => 'password',
                                     'label' => 'Password',
                                     'rules' => 'trim|required|min_length[6]'
 								],
 						]



];



 ?>
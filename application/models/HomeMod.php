<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeMod extends CI_Model{


	public function insert($data)
	{
		 //echo "<pre>";print_r($data);
		$insert = array(
			'applied_fname' => $data['fname'],
			'applied_lname' => $data['lname'],
			'applied_email' => $data['email'],
			'applied_phone' => $data['phone'],
			'applied_post' => $data['aplliedpost'],
			'applied_experience' => $data['exp'],
			'applied_cover' => $data['cvrltr'],
			'applied_resume' => $data['resume'],
			'created_date' => date('Y-m-d H:i:s'),
			'updated_date' => ''
		);
		$recinsert = $this->db->insert('eloi_career',$insert);
		//echo $this->db->last_query();exit;
		//echo "<pre>";print_r($insert);exit;
        return $recinsert;
	}
}
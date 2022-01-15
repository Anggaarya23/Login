<?php

class M_login  extends CI_Model {

	public function cek_login($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('tbl_login');
		return $result;
	}

}
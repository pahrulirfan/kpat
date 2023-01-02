<?php

class M_login extends CI_Model
{
	public function cek_login($username, $password)
	{
		// select * from users where username=$username and password=$password
		return $this->db->where('username', $username)
						->where('password', $password)
						->get('users');
	}
}

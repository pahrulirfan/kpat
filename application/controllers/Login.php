<?php

class Login extends CI_Controller
{
	public function index()
	{
		return $this->load->view('v_login');
	}
}

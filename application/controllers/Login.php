<?php

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}
	public function index()
	{
		return $this->load->view('v_login');
	}

	public function proses_login()
	{
		$username = $this->input->post('txtusername');
		$password = sha1($this->input->post('txtpassword'));

		$cek = $this->M_login->cek_login($username, $password)->num_rows();
		if ($cek == 1) {
			$data_user = $this->M_login->cek_login($username, $password)->row_object();
			$session_user = [
				'fullname' => $data_user->fullname,
				'level' => $data_user->level,
				'login' => true
			];

			$this->session->set_userdata($session_user);

			redirect('Blog/index');
		} else {
			echo 'username atau password salah.!';
		}
	}
}

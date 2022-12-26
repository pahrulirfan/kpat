<?php

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_blog');
	}

	public function index()
	{
		$data['isi'] = $this->M_blog->getAll();
		return $this->load->view('blog/v_index', $data);
	}

	public function tambah()
	{
		return $this->load->view('blog/v_tambah');
	}

	public function proses_tambah()
	{
		
	}
}

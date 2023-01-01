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
		$judul = $this->input->post('txtjudul');
		$isi = $this->input->post('txtisi');
		$penulis = $this->input->post('txtpenulis');

		$data_input = [
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis
		];

		$this->M_blog->add($data_input);

		return redirect('Blog/index');
	}

	public function hapus($id)
	{
		$this->M_blog->delete($id);
		return redirect('Blog/index');
	}

	public function edit($id)
	{
		$data['isi'] = $this->M_blog->getOne($id);
		return $this->load->view('blog/v_edit', $data);
	}

	public function proses_edit()
	{
		$id = $this->input->post('txtid');
		$judul = $this->input->post('txtjudul');
		$isi = $this->input->post('txtisi');
		$penulis = $this->input->post('txtpenulis');

		$data_edit = [
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis
		];

		$this->M_blog->editData($id, $data_edit);

		return redirect('Blog/index');
	}
}

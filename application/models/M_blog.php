<?php

class M_blog extends CI_Model
{
	private $table = 'blog';

	public function getAll()
	{
		// select * from blog
		return $this->db->get($this->table)->result();
	}

	public function add($data_input)
	{
		// insert into blog () value ()
		$this->db->insert($this->table, $data_input);
	}

	public function delete($id)
	{
		$this->db->delete($this->table, ['id' => $id]);
	}

	public function getOne($id)
	{
		return $this->db->where(['id' => $id])->get($this->table)->row_object();
	}

	public function editData($id, $data_edit)
	{
		$this->db->where(['id' => $id])->update($this->table, $data_edit);
	}
}

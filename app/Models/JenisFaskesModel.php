<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisFaskesModel extends Model
{
	protected $primaryKey = 'id_jenis_faskes';
	protected $table = 'tb_jenis_faskes';
	protected $allowedFields = [
		'id_jenis_faskes',
		'jenis'
	];

	public function getJenisFaskes($id_jenis_faskes = false)
	{
		if ($id_jenis_faskes == false) {
			return $this->orderBy('id_jenis_faskes', 'desc')->findAll();
		}
		return $this->where(['id_jenis_faskes' => $id_jenis_faskes])->first();
	}

	public function updateJenisFaskes($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_jenis_faskes' => $id));
		return $query;
	}

	public function deleteJenisFaskes($id)
	{
		return $this->db->table($this->table)->delete(['id_jenis_faskes' => $id]);
	}
}

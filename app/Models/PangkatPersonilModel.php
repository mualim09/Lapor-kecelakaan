<?php

namespace App\Models;

use CodeIgniter\Model;

class PangkatPersonilModel extends Model
{
	protected $primaryKey = 'id_pangkat_personil';
	protected $table = 'tb_pangkat_personil';
	protected $allowedFields = [
		'id_pangkat_personil',
		'pangkat'
	];

	public function getPangkatPersonil($id_pangkat_personil = false)
	{
		if ($id_pangkat_personil == false) {
			return $this->orderBy('id_pangkat_personil', 'desc')->findAll();
		}
		return $this->where(['id_pangkat_personil' => $id_pangkat_personil])->first();
	}

	public function updatePangkatPersonil($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_pangkat_personil' => $id));
		return $query;
	}

	public function deletePangkatPersonil($id)
	{
		return $this->db->table($this->table)->delete(['id_pangkat_personil' => $id]);
	}
}

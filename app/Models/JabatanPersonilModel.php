<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanPersonilModel extends Model
{
	protected $primaryKey = 'id_jabatan_personil';
	protected $table = 'tb_jabatan_personil';
	protected $allowedFields = [
		'id_jabatan_personil',
		'jabatan'
	];

	public function getJabatanPersonil($id_jabatan_personil = false)
	{
		if ($id_jabatan_personil == false) {
			return $this->orderBy('id_jabatan_personil', 'desc')->findAll();
		}
		return $this->where(['id_jabatan_personil' => $id_jabatan_personil])->first();
	}

	public function updateJabatanPersonil($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_jabatan_personil' => $id));
		return $query;
	}

	public function deleteJabatanPersonil($id)
	{
		return $this->db->table($this->table)->delete(['id_jabatan_personil' => $id]);
	}
}

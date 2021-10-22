<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisTindakanPersonilModel extends Model
{
	protected $primaryKey = 'id_jenis_tindakan_personil';
	protected $table = 'tb_jenis_tindakan_personil';
	protected $allowedFields = [
		'id_jenis_tindakan_personil',
		'jenis_tindakan_personil'
	];

	public function getJenisTindakanPersonil($id_jenis_tindakan_personil = false)
	{
		if ($id_jenis_tindakan_personil == false) {
			return $this->orderBy('id_jenis_tindakan_personil', 'desc')->findAll();
		}
		return $this->where(['id_jenis_tindakan_personil' => $id_jenis_tindakan_personil])->first();
	}

	public function updateJenisTindakanPersonil($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_jenis_tindakan_personil' => $id));
		return $query;
	}

	public function deleteJenisTindakanPersonil($id)
	{
		return $this->db->table($this->table)->delete(['id_jenis_tindakan_personil' => $id]);
	}
}

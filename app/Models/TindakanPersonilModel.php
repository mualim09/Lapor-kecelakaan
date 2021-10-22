<?php

namespace App\Models;

use CodeIgniter\Model;

class TindakanPersonilModel extends Model
{
	protected $primaryKey = 'id_tindakan_personil';
	protected $table = 'tb_tindakan_personil';
	protected $allowedFields = [
		'id_tindakan_personil',
		'id_laporan',
		'id_personil',
		'id_jenis_tindakan',
		'waktu',
		'status'
	];

	public function getTindakanPersonil($id_tindakan_personil = false)
	{
		if ($id_tindakan_personil == false) {
			return $this->orderBy('id_tindakan_personil', 'desc')->findAll();
		}
		return $this->where(['id_tindakan_personil' => $id_tindakan_personil])->first();
	}

	public function updateTindakanPersonil($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_tindakan_personil' => $id));
		return $query;
	}

	public function deleteTindakanPersonil($id)
	{
		return $this->db->table($this->table)->delete(['id_tindakan_personil' => $id]);
	}
}

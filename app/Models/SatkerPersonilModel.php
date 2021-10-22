<?php

namespace App\Models;

use CodeIgniter\Model;

class SatkerPersonilModel extends Model
{
	protected $primaryKey = 'id_satker_personil';
	protected $table = 'tb_satker_personil';
	protected $allowedFields = [
		'id_satker_personil',
		'nama_satker',
		'alamat',
		'status',
		'create_datetime',
		'update_datetime'
	];

	public function getSatkerPersonil($id_satker_personil = false)
	{
		if ($id_satker_personil == false) {
			return $this->orderBy('id_satker_personil', 'desc')->findAll();
		}
		return $this->where(['id_satker_personil' => $id_satker_personil])->first();
	}

	public function updateSatkerPersonil($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_satker_personil' => $id));
		return $query;
	}

	public function deleteSatkerPersonil($id)
	{
		return $this->db->table($this->table)->delete(['id_satker_personil' => $id]);
	}
}

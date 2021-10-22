<?php

namespace App\Models;

use CodeIgniter\Model;

class FaskesModel extends Model
{
	protected $primaryKey = 'id_faskes';
	protected $table = 'tb_faskes';
	protected $allowedFields = [
		'id_faskes',
		'id_jenis_faskes',
		'nama_faskes',
		'alamat',
		'latitude',
		'longitude',
		'jam_buka',
		'jam_tutup',
		'status',
		'update_datetime',
		'create_datetime'
	];

	public function getFaskes($id_faskes = false)
	{
		if ($id_faskes == false) {
			return $this->orderBy('id_faskes', 'desc')->findAll();
		}
		return $this->where(['id_faskes' => $id_faskes])->first();
	}

	public function getFaskesByIdJenisFaskes($id_faskes)
	{
		return $this->where([
			'id_faskes' => $id_faskes
		])->orderBy('id_faskes', 'desc')->findAll();
	}

	public function updateFaskes($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_faskes' => $id));
		return $query;
	}

	public function deleteFaskes($id)
	{
		return $this->db->table($this->table)->delete(['id_faskes' => $id]);
	}
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class FaskesModel extends Model
{
	protected $primaryKey = 'id_jenis_faskes';
	protected $table = 'tb_jenis_faskes';
	protected $allowedFields = [
		'id_jenis_faskes',
		'nama_faskes',
		'id_jenis_faskes',
		'alamat',
		'latitude',
		'longitude',
		'jam_buka',
		'jam_tutup',
		'status',
		'update_datetime',
		'create_datetime'
	];

	public function getFaskes($id_jenis_faskes = false)
	{
		if ($id_jenis_faskes == false) {
			return $this->orderBy('id_jenis_faskes', 'desc')->findAll();
		}
		return $this->where(['id_jenis_faskes' => $id_jenis_faskes])->first();
	}

	public function getFaskesByIdJenisFaskes($id_jenis_faskes)
	{
		return $this->where([
			'id_jenis_faskes' => $id_jenis_faskes
		])->orderBy('id_jenis_faskes', 'desc')->findAll();
	}

	public function updateFaskes($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_jenis_faskes' => $id));
		return $query;
	}

	public function deleteFaskes($id)
	{
		return $this->db->table($this->table)->delete(['id_jenis_faskes' => $id]);
	}
}

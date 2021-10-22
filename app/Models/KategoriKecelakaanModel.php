<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriKecelakaanModel extends Model
{
	protected $primaryKey = 'id_kategori_kecelakaan';
	protected $table = 'tb_kategori_kecelakaan';
	protected $allowedFields = [
		'id_kategori_kecelakaan',
		'kategori_kecelakaan',
		'deskripsi',
		'create_datetime',
		'update_datetime'
	];

	public function getKategoriKecelakaan($id_kategori_kecelakaan = false)
	{
		if ($id_kategori_kecelakaan == false) {
			return $this->orderBy('id_kategori_kecelakaan', 'desc')->findAll();
		}
		return $this->where(['id_kategori_kecelakaan' => $id_kategori_kecelakaan])->first();
	}

	public function updateKategoriKecelakaan($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_kategori_kecelakaan' => $id));
		return $query;
	}

	public function deleteKategoriKecelakaan($id)
	{
		return $this->db->table($this->table)->delete(['id_kategori_kecelakaan' => $id]);
	}
}

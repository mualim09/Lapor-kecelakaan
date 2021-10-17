<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriLaporanModel extends Model
{
	protected $primaryKey = 'id_kategori_laporan';
	protected $table = 'tb_kategori_laporan';
	protected $allowedFields = [
		'id_kategori_laporan',
		'kategori',
		'deskripsi',
		'create_datetime',
		'update_datetime'
	];

	public function getKategoriLaporan($id_kategori_laporan = false)
	{
		if ($id_kategori_laporan == false) {
			return $this->orderBy('id_kategori_laporan', 'desc')->findAll();
		}
		return $this->where(['id_kategori_laporan' => $id_kategori_laporan])->first();
	}

	public function updateKategoriLaporan($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_kategori_laporan' => $id));
		return $query;
	}

	public function deleteKategoriLaporan($id)
	{
		return $this->db->table($this->table)->delete(['id_kategori_laporan' => $id]);
	}
}

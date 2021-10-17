<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
	protected $primaryKey = 'id_laporan';
	protected $table = 'tb_laporan';
	protected $allowedFields = [
		'id_laporan',
		'waktu',
		'id_pelapor',
		'id_kategori_laporan',
		'id_jenis_kecelakaan',
		'latitude',
		'longitude',
		'deskripsi',
		'status',
		'verifikasi'
	];

	public function getLaporan($id_laporan = false)
	{
		if ($id_laporan == false) {
			return $this->orderBy('id_laporan', 'desc')->findAll();
		}
		return $this->where(['id_laporan' => $id_laporan])->first();
	}

	public function getLaporanByIdPelapor($id_pelapor)
	{
		return $this->where([
			'id_pelapor' => $id_pelapor
		])->orderBy('id_laporan', 'desc')->findAll();
	}

	public function getLaporanByIdKategoriLaporan($id_kategori_laporan)
	{
		return $this->where([
			'id_kategori_laporan' => $id_kategori_laporan
		])->orderBy('id_laporan', 'desc')->findAll();
	}

	public function getLaporanByIdJenisKecelakaan($id_jenis_kecelakaan)
	{
		return $this->where([
			'id_jenis_kecelakaan' => $id_jenis_kecelakaan
		])->orderBy('id_laporan', 'desc')->findAll();
	}

	public function updateLaporan($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_laporan' => $id));
		return $query;
	}

	public function deleteLaporan($id)
	{
		return $this->db->table($this->table)->delete(['id_laporan' => $id]);
	}
}

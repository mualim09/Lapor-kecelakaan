<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoLaporanModel extends Model
{
	protected $primaryKey = 'id_foto_laporan';
	protected $table = 'tb_foto_laporan';
	protected $allowedFields = [
		'id_foto_laporan',
		'id_laporan',
		'foto',
		'deskripsi',
		'create_datetime'
	];

	public function getFotoLaporan($id_foto_laporan = false)
	{
		if ($id_foto_laporan == false) {
			return $this->orderBy('id_foto_laporan', 'desc')->findAll();
		}
		return $this->where(['id_foto_laporan' => $id_foto_laporan])->first();
	}

	public function getFotoLaporanByIdLaporan($id_laporan)
	{
		return $this->where([
			'id_laporan' => $id_laporan
		])->orderBy('id_foto_laporan', 'desc')->findAll();
	}

	public function updateFotoLaporan($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_foto_laporan' => $id));
		return $query;
	}

	public function deleteFotoLaporan($id)
	{
		return $this->db->table($this->table)->delete(['id_foto_laporan' => $id]);
	}
}

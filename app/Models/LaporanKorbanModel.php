<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanKorbanModel extends Model
{
	protected $primaryKey = 'id_laporan_korban';
	protected $table = 'tb_laporan_korban';
	protected $allowedFields = [
		'id_laporan_korban',
		'id_laporan',
		'id_kategori_korban',
		'jumlah_korban',
		'deskripsi',
		'input_by',
		'id_user_input',
		'create_datetime',
		'update_datetime'
	];

	public function getLaporanKorban($id_laporan_korban = false)
	{
		if ($id_laporan_korban == false) {
			return $this->orderBy('id_laporan_korban', 'desc')->findAll();
		}
		return $this->where(['id_laporan_korban' => $id_laporan_korban])->first();
	}

	public function updateLaporanKorban($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_laporan_korban' => $id));
		return $query;
	}

	public function deleteLaporanKorban($id)
	{
		return $this->db->table($this->table)->delete(['id_laporan_korban' => $id]);
	}
}

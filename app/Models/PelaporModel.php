<?php

namespace App\Models;

use CodeIgniter\Model;

class PelaporModel extends Model
{
	protected $primaryKey = 'id_pelapor';
	protected $table = 'tb_pelapor';
	protected $allowedFields = [
		'id_pelapor',
		'nama_lengkap',
		'nik',
		'jenis_kelamin',
		'tempat_lahir',
		'tanggal_lahir',
		'alamat',
		'no_hp',
		'email',
		'google_id',
		'foto',
		'latitude',
		'longitude',
		'status',
		'last_login',
		'create_datetime',
		'update_datetime'
	];

	public function getPelapor($id_pelapor = false)
	{
		if ($id_pelapor == false) {
			return $this->orderBy('id_pelapor', 'desc')->findAll();
		}
		return $this->where(['id_pelapor' => $id_pelapor])->first();
	}

	public function updatePelapor($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_pelapor' => $id));
		return $query;
	}

	public function deletePelapor($id)
	{
		return $this->db->table($this->table)->delete(['id_pelapor' => $id]);
	}
}

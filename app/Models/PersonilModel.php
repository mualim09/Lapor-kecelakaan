<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonilModel extends Model
{
	protected $primaryKey = 'id_personil';
	protected $table = 'tb_personil';
	protected $allowedFields = [
		'id_personil',
		'nama_lengkap',
		'nrp',
		'password',
		'id_pangkat',
		'id_jabatan',
		'id_satker',
		'no_hp',
		'email',
		'foto',
		'latitude',
		'longitude',
		'status_akun',
		'aktif',
		'last_login',
		'create_datetime',
		'update_datetime'
	];

	public function getPersonil($id_personil = false)
	{
		if ($id_personil == false) {
			return $this->orderBy('id_personil', 'desc')->findAll();
		}
		return $this->where(['id_personil' => $id_personil])->first();
	}

	public function getPersonilByIdSatker($id_satker)
	{
		return $this->where([
			'id_satker' => $id_satker
		])->orderBy('id_personil', 'desc')->findAll();
	}

	public function updatePersonil($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id_personil' => $id));
		return $query;
	}

	public function deletePersonil($id)
	{
		return $this->db->table($this->table)->delete(['id_personil' => $id]);
	}
}

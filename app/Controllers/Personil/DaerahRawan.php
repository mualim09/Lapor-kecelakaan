<?php

namespace App\Controllers\Personil;

use App\Controllers\BaseController;
use \App\Models\PersonilModel;
use \App\Models\PangkatPersonilModel;
use \App\Models\SatkerPersonilModel;
use \App\Models\LaporanModel;
use \App\Models\FotoLaporanModel;
use \App\Models\KategoriLaporanModel;
use \App\Models\KategoriKorbanModel;
use \App\Models\KategoriKecelakaanModel;

class DaerahRawan extends BaseController
{
	public function __construct()
	{
		$this->PersonilModel = new PersonilModel();
		$this->PangkatPersonilModel = new PangkatPersonilModel();
		$this->SatkerPersonilModel = new SatkerPersonilModel();
		$this->LaporanModel = new LaporanModel();
		$this->FotoLaporanModel = new FotoLaporanModel();
		$this->KategoriLaporanModel = new KategoriLaporanModel();
		$this->KategoriKorbanModel = new KategoriKorbanModel();
		$this->KategoriKecelakaanModel = new KategoriKecelakaanModel();
		$this->request = \Config\Services::request();
		$this->db = \Config\Database::connect();
		$this->validation = \Config\Services::validation();

		$this->session = session();
		$this->id_user = $this->session->get('id_user');
		$data_user = $this->PersonilModel->getPersonil($this->id_user);

		$id_satker = $data_user['id_satker'];
		if ($id_satker != "") {
			$data_satker = $this->SatkerPersonilModel->getSatkerPersonil($id_satker);
			$satker = $data_satker['nama_satker'];
		} else {
			$satker = "";
		}

		$id_pangkat = $data_user['id_pangkat'];
		if ($id_pangkat != "") {
			$data_pangkat = $this->PangkatPersonilModel->getPangkatPersonil($id_pangkat);
			$pangkat = $data_pangkat['nama_pangkat'];
		} else {
			$pangkat = "";
		}

		$this->user_nama_lengkap = $data_user['nama_lengkap'];
		$this->user_nrp = $data_user['nrp'];
		$this->user_username = $data_user['nrp'];
		$this->user_satker = $satker;
		$this->user_pangkat = $pangkat;
		$this->user_jabatan = $data_user['jabatan'];
		$this->user_no_hp = $data_user['no_hp'];
		$this->user_email = $data_user['email'];
		$this->user_level = "personil";
		$this->user_foto =	$data_user['foto'];
		$this->user_status_akun = $data_user['status_akun'];
		$this->user_status_aktif = $data_user['aktif'];
	}

	public function index()
	{
		$data = [
			'request' => $this->request,
			'db' => $this->db,
			'validation' => $this->validation,
			'title' => 'Daerah Rawan',
			'user_id' => $this->id_user,
			'user_nama_lengkap' => $this->user_nama_lengkap,
			'user_nrp' => $this->user_nrp,
			'user_username' => $this->user_username,
			'user_satker' => $this->user_satker,
			'user_pangkat' => $this->user_pangkat,
			'user_jabatan' => $this->user_jabatan,
			'user_no_hp' => $this->user_no_hp,
			'user_email' => $this->user_email,
			'user_level' => $this->user_level,
			'user_foto' => $this->user_foto,
			'user_status_akun' => $this->user_status_akun,
			'user_status_aktif' => $this->user_status_aktif
		];
		return view('personil/daerah-rawan/views', $data);
	}
}

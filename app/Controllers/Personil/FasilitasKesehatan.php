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

class FasilitasKesehatan extends BaseController
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

	public function calculateDistance($lat1, $lon1, $lat2, $lon2)
	{
		$unit = "K";
		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		$unit = strtoupper($unit);

		if ($unit == "K") {
			$response = ($miles * 1.609344);
		} else if ($unit == "N") {
			$response = ($miles * 0.8684);
		} else {
			$response = $miles;
		}
		return round($response * 1000);

		// return round($response * 1000);
		// $fetch = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?origins=$latitudeFrom,$longitudeFrom&destinations=$latitudeTo,$longitudeTo&key=AIzaSyCG7FscIk67I9yY_fiyLc7-_1Aoyerf96E");
		// $json = json_decode($fetch);
		// return $json->rows[0]->elements[0]->distance->value;
	}

	public function distance_matrix_google($value_search, $lat1, $lng1, $lat2, $lng2)
	{
		$fetch = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?departure_time=now&destinations=$lat2%2C$lng2&origins=$lat1%2C$lng1&key=AIzaSyCG7FscIk67I9yY_fiyLc7-_1Aoyerf96E");
		$json = json_decode($fetch);
		$destination_addresses = $json->destination_addresses;
		$origin_addresses = $json->origin_addresses;
		$distance = $json->rows[0]->elements[0]->distance->text;
		$duration = $json->rows[0]->elements[0]->duration->text;
		$duration_in_traffic = $json->rows[0]->elements[0]->duration_in_traffic->text;

		if ($value_search == "distance") {
			return $distance;
		} else if ($value_search == "destination_addresses") {
			return  $destination_addresses;
		} else if ($value_search == "origin_addresses") {
			return  $origin_addresses;
		} else if ($value_search == "duration") {
			return  $duration;
		} else if ($value_search == "duration_in_traffic") {
			return  $duration_in_traffic;
		}
	}

	public function index()
	{
		$data = [
			'request' => $this->request,
			'db' => $this->db,
			'title' => 'Fasilitas Kesehatan',
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
			'user_status_aktif' => $this->user_status_aktif,
			'laporan' => $this->LaporanModel->getLaporanByIdPelapor($this->id_user)
		];
		return view('personil/fasilitas-kesehatan/views', $data);
	}

	public function getNearbyLocationFaskes()
	{
		$index = 0;
		$data = [];

		$poi = $this->request->getPost('poi');
		$koordinat = $this->request->getPost('koordinat');
		$radius = $this->request->getPost('radius');

		// $koordinat = "-0.066136799752712,109.34854125977";
		// $fetch = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-0.066136799752712,109.34854125977&radius=20000&type=hospital&sensor=true&key=AIzaSyBJkHXEVXBSLY7ExRcxoDxXzRYLJHg7qfI");

		$fetch = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$koordinat&radius=$radius&type=$poi&sensor=true&key=AIzaSyBJkHXEVXBSLY7ExRcxoDxXzRYLJHg7qfI");
		$json = json_decode($fetch);
		$limit = (count($json->results) <= 100) ? count($json->results) : 100;
		for ($i = 0; $i < $limit; $i++) {


			$data[$index]['name'] = $json->results[$i]->name;
			$data[$index]['lat'] = $json->results[$i]->geometry->location->lat;
			$data[$index]['lng'] = $json->results[$i]->geometry->location->lng;

			$data[$index]['rating'] = (isset($json->results[$i]->rating)) ? $json->results[$i]->rating : 0;
			$data[$index]['rating_total'] = (isset($json->results[$i]->user_ratings_total)) ? $json->results[$i]->user_ratings_total : 0;
			$data[$index]['address'] = $json->results[$i]->vicinity;
			$data[$index]['photo'] = (isset($json->results[$i]->photos)) ? "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=" . $json->results[$i]->photos[0]->photo_reference . "&key=AIzaSyCG7FscIk67I9yY_fiyLc7-_1Aoyerf96E" : base_url() . "/img/bgnoimg.jpg";
			$data[$index]['icon'] = $json->results[$i]->icon;

			$coordinate = explode(",", $koordinat);
			$distance = $this->distance_matrix_google('distance', $coordinate[0], $coordinate[1], $data[$index]['lat'], $data[$index]['lng']);
			$data[$index]['distance'] = $distance;

			$duration = $this->distance_matrix_google('duration', $coordinate[0], $coordinate[1], $data[$index]['lat'], $data[$index]['lng']);
			$data[$index]['duration'] = $duration;

			$duration_in_traffic = $this->distance_matrix_google('duration_in_traffic', $coordinate[0], $coordinate[1], $data[$index]['lat'], $data[$index]['lng']);
			$data[$index]['duration_in_traffic'] = $duration_in_traffic;

			$index++;
		}
		echo json_encode($data);
	}
}

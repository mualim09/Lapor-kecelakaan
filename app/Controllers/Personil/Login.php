<?php

namespace App\Controllers\Personil;

use CodeIgniter\Controller;
use App\Models\PersonilModel;

class Login extends Controller
{
	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->validation = \Config\Services::validation();
		$this->request = \Config\Services::request();
		$this->PersonilModel = new PersonilModel();
	}

	public function encrypt_openssl($string)
	{
		$ciphering = "AES-256-CTR";
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;
		$encryption_iv = '1234567891011121';
		$encryption_key = "#*PelaporanKecelakaan2021SkripsiRonal#@";

		$encryption = openssl_encrypt(
			$string,
			$ciphering,
			$encryption_key,
			$options,
			$encryption_iv
		);

		return $encryption;
	}

	public function decrypt_openssl($string_encrypt)
	{
		$ciphering = "AES-256-CTR";
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;

		$decryption_iv = '1234567891011121';
		$decryption_key = "#*PelaporanKecelakaan2021SkripsiRonal#@";

		$decryption = openssl_decrypt(
			$string_encrypt,
			$ciphering,
			$decryption_key,
			$options,
			$decryption_iv
		);

		return $decryption;
	}

	function crypto_rand_secure($min, $max)
	{
		$range = $max - $min;
		if ($range < 1) return $min; // not so random...
		$log = ceil(log($range, 2));
		$bytes = (int) ($log / 8) + 1; // length in bytes
		$bits = (int) $log + 1; // length in bits
		$filter = (int) (1 << $bits) - 1; // set all lower bits to 1
		do {
			$rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
			$rnd = $rnd & $filter; // discard irrelevant bits
		} while ($rnd > $range);
		return $min + $rnd;
	}

	function getToken($length)
	{
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
		$codeAlphabet .= "0123456789";
		$codeAlphabet .= "_-";
		$max = strlen($codeAlphabet); // edited

		for ($i = 0; $i < $length; $i++) {
			$token .= $codeAlphabet[$this->crypto_rand_secure(0, $max - 1)];
		}

		return $token;
	}

	public function index()
	{
		helper(['form']);
		$data = [
			'title' => 'LOGIN PERSONIL',
			'db' => $this->db,
			'validation' => $this->validation
		];
		return view('personil/sign-in', $data);
	}

	public function sign_up()
	{
		helper(['form']);
		$data = [
			'title' => 'DAFTAR SEBAGAI PERSONIL',
			'db' => $this->db,
			'validation' => $this->validation
		];
		return view('personil/sign-up', $data);
	}

	public function sign_up_account()
	{
		$namaLengkap = $this->request->getPost('namaLengkap');
		$nrp = $this->request->getPost('nrp');
		$noHp = $this->request->getPost('noHp');
		$email = $this->request->getPost('email');
		$passwordBaru = $this->request->getPost('passwordBaru');
		$konfirmasiPassword = $this->request->getPost('konfirmasiPassword');

		$cek_nrp = $this->PersonilModel->where('nrp', $nrp)->first();
		if ($cek_nrp) {
			echo json_encode(array(
				'success' => '0',
				'pesan' => 'Akun dengan NRP ' . $nrp . ' telah terdaftar !'
			));
			return false;
		}

		$cek_email = $this->PersonilModel->where('email', $email)->first();
		if ($cek_email) {
			echo json_encode(array(
				'success' => '0',
				'pesan' => 'Email ' . $email . ' telah digunakan !'
			));
			return false;
		}

		$cek_noHp = $this->PersonilModel->where('no_hp', $noHp)->first();
		if ($cek_noHp) {
			echo json_encode(array(
				'success' => '0',
				'pesan' => 'Nomor handphone ' . $noHp . ' telah digunakan !'
			));
			return false;
		}

		if ($passwordBaru != $konfirmasiPassword) {
			echo json_encode(array(
				'success' => '0',
				'pesan' => 'Password tidak sesuai dengan konfirmasi !'
			));
			return false;
		}

		$password = password_hash($passwordBaru, PASSWORD_DEFAULT);
		$waktu_input = date("Y-m-d H:i:s");

		$simpan_data_personil = $this->PersonilModel->save([
			'nama_lengkap' => $namaLengkap,
			'nrp' => $nrp,
			'email' => $email,
			'no_hp' => $noHp,
			'password' => $password,
			'status_akun' => '0',
			'aktif' => '0',
			'create_datetime' => $waktu_input
		]);

		if ($simpan_data_personil) {
			echo json_encode(array(
				'success' => '1',
				'pesan' => 'Akun berhasil dibuat, silahkan login dengan akun anda !'
			));
		} else {
			echo json_encode(array(
				'success' => '0',
				'pesan' => 'Akun gagal dibuat, mohon periksa kembali data yang anda masukkan !'
			));
		}
	}

	public function auth()
	{
		$session = session();
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$data = ($this->db->query("SELECT * FROM tb_personil WHERE nrp='$username' OR email='$username' LIMIT 1"))->getRow();

		if ($data) {
			$pass = $data->password;
			$status = $data->status_akun;

			if ($status != "2") {
				$verify_pass = password_verify($password, $pass);
				if ($verify_pass) {
					$ses_data = [
						'id_user' => $data->id_personil,
						'logged_in_personil'  => TRUE
					];

					$waktu_login = date("Y-m-d H:i:s");
					$this->PersonilModel->updatePersonil([
						'last_login' => $waktu_login
					], $data->id_personil);

					$session->set($ses_data);
					echo json_encode(array(
						'success' => '1',
						'pesan' => 'Selamat Datang ' . $data->nama_lengkap
					));
				} else {
					echo json_encode(array(
						'success' => '0',
						'pesan' => 'Password Salah !'
					));
				}
			} elseif ($status == "0") {
				echo json_encode(array(
					'success' => '0',
					'pesan' => 'Akun anda telah dinonaktifkan !'
				));
			}
		} else {
			echo json_encode(array(
				'success' => '0',
				'pesan' => 'Username/NRP tidak ditemukan !'
			));
		}
	}

	public function lupa_password()
	{
		helper(['form']);
		$data = [
			'title' => 'LUPA PASSWORD AKUN PERSONIL',
			'db' => $this->db,
		];
		return view('personil/lupa-password', $data);
	}

	public function reset_password($token_reset_password)
	{
		helper(['form']);
		$data = [
			'title' => 'RESET PASSWORD AKUN',
			'db' => $this->db,
			'validation' => $this->validation,
			'token_reset_password' => $token_reset_password
		];
		return view('personil/reset-password', $data);
	}

	public function kirim_permintaan_reset_akun()
	{
		$session = session();
		$nim = $this->request->getVar('nim');
		$mahasiswa = $this->PersonilModel->getPersonilByNIM($nim);

		if ($mahasiswa) {
			$email = $mahasiswa['email'];
			$nama_lengkap = $mahasiswa['nama_lengkap'];
			$id_personil = $mahasiswa['id_personil'];

			$token = $this->getToken(177);

			$this->PersonilModel->updatePersonil([
				'token_reset_password' => $token
			], $id_personil);

			$this->kirim_email_reset_password($nama_lengkap, $nim, $email, $token);

			$session->setFlashdata('pesan_berhasil', 'Tautan untuk melakukan reset password telah dikirimkan melalui email ' . $email . ' !');
			return redirect()->to(base_url() . '/personil/lupa-password');
		} else {
			$session->setFlashdata('pesan_gagal', 'NIM yang anda masukkan tidak terkait dengan akun manapun, mohon periksa kembali !');
			return redirect()->to(base_url() . '/personil/lupa-password');
		}
	}

	public function kirim_email_reset_password($nama_penerima, $nim, $email_penerima, $token)
	{
		// $data_akun_email = $this->RefEmailModel->getRefEmail(1);
		// $akun_email = $data_akun_email['email'];
		// $password_email = $this->decrypt_openssl($data_akun_email['password']);
		// $nama_akun_email = $data_akun_email['nama_akun'];

		$email_smtp = \Config\Services::email();

		$config["protocol"] = "smtp";
		$config["mailType"] = 'html';
		$config["charset"] = 'utf-8';
		// $config["CRLF"] = 'rn';
		$config["priority"] = '5';
		$config["SMTPHost"] = "smtp.gmail.com"; //alamat email SMTP 
		$config["SMTPUser"] = "ronaldopeipiro11@gmail.com"; //password email SMTP 
		$config["SMTPPass"] = "#*AcakPassword11";

		// $config["SMTPPort"] = 465;
		$config["SMTPPort"] = 587;
		// $config["SMTPCrypto"] = "ssl";
		$config["SMTPCrypto"] = "tls";
		$config["SMTPAuth"] = true;
		$email_smtp->initialize($config);
		$email_smtp->setFrom("ronaldopeipiro11@gmail.com", "Pelaporan Kecelakaan Lalu Lintas Apps");

		$email_smtp->setTo($email_penerima);

		$email_smtp->setSubject("Verifikasi Akun Email");
		$pesan = '
					<h4>Hallo, saudara/i <b>' . $nama_penerima . '</b> (' . $nrp . ')</h4>
					anda berhasil melakukan pendaftaran akun anda.
					<br>
					Silahkan verifikasikan akun email anda agar akun anda dapat digunakan melalui tautan berikut.
					<br>
					<br>
					<a href="' . base_url() . '/personil/verifikasi-email/' . $token . '">
						' . base_url() . '/personil/verifikasi-email/' . $token . '
					</a>
					<br>
					<br>
					Jika bukan anda yang meminta untuk melakukan reset password, silahkan abaikan pesan ini
					<br>
					<br>
					Terima Kasih 
					<br>
					<br>
					<br>
					<br>
						TTD, 
					<br>
					<br>
					<b><u>STIKES SAMBAS</u></b> 
					<br>
					<br>
					<br>
					<br>
					<i><b>Pesan ini dikirimkan otomatis oleh sistem !</b></i>
					<br>
			';

		$email_smtp->setMessage($pesan);
		$email_smtp->send();
	}

	public function reset_password_akun()
	{
		$session = session();
		$token_reset_password = $this->request->getVar('token_reset_password');
		$password_baru = $this->request->getVar('password_baru');
		$konfirmasi_password = $this->request->getVar('konfirmasi_password');

		$waktu_update = date("Y-m-d H:i:s");

		if ($password_baru == $konfirmasi_password) {
			$password_baru_hash = password_hash($password_baru, PASSWORD_DEFAULT);

			$cek_data = $this->PersonilModel->getPersonilByTokenResetPassword($token_reset_password);
			if ($cek_data) {
				$id_personil = $cek_data->id_personil;
				$nama_lengkap = $cek_data->nama_lengkap;
				$nim = $cek_data->nim;
				$email = $cek_data->email;

				$this->PersonilModel->updatePersonil([
					'password' => $password_baru_hash,
					'token_reset_password' => '',
					'update_datetime' => $waktu_update
				], $id_personil);

				$this->kirim_email_konfirmasi_update_password($nama_lengkap, $nim, $email, $password_baru);

				$session->setFlashdata('pesan_berhasil', 'Password berhasil diubah, silahkan login kembali !');
				return redirect()->to(base_url() . '/personil/login');
			} else {
				$session->setFlashdata('pesan_gagal', 'Token yang anda miliki tidak valid !');
				return redirect()->to(base_url() . '/personil/reset-password/' . $token_reset_password);
			}
		} else {
			$session->setFlashdata('pesan_gagal', 'Password tidak sesuai dengan konfirmasi !');
			return redirect()->to(base_url() . '/personil/reset-password/' . $token_reset_password);
		}
	}

	public function kirim_email_konfirmasi_update_password($nama_penerima, $nim, $email_penerima, $password_baru)
	{
		$data_akun_email = $this->RefEmailModel->getRefEmail(1);
		$akun_email = $data_akun_email['email'];
		$password_email = $this->decrypt_openssl($data_akun_email['password']);
		$nama_akun_email = $data_akun_email['nama_akun'];

		$email_smtp = \Config\Services::email();

		$config["protocol"] = "smtp";
		$config["mailType"] = 'html';
		$config["charset"] = 'utf-8';
		// $config["CRLF"] = 'rn';
		$config["priority"] = '5';
		$config["SMTPHost"] = "smtp.gmail.com"; //alamat email SMTP 
		$config["SMTPUser"] = "$akun_email"; //password email SMTP 
		$config["SMTPPass"] = "$password_email";

		// $config["SMTPPort"] = 465;
		$config["SMTPPort"] = 587;
		// $config["SMTPCrypto"] = "ssl";
		$config["SMTPCrypto"] = "tls";
		$config["SMTPAuth"] = true;
		$email_smtp->initialize($config);
		$email_smtp->setFrom("$akun_email", "$nama_akun_email");

		$email_smtp->setTo($email_penerima);

		$email_smtp->setSubject("Berhasil Reset Password SIAKAD - STIKES SAMBAS");
		$pesan = '
					<h4>Hallo, saudara/i <b>' . $nama_penerima . '</b> (' . $nim . ')</h4>
					Password akun SIAKAD anda telah berhasil diubah.
					<br>
					<br>
					Berikut informasi akun anda :
					<table>
						<tr>
							<td>Nama Mahasiswa</td>
							<td>:</td>
							<td>' . $nama_penerima . '</td>
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td>' . $nim . '</td>
						</tr>
						<tr>
							<td>Password Baru</td>
							<td>:</td>
							<td>' . $password_baru . '</td>
						</tr>
					</table>
					<br>
					<br>
					Silahkan login aplikasi melalui tautan berikut ini
					<br>
					<br>
					<a href="' . base_url() . '/personil/login">
						LOGIN SIAKAD
					</a>
					<br>
					<br>
						Jika ini bukan anda, silahkan lakukan permintaan reset password akun anda melalui tautan berikut :
					<br>
					<a href="' . base_url() . '/personil/lupa-password">
						PERMINTAAN RESET PASSWORD
					</a>
					<br>
					atau anda dapat melaporkan kepada pihak Operator Program Studi untuk mengembalikan akun anda.
					<br>
					<br>
					Terima Kasih 
					<br>
					<br>
					<br>
					<br>
						TTD, 
					<br>
					<br>
					<b><u>STIKES SAMBAS</u></b> 
					<br>
					<br>
					<br>
					<br>
					<i><b>Pesan ini dikirimkan otomatis oleh sistem !</b></i>
					<br>
			';

		$email_smtp->setMessage($pesan);
		$email_smtp->send();
	}
}

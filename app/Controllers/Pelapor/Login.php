<?php

namespace App\Controllers\Pelapor;

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
		$session = session();
		require_once APPPATH . 'Libraries/vendor/autoload.php';
		$google_client = new \Google_Client();

		// hosting
		$google_client->setClientId('851560113698-75r8h3p21rn936lktcvokrnhc6q2udjp.apps.googleusercontent.com');
		$google_client->setClientSecret('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');

		// localhost
		// $google_client->setClientId('86778882261-v76e8mpv6191qvpu6uihpfqpjvuiq125.apps.googleusercontent.com');
		// $google_client->setClientSecret('jwWZJpOKJ4x2y5W6A0_42sCT');

		$google_client->setRedirectUri(base_url() . '/pelapor');
		$google_client->addScope('email');
		$google_client->addScope('profile');

		$google_client->setScopes(array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'));

		if ($this->request->getVar('code')) {

			$token = $google_client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));

			if (!isset($token['error'])) {

				$google_client->setAccessToken($token['access_token']);
				$session->set('access_token', $token['access_token']);
				$google_service = new \Google_Service_Oauth2($google_client);
				$gdata = $google_service->userinfo->get();

				$google_id_user = $gdata['id'];
				$email_user = $gdata['email'];
				$nama_user = $gdata['given_name'] . " " . $gdata['family_name'];

				$session_data = [
					'google_id' => $google_id_user,
					'token_google' => $token,
					'logged_in_pelapor'  => TRUE
				];

				$session->set($session_data);
				return redirect()->to(base_url() . '/pelapor');
			}
		}

		if (!$session->get('access_token')) {
			$tombol_login = $google_client->createAuthUrl();
		} else {
			$tombol_login = "";
		}

		$data = [
			'request' => $this->request,
			'title' => 'LOGIN PELAPOR',
			'validation' => \Config\Services::validation(),
			'tombol_login' => $tombol_login
		];

		return view('pelapor/sign-in', $data);
	}
}

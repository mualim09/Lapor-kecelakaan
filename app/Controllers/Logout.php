<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Logout extends Controller
{
	public function pelapor()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url() . '/pelapor/login');
	}

	public function personil()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url() . '/personil/login');
	}
}

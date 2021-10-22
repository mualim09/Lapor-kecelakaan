<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthPelapor implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		if (!session()->get('logged_in_pelapor')) {
			return redirect()->to(base_url() . '/pelapor/login');
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		// Do something here
	}
}

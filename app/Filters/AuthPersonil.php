<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthPersonil implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		if (!session()->get('logged_in_personil')) {
			return redirect()->to(base_url() . '/personil/login');
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		// Do something here
	}
}

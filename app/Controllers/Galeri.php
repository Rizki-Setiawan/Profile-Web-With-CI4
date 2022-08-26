<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class Galeri extends BaseController
{
	public function index()
	{
		$galeri = new GaleriModel();
		$data['galeri'] = $galeri->orderBy('created_at', 'DESC')->findAll();
		return view('content_frontend/galeri', $data);
	}	
}
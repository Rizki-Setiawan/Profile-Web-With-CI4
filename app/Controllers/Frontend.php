<?php

namespace App\Controllers;

class Frontend extends BaseController
{
	public function home()
	{
		return view('content_frontend/home');
	}
	public function profil()
	{
		return view('content_frontend/profil');
	}
	public function pelatihan()
	{
		return view('content_frontend/pelatihan');
	}
	public function galeri()
	{
		return view('content_frontend/galeri');
	}
	public function kontak()
	{
		return view('content_frontend/kontak');
	}
	public function pendaftaran()
	{
		return view('content_frontend/pendaftaran');
	}
}

<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Berita extends BaseController
{	
	public function index()
	{		
		$berita = new BeritaModel();
		$data['berita'] = $berita->where('status', 'published')->findAll(); 
		$data['berita'] = $berita->orderBy('created_at', 'DESC')->findAll(); 
		$data['berita1'] = $berita->where('status', 'published')->findAll(); 
		$data['berita1'] = $berita->orderBy('created_at','DESC')->findAll();
		echo view('content_frontend/berita', $data);
	}

	//------------------------------------------------------------

	public function viewBerita($slug)
	{
		$berita = new BeritaModel();
		$data['berita'] = $berita->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();
		if (!$data['berita']) {
			throw PageNotFoundException::forPageNotFound();
		}
		$data['berita1'] = $berita->where('status', 'published')->findAll(); 
		$data['berita1'] = $berita->orderBy('created_at','DESC')->findAll();
		echo view('content_frontend/berita_detail', $data);
	}
}
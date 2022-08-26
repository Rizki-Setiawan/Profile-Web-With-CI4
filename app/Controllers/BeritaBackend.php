<?php

namespace App\Controllers;
use App\Models\BeritaModel;

class BeritaBackend extends BaseController
{
	protected $berita;

	function __construct()
	{
		$this->berita = new BeritaModel();
	}

	public function index()
	{
		$berita = new BeritaModel();
		$data['berita'] = $berita->findAll();
		echo view('content_backend/berita/berita', $data);
	}

	public function create()
	{
		return view('content_backend/berita/berita_create');
	}

	function store()
	{
		if (!$this->validate([
			'title' => [
				'rules' => 'required|is_unique[berita.title]',
				'errors' => [
					'required' => 'Title Harus diisi',
					'is_unique' => 'Title sudah digunakan sebelumnya'
				]
			],
			'content' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Konten Harus diisi'
				]
			],
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
		$berita = new BeritaModel();
		$berita->insert([
			"title" => $this->request->getPost('title'),
			"author" => $this->request->getPost('author'),
			"content" => $this->request->getPost('content'),
			"status" => $this->request->getPost('status'),
			"slug" => url_title($this->request->getPost('title'), '-', TRUE)
		]);
		session()->setFlashdata('message', 'Tambah Data Berita Berhasil');
		return redirect()->to('backend/berita');
	}

	public function edit($id)
	{		
		$dataBerita = $this->berita->find($id);
		if (empty($dataBerita)) {
			session()->setFlashdata('message', 'Data Berita Tidak Di temukan !');
			return redirect()->to('backend/berita');
		}
		$data['berita'] = $dataBerita;
		return view('content_backend/berita/berita_edit', $data);
	}	

	public function update($id)
	{
		if (!$this->validate([
			'title' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Title Harus diisi'
				]
			],
			'content' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Konten Harus diisi'
				]
			],

		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$this->berita->update($id, [
			"title" => $this->request->getVar('title'),
			"author" => $this->request->getVar('author'),
			"content" => $this->request->getVar('content'),
			"status" => $this->request->getVar('status'),
			"slug" => url_title($this->request->getVar('title'), '-', TRUE)
		]);
		session()->setFlashdata('message', 'Update Data Berita Berhasil');
		return redirect()->to('backend/berita');
	}

	function delete($id)
	{
		$dataBerita = $this->berita->find($id);
		if (empty($dataBerita)) {
			session()->setFlashdata('message', 'Data Berita Tidak Di temukan !');
			return redirect()->to('backend/berita');
		}
		$this->berita->delete($id);
		session()->setFlashdata('message', 'Hapus Data Berita Berhasil');
		return redirect()->to('backend/berita');
	}
}

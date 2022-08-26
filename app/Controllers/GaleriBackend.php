<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class GaleriBackend extends BaseController
{
	public function index()
	{
		$galeri = new GaleriModel();
		$data['galeri'] = $galeri->findAll();
		return view('content_backend/galeri/galeri', $data);
	}	

	public function create()
	{
		return view('content_backend/galeri/galeri_create');
	}

	public function store()
	{
		if (!$this->validate([
			'keterangan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'gambar' => [
				'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,10240]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 10 MB'
				]

			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		function generate_string($input, $strength = 16) {
			$input_length = strlen($input);
			$random_string = '';
			for($i = 0; $i < $strength; $i++) {
				$random_character = $input[mt_rand(0, $input_length - 1)];
				$random_string .= $random_character;
			}
			return $random_string;
		}

		$galeri = new GaleriModel();
		$dataGaleri = $this->request->getFile('gambar');
		$fileName = generate_string($permitted_chars, 15);
		$name = $this->request->getPost('keterangan');
		$ekstensi = '.jpg';
		$galeri->insert([
			'gambar' => $fileName.'-'.$name.$ekstensi,
			'keterangan' => $this->request->getPost('keterangan')
		]);
		$dataGaleri->move('uploads/galeri/', $fileName.'-'.$name.$ekstensi);
		session()->setFlashdata('success', 'Gambar Berhasil diupload');
		return redirect()->to(base_url('backend/galeri'));
	}

	function download($id)
	{
		$galeri = new GaleriModel();
		$data = $galeri->find($id);
		return $this->response->download('uploads/galeri/' . $data->gambar, null);
	}

	function delete($id)
	{
		$galeri = new GaleriModel();
		$dataGaleri = $galeri->find($id);
		if (empty($dataGaleri)) {
			session()->setFlashdata('message', 'Data Galeri Tidak Di temukan !');
			return redirect()->to('backend/galeri');
		}
		$galeri->delete($id);
		session()->setFlashdata('message', 'Hapus Data Galeri Berhasil');
		return redirect()->to('backend/galeri');
	}
}
<?php

namespace App\Controllers;
use App\Models\PendaftaranModel;

class Pendaftaran extends BaseController
{

	function __construct()
	{
		$this->pendaftaran = new PendaftaranModel();
	}

	public function create()
	{
		echo view('content_frontend/pendaftaran');
	}

	function store()
	{
		if (!$this->validate([
			'nama_lengkap' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama Lengkap Harus diisi'
				]
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tempat Lahir Harus diisi'
				]
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal Lahir Harus diisi'
				]
			],
			'no_hp' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'No. HP Harus diisi'
				]
			],
			'nama_ayah' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama Ayah Harus diisi'
				]
			],
			'nama_ibu' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama Ibu Harus diisi'
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Alamat Harus diisi'
				]
			],
			'program_pelatihan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Program Pelatihan Harus diisi'
				]
			],
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
		$pendaftaran = new PendaftaranModel();
		$pendaftaran->insert([
			"nama_lengkap" => $this->request->getPost('nama_lengkap'),
			"tempat_lahir" => $this->request->getPost('tempat_lahir'),
			"tanggal_lahir" => $this->request->getPost('tanggal_lahir'),
			"no_hp" => $this->request->getPost('no_hp'),
			"nama_ayah" => $this->request->getPost('nama_ayah'),
			"nama_ibu" => $this->request->getPost('nama_ibu'),
			"alamat" => $this->request->getPost('alamat'),
			"program_pelatihan" => $this->request->getPost('program_pelatihan'),
			"status" => $this->request->getPost('status')
		]);
		session()->setFlashdata('message', 'Pendaftaran Berhasil, Silahkan tunggu verifikasi dari pihak BLKK PONPES SHIROTUL FALAH.');
		return redirect()->to('blkk/pendaftaran');
	}

}

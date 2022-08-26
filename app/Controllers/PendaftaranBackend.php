<?php

namespace App\Controllers;
use App\Models\PendaftaranModel;

class PendaftaranBackend extends BaseController
{

	function __construct()
	{
		$this->pendaftaran = new PendaftaranModel();
	}

	public function index()
	{
		$pendaftaran = new PendaftaranModel();
		$data['pendaftaran'] = $pendaftaran->findAll();
		echo view('content_backend/pendaftaran/pendaftaran', $data);
	}

	public function detail($id)
	{
		$dataPendaftaran = $this->pendaftaran->find($id);
		if (empty($dataPendaftaran)) {
			session()->setFlashdata('message', 'Data Pendaftaran Tidak Di temukan !');
			return redirect()->to('backend/Pendaftaran');
		}
		$data['pendaftaran'] = $dataPendaftaran;
		return view('content_backend/pendaftaran/pendaftaran_detail', $data);
	}

	public function export()
	{
		$pendaftaran = new PendaftaranModel();
		$data['pendaftaran'] = $pendaftaran->findAll();
		echo view('content_backend/pendaftaran/pendaftaran_export', $data);
	}

	public function create()
	{
		echo view('content_backend/pendaftaran/pendaftaran_create');
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
		session()->setFlashdata('message', 'Tambah Data Peserta Berhasil');
		return redirect()->to('backend/pendaftaran');
	}

	public function edit($id)
	{		
		$dataPendaftaran = $this->pendaftaran->find($id);
		if (empty($dataPendaftaran)) {
			session()->setFlashdata('message', 'Data Pendaftaran Tidak Di temukan !');
			return redirect()->to('backend/Pendaftaran');
		}
		$data['pendaftaran'] = $dataPendaftaran;
		return view('content_backend/pendaftaran/pendaftaran_edit', $data);
	}

	public function update($id)
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
			return redirect()->back();
		}

		$this->pendaftaran->update($id, [
			"nama_lengkap" => $this->request->getVar('nama_lengkap'),
			"tempat_lahir" => $this->request->getVar('tempat_lahir'),
			"tanggal_lahir" => $this->request->getVar('tanggal_lahir'),
			"no_hp" => $this->request->getVar('no_hp'),
			"nama_ayah" => $this->request->getVar('nama_ayah'),
			"nama_ibu" => $this->request->getVar('nama_ibu'),
			"alamat" => $this->request->getVar('alamat'),
			"program_pelatihan" => $this->request->getVar('program_pelatihan'),
			"status" => $this->request->getVar('status')
		]);
		session()->setFlashdata('message', 'Update Data Peserta Berhasil');
		return redirect()->to('backend/pendaftaran');
	}

	function delete($id)
	{
		$dataPendaftaran = $this->pendaftaran->find($id);
		if (empty($dataPendaftaran)) {
			session()->setFlashdata('message', 'Data Peserta Tidak Di temukan !');
			return redirect()->to('backend/pendaftaran');
		}
		$this->pendaftaran->delete($id);
		session()->setFlashdata('message', 'Hapus Data Peserta Berhasil');
		return redirect()->to('backend/pendaftaran');
	}
}

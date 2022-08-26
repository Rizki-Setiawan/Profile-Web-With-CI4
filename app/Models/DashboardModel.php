<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
	public function getCountUser()
	{
		return $this->db->table("users")->countAll();
	}
	public function getCountBerita()
	{
		return $this->db->table("berita")->countAll();
	}
	public function getCountPeserta()
	{
		return $this->db->table("pendaftaran")->countAll();
	}
	public function getCountGaleri()
	{
		return $this->db->table("galeri")->countAll();
	}
}


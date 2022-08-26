<?php

namespace App\Controllers;
use App\Models\DashboardModel;

class Backend extends BaseController
{
	public function __construct()
    {
        $this->dashboardmodel = new DashboardModel();
    }

	public function dashboard()
	{
		$data['total_users'] = $this->dashboardmodel->getCountUser();
		$data['total_berita'] = $this->dashboardmodel->getCountBerita();
		$data['total_peserta'] = $this->dashboardmodel->getCountPeserta();
		$data['total_galeri'] = $this->dashboardmodel->getCountGaleri();
		return view('content_backend/dashboard',$data);
	}
	
}

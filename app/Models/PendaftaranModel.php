<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table      = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id','nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'no_hp', 'nama_ayah','nama_ibu','alamat','program_pelatihan','status','created_at'];
}
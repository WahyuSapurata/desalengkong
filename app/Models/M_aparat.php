<?php

namespace App\Models;

use CodeIgniter\Model;

class M_aparat extends Model
{
    protected $table      = 'aparat_desa';
    protected $primaryKey = 'id_aparat';
    protected $allowedFields = ['nama_lengkap', 'nama_panggilan', 'jabatan', 'alamat', 'handphone', 'lokasi', 'foto'];
}

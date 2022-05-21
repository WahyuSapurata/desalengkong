<?php

namespace App\Models;

use CodeIgniter\Model;

class M_keluar extends Model
{
    protected $table      = 'keluar';
    protected $primaryKey = 'id_keluar';
    protected $allowedFields = ['nama', 'nik', 'no_kk', 'tanggal', 'alamat', 'jenis_kelamin', 'tanggal_keluar', 'tanggal_input'];
}
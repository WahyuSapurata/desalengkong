<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pindah extends Model
{
    protected $table      = 'pindah';
    protected $primaryKey = 'id_pindah';
    protected $allowedFields = ['nama', 'nik', 'no_kk', 'tanggal', 'alamat', 'jenis_kelamin', 'tanggal_pindah', 'tanggal_input'];
}

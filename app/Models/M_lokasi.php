<?php

namespace App\Models;

use CodeIgniter\Model;

class M_lokasi extends Model
{
    protected $table      = 'lokasi';
    protected $primaryKey = 'id_lokasi';
    protected $allowedFields = ['nama_lokasi', 'lokasi', 'foto'];
}

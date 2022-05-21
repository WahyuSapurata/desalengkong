<?php

namespace App\Models;

use CodeIgniter\Model;

class M_artikel extends Model
{
    protected $table      = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['judul', 'isi', 'foto'];
}

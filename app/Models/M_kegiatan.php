<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kegiatan extends Model
{
    protected $table      = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $allowedFields = ['nama_kegiatan'];
}

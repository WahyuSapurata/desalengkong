<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pengumuman extends Model
{
    protected $table      = 'pengumuman';
    protected $primaryKey = 'id_pengumuman';
    protected $allowedFields = ['isi'];
}

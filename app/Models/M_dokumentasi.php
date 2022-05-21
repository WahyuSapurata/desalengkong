<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dokumentasi extends Model
{
    protected $table      = 'dokumentasi';
    protected $primaryKey = 'id_dokumentasi';
    protected $allowedFields = ['foto', 'id_kegiatan'];

    public function join_dokumentasi()
    {
        $query =  $this->db->table('dokumentasi')
            ->join('kegiatan', 'dokumentasi.id_kegiatan = kegiatan.id_kegiatan')
            ->get();
        return $query;
    }

    public function join()
    {
        $query =  $this->db->table('dokumentasi')
            ->join('kegiatan', 'dokumentasi.id_kegiatan = kegiatan.id_kegiatan');
        return $query->get()->getResultArray();
    }
}

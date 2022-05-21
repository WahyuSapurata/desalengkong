<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kematian extends Model
{
    protected $table      = 'kematian';
    protected $primaryKey = 'id_kematian';
    protected $allowedFields = ['nama', 'tanggal', 'alamat', 'jenis_kelamin', 'tanggal_input', 'tanggal_kematian', 'nik'];

    public function jumlah_kematian()
    {
        $query = $this->db->query('SELECT * FROM kematian');
        return $query->getNumRows();    
    }

    public function kematian_ulurea()
    {
        $query = $this->db->query("SELECT * FROM kematian where alamat='Ulurea'");
        return $query->getResultArray();    
    }

    public function kematian_pakkalolo()
    {
        $query = $this->db->query("SELECT * FROM kematian where alamat='Pakkalolo'");
        return $query->getResultArray();    
    }

    public function kematian_karo()
    {
        $query = $this->db->query("SELECT * FROM kematian where alamat='Karo'");
        return $query->getResultArray();    
    }

    public function kematian_boting()
    {
        $query = $this->db->query("SELECT * FROM kematian where alamat='Boting'");
        return $query->getResultArray();    
    }

    public function kematian_lengkong()
    {
        $query = $this->db->query("SELECT * FROM kematian where alamat='Lengkong'");
        return $query->getResultArray();    
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class M_penduduk extends Model
{
    protected $table      = 'penduduk';
    protected $primaryKey = 'id_penduduk';
    protected $allowedFields = ['nama', 'nik', 'no_kk', 'tanggal', 'alamat', 'jenis_kelamin', 'status', 'pendidikan'];

    public function jumlah()
    {
        $query = $this->db->query('SELECT * FROM penduduk');
        return $query->getNumRows();    
    }
    
    public function jumlah_laki()
    {
        $query = $this->db->query("SELECT * FROM penduduk where jenis_kelamin='Laki-laki'");
        return $query->getNumRows();    
    }
    
    public function jumlah_perempuan()
    {
        $query = $this->db->query("SELECT * FROM penduduk where jenis_kelamin='Perempuan'");
        return $query->getNumRows();    
    }

    public function ulurea()
    {
        $query = $this->db->query("SELECT * FROM penduduk where alamat='Ulurea'");
        return $query->getResultArray();    
    }

    public function pakkalolo()
    {
        $query = $this->db->query("SELECT * FROM penduduk where alamat='Pakkalolo'");
        return $query->getResultArray();    
    }

    public function karo()
    {
        $query = $this->db->query("SELECT * FROM penduduk where alamat='Karo'");
        return $query->getResultArray();    
    }

    public function boting()
    {
        $query = $this->db->query("SELECT * FROM penduduk where alamat='Boting'");
        return $query->getResultArray();    
    }

    public function lengkong()
    {
        $query = $this->db->query("SELECT * FROM penduduk where alamat='Lengkong'");
        return $query->getResultArray();    
    }
}

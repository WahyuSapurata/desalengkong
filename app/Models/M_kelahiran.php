<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kelahiran extends Model
{
    protected $table      = 'kelahiran';
    protected $primaryKey = 'id_kelahiran';
    protected $allowedFields = ['nama', 'tanggal', 'alamat', 'jenis_kelamin', 'tanggal_input'];

    public function jumlah_kelahiran()
    {
        $query = $this->db->query('SELECT * FROM kelahiran');
        return $query->getNumRows();
    }
    
    public function kelahiran_ulurea()
    {
        $query = $this->db->query("SELECT * FROM kelahiran where alamat='Ulurea'");
        return $query->getResultArray();    
    }

    public function kelahiran_pakkalolo()
    {
        $query = $this->db->query("SELECT * FROM kelahiran where alamat='Pakkalolo'");
        return $query->getResultArray();    
    }

    public function kelahiran_karo()
    {
        $query = $this->db->query("SELECT * FROM kelahiran where alamat='Karo'");
        return $query->getResultArray();    
    }

    public function kelahiran_boting()
    {
        $query = $this->db->query("SELECT * FROM kelahiran where alamat='Boting'");
        return $query->getResultArray();    
    }

    public function kelahiran_lengkong()
    {
        $query = $this->db->query("SELECT * FROM kelahiran where alamat='Lengkong'");
        return $query->getResultArray();    
    }
}
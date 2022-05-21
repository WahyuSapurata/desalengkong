<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_aparat;
use App\Models\M_penduduk;
use App\Models\M_artikel;
use App\Models\M_pengumuman;
use App\Models\M_dokumentasi;
use App\Models\M_lokasi;
use App\Models\M_kelahiran;
use App\Models\M_kematian;
use App\Models\M_pindah;
use App\Models\M_keluar;
use App\Models\M_kegiatan;

class Home extends BaseController
{

    protected $M_admin;
    protected $M_aparat;
    protected $M_penduduk;
    protected $M_artikel;
    protected $M_pengumuman;
    protected $M_dokumentasi;
    protected $M_lokasi;
    protected $M_kelahiran;
    protected $M_kematian;
    protected $M_pindah;
    protected $M_keluar;
    protected $M_kegiatan;
    public function __construct()
    {
        $this->M_admin = new M_admin();
        $this->M_aparat = new M_aparat();
        $this->M_penduduk = new M_penduduk();
        $this->M_artikel = new M_artikel();
        $this->M_pengumuman = new M_pengumuman();
        $this->M_dokumentasi = new M_dokumentasi();
        $this->M_lokasi = new M_lokasi();
        $this->M_kelahiran = new M_kelahiran();
        $this->M_kematian = new M_kematian();
        $this->M_pindah = new M_pindah();
        $this->M_keluar = new M_keluar();
        $this->M_kegiatan = new M_kegiatan();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['artikel'] = $this->M_artikel->findAll();
        $data['pengumuman'] = $this->M_pengumuman->findAll();
        $data['dokumentasi'] = $this->M_dokumentasi->findAll();
        $data['join_dokumentasi'] = $this->M_dokumentasi->join_dokumentasi()->getResultArray();
        $data['kegiatan'] = $this->M_kegiatan->findAll();
        return view('home/beranda', $data);
    }

    public function sendEmail()
    {
        $this->email->setFrom($this->request->getVar('email'), $this->request->getVar('nama'));
        $this->email->setTo('pmdslengkong@gmail.com');

        $this->email->setSubject('Desa Lengkong');

        $this->email->setMessage($this->request->getVar('pesan'));

        if (!$this->email->send()) {
            return false;
        } else {
            session()->setFlashdata("success", "Email berhasil di kirim.");
            return redirect()->to(base_url('home/index'));
        }
    }

    public function aparat_desa()
    {
        $data['title'] = 'Aparat Desa';
        $data['pengumuman'] = $this->M_pengumuman->findAll();
        $data['aparat'] = $this->M_aparat->findAll();
        $data['lokasi'] = $this->M_lokasi->findAll();
        return view('home/aparat-desa', $data);
    }

    public function detail_galery($id_kegiatan)
    {
        $data['title'] = 'Galery Lengkong';
        $data['pengumuman'] = $this->M_pengumuman->findAll();
        $data['kegiatan'] = $this->M_kegiatan->where('id_kegiatan', $id_kegiatan)->find();
        $data['join'] = $this->M_dokumentasi->where('id_kegiatan', $id_kegiatan)->find();
        // $data['dokumentasi'] = $this->M_dokumentasi->where('id_dokumentasi', $id_dokumentasi)->find();
        // dd($data['kegiatan']);
        return view('home/galery', $data);
    }

    public function detail_lokasi($id_aparat)
    {
        $data['title'] = 'Detail Lokasi';
        $data['pengumuman'] = $this->M_pengumuman->findAll();
        $data['aparat'] = $this->M_aparat->where('id_aparat', $id_aparat)->find();
        // dd($data['aparat']);
        return view('home/detail-aparat', $data);
    }

    public function detail_tempat($id_lokasi)
    {
        $data['title'] = 'Detail Lokasi';
        $data['pengumuman'] = $this->M_pengumuman->findAll();
        $data['lokasi'] = $this->M_lokasi->where('id_lokasi', $id_lokasi)->find();
        // dd($data['aparat']);
        return view('home/detail-tempat', $data);
    }

    public function data_penduduk()
    {
        $data['title'] = 'Data Penduduk';
        $data['pengumuman'] = $this->M_pengumuman->findAll();
        $data['penduduk'] = $this->M_penduduk->jumlah();
        $data['laki'] = $this->M_penduduk->jumlah_laki();
        $data['perempuan'] = $this->M_penduduk->jumlah_perempuan();
        $data['ulurea'] = $this->M_penduduk->ulurea();
        $data['pakkalolo'] = $this->M_penduduk->pakkalolo();
        $data['karo'] = $this->M_penduduk->karo();
        $data['boting'] = $this->M_penduduk->boting();
        $data['lengkong'] = $this->M_penduduk->lengkong();
        $data['kelahiran'] = $this->M_kelahiran->jumlah_kelahiran();
        $data['kematian'] = $this->M_kematian->jumlah_kematian();
        // dd($data['kelahiran']);
        $data['kelahiran_ulurea'] = $this->M_kelahiran->kelahiran_ulurea();
        $data['kelahiran_pakkalolo'] = $this->M_kelahiran->kelahiran_pakkalolo();
        $data['kelahiran_karo'] = $this->M_kelahiran->kelahiran_karo();
        $data['kelahiran_boting'] = $this->M_kelahiran->kelahiran_boting();
        $data['kelahiran_lengkong'] = $this->M_kelahiran->kelahiran_lengkong();

        $data['kematian_ulurea'] = $this->M_kematian->kematian_ulurea();
        $data['kematian_pakkalolo'] = $this->M_kematian->kematian_pakkalolo();
        $data['kematian_karo'] = $this->M_kematian->kematian_karo();
        $data['kematian_boting'] = $this->M_kematian->kematian_boting();
        $data['kematian_lengkong'] = $this->M_kematian->kematian_lengkong();

        $data['masuk'] = $this->M_pindah->findAll();
        $data['keluar'] = $this->M_keluar->findAll();
        return view('home/data-penduduk', $data);
    }

    public function blocked_admin()
    {
        $data['title'] = 'Eror 404';
        return view('eror/blocked-admin', $data);
    }
}

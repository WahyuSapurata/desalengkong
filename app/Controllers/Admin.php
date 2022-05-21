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

class Admin extends BaseController
{
    protected $session;
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
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Beranda';
        return view('admin/beranda', $data);
    }

    public function aparat_desa()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Aparat Desa';
        $data['aparat'] = $this->M_aparat->findAll();
        echo view('admin/aparat-desa', $data);
        echo view('admin/tambah/aparat');
    }
    public function tambah_aparat()
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);

            $this->M_aparat->save([
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'nama_panggilan' => $this->request->getVar('nama_panggilan'),
                'jabatan' => $this->request->getVar('jabatan'),
                'alamat' => $this->request->getVar('alamat'),
                'handphone' => $this->request->getVar('handphone'),
                'lokasi' => $this->request->getVar('lokasi'),
                'foto' => $newName,
            ]);

            session()->setFlashdata("success", "Dokumen berhasil di tambah.");
            return redirect()->to(base_url('admin/aparat_desa'));
        } else {
            session()->setFlashdata("error", "Dokumen gagal di tambah.");
            return redirect()->to(base_url('admin/aparat_desa'));
        }
    }
    public function hapus_aparat($id_aparat)
    {
        $aparat = $this->M_aparat->find($id_aparat);
        unlink('uploads/' . $aparat['foto']);

        $this->M_aparat->delete($id_aparat);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/aparat_desa'));
    }
    public function edit_aparat($id_aparat)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);
            unlink('uploads/' . $this->request->getVar('lama'));

            $this->M_aparat->save([
                'id_aparat' => $id_aparat,
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'nama_panggilan' => $this->request->getVar('nama_panggilan'),
                'jabatan' => $this->request->getVar('jabatan'),
                'alamat' => $this->request->getVar('alamat'),
                'handphone' => $this->request->getVar('handphone'),
                'lokasi' => $this->request->getVar('lokasi'),
                'foto' => $newName,
            ]);

            session()->setFlashdata("success", "Gambar berhasil di ubah.");
            return redirect()->to(base_url('admin/aparat_desa'));
        } else {
            $this->M_aparat->save([
                'id_aparat' => $id_aparat,
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'nama_panggilan' => $this->request->getVar('nama_panggilan'),
                'jabatan' => $this->request->getVar('jabatan'),
                'alamat' => $this->request->getVar('alamat'),
                'handphone' => $this->request->getVar('handphone'),
                'lokasi' => $this->request->getVar('lokasi'),
            ]);
            session()->setFlashdata("success", "Gambar berhasil di ubah.");
            return redirect()->to(base_url('admin/aparat_desa'));
        }
    }

    public function penduduk()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Data Penduduk';
        $data['penduduk'] = $this->M_penduduk->findAll();
        echo view('admin/data-penduduk', $data);
        echo view('admin/tambah/penduduk');
    }
    public function tambah_penduduk()
    {
        $this->M_penduduk->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $this->request->getVar('no_kk'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'status' => $this->request->getVar('status'),
            'pendidikan' => $this->request->getVar('pendidikan'),
        ]);
        session()->setFlashdata("success", "Data berhasil di tambah.");
        return redirect()->to(base_url('admin/penduduk'));
    }
    public function hapus_penduduk($id_penduduk)
    {
        $this->M_penduduk->delete($id_penduduk);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/penduduk'));
    }
    public function edit_penduduk($id_penduduk)
    {
        $this->M_penduduk->save([
            'id_penduduk' => $id_penduduk,
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $this->request->getVar('no_kk'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'status' => $this->request->getVar('status'),
            'pendidikan' => $this->request->getVar('pendidikan'),
        ]);
        session()->setFlashdata("success", "Data berhasil di ubah.");
        return redirect()->to(base_url('admin/penduduk'));
    }

    public function kelahiran()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Data Kelahiran';
        $data['kelahiran'] = $this->M_kelahiran->findAll();
        echo view('admin/kelahiran', $data);
        echo view('admin/tambah/kelahiran');
    }
    public function tambah_kelahiran()
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_kelahiran->save([
            'nama' => $this->request->getVar('nama'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
        ]);
        session()->setFlashdata("success", "Data berhasil di tambah.");
        return redirect()->to(base_url('admin/kelahiran'));
    }
    public function hapus_kelahiran($id_kelahiran)
    {
        $this->M_kelahiran->delete($id_kelahiran);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/kelahiran'));
    }
    public function edit_kelahiran($id_kelahiran)
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_kelahiran->save([
            'id_kelahiran' => $id_kelahiran,
            'nama' => $this->request->getVar('nama'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
        ]);
        session()->setFlashdata("success", "Data berhasil di ubah.");
        return redirect()->to(base_url('admin/kelahiran'));
    }

    public function kematian()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Data Kematian';
        $data['kematian'] = $this->M_kematian->findAll();
        echo view('admin/kematian', $data);
        echo view('admin/tambah/kematian');
    }
    public function tambah_kematian()
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_kematian->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
            'tanggal_kematian' => $this->request->getVar('tanggal_kematian'),
        ]);
        session()->setFlashdata("success", "Data berhasil di tambah.");
        return redirect()->to(base_url('admin/kematian'));
    }
    public function hapus_kematian($id_kematian)
    {
        $this->M_kematian->delete($id_kematian);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/kematian'));
    }
    public function edit_kematian($id_kematian)
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_kematian->save([
            'id_kematian' => $id_kematian,
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
            'tanggal_kematian' => $this->request->getVar('tanggal_kematian'),
        ]);
        session()->setFlashdata("success", "Data berhasil di ubah.");
        return redirect()->to(base_url('admin/kematian'));
    }

    public function pindah()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Data Pindah Masuk';
        $data['pindah'] = $this->M_pindah->findAll();
        echo view('admin/pindah', $data);
        echo view('admin/tambah/pindah');
    }
    public function tambah_pindah()
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_pindah->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $this->request->getVar('no_kk'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
            'tanggal_pindah' => $this->request->getVar('tanggal_pindah'),
        ]);
        session()->setFlashdata("success", "Data berhasil di tambah.");
        return redirect()->to(base_url('admin/pindah'));
    }
    public function hapus_pindah($id_pindah)
    {
        $this->M_pindah->delete($id_pindah);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/pindah'));
    }
    public function edit_pindah($id_pindah)
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_pindah->save([
            'id_pindah' => $id_pindah,
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $this->request->getVar('no_kk'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
            'tanggal_pindah' => $this->request->getVar('tanggal_pindah'),
        ]);
        session()->setFlashdata("success", "Data berhasil di ubah.");
        return redirect()->to(base_url('admin/pindah'));
    }

    public function keluar()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Data Pindah Keluar';
        $data['keluar'] = $this->M_keluar->findAll();
        echo view('admin/keluar', $data);
        echo view('admin/tambah/keluar');
    }
    public function tambah_keluar()
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_keluar->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $this->request->getVar('no_kk'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
        ]);
        session()->setFlashdata("success", "Data berhasil di tambah.");
        return redirect()->to(base_url('admin/keluar'));
    }
    public function hapus_keluar($id_keluar)
    {
        $this->M_keluar->delete($id_keluar);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/keluar'));
    }
    public function edit_keluar($id_keluar)
    {
        date_default_timezone_set('Asia/Makassar');
        $waktuDaftar = date('Y-m-d');
        $this->M_keluar->save([
            'id_keluar' => $id_keluar,
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $this->request->getVar('no_kk'),
            'tanggal' => $this->request->getVar('tanggal'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_input' => $waktuDaftar,
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
        ]);
        session()->setFlashdata("success", "Data berhasil di ubah.");
        return redirect()->to(base_url('admin/keluar'));
    }

    public function artikel()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Artikel';
        $data['artikel'] = $this->M_artikel->findAll();
        echo view('admin/artikel', $data);
        echo view('admin/tambah/artikel');
    }
    public function tambah_artikel()
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/artikel', $newName);

            $this->M_artikel->save([
                'judul' => $this->request->getVar('judul'),
                'isi' => $this->request->getVar('isi'),
                'foto' => $newName,
            ]);
            session()->setFlashdata("success", "Data berhasil di tambah.");
            return redirect()->to(base_url('admin/artikel'));
        } else {
            session()->setFlashdata("error", "Data gagal di tambah.");
            return redirect()->to(base_url('admin/artikel'));
        }
    }
    public function hapus_artikel($id_artikel)
    {
        $artikel = $this->M_artikel->find($id_artikel);
        unlink('uploads/artikel/' . $artikel['foto']);

        $this->M_artikel->delete($id_artikel);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/artikel'));
    }
    public function edit_artikel($id_artikel)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/dokumentasi', $newName);
            unlink('uploads/dokumentasi/' . $this->request->getVar('lama'));

            $this->M_artikel->save([
                'id_artikel' => $id_artikel,
                'judul' => $this->request->getVar('judul'),
                'isi' => $this->request->getVar('isi'),
                'foto' => $newName,
            ]);
            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/artikel'));
        } else {
            $this->M_artikel->save([
                'id_artikel' => $id_artikel,
                'judul' => $this->request->getVar('judul'),
                'isi' => $this->request->getVar('isi'),
            ]);
            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/artikel'));
        }
    }

    public function pengumuman()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Pengumuman';
        $data['pengumuman'] = $this->M_pengumuman->findAll();
        echo view('admin/pengumuman', $data);
        echo view('admin/tambah/pengumuman');
    }
    public function tambah_pengumuman()
    {
        $this->M_pengumuman->save([
            'isi' => $this->request->getVar('isi'),
        ]);
        session()->setFlashdata("success", "Data berhasil di tambah.");
        return redirect()->to(base_url('admin/pengumuman'));
    }
    public function hapus_pengumuman($id_pengumuman)
    {
        $this->M_pengumuman->delete($id_pengumuman);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/pengumuman'));
    }
    public function edit_pengumuman($id_pengumuman)
    {
        $this->M_pengumuman->save([
            'id_pengumuman' => $id_pengumuman,
            'isi' => $this->request->getVar('isi'),
        ]);
        session()->setFlashdata("success", "Data berhasil di ubah.");
        return redirect()->to(base_url('admin/pengumuman'));
    }

    public function kegiatan()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Kegiatan';
        $data['kegiatan'] = $this->M_kegiatan->findAll();
        echo view('admin/kegiatan', $data);
        echo view('admin/tambah/kegiatan');
    }
    public function tambah_kegiatan()
    {
        $this->M_kegiatan->save([
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
        ]);
        session()->setFlashdata("success", "Data berhasil di tambah.");
        return redirect()->to(base_url('admin/kegiatan'));
    }
    public function hapus_kegiatan($id_kegiatan)
    {
        $this->M_kegiatan->delete($id_kegiatan);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/kegiatan'));
    }
    public function edit_kegiatan($id_kegiatan)
    {
        $this->M_kegiatan->save([
            'id_kegiatan' => $id_kegiatan,
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
        ]);
        session()->setFlashdata("success", "Data berhasil di ubah.");
        return redirect()->to(base_url('admin/kegiatan'));
    }

    public function dokumentasi($id_kegiatan = 0)
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Dokumentasi';
        $data['dokumentasi'] = $this->M_dokumentasi->findAll();
        $data['join_dokumentasi'] = $this->M_dokumentasi->join_dokumentasi()->getResultArray();
        // dd($data['join_dokumentasi']);
        $data['kegiatan'] = $this->M_kegiatan->findAll();
        $data['id_kegiatan'] = $id_kegiatan;
        echo view('admin/dokumentasi', $data);
        echo view('admin/tambah/dokumentasi', $data);
    }
    public function tambah_dokumentasi()
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/dokumentasi', $newName);

            $this->M_dokumentasi->save([
                'id_kegiatan' => $this->request->getVar('id_kegiatan'),
                'foto' => $newName,
            ]);
            session()->setFlashdata("success", "Data berhasil di tambah.");
            return redirect()->to(base_url('admin/dokumentasi'));
        } else {
            session()->setFlashdata("error", "Data gagal di tambah.");
            return redirect()->to(base_url('admin/dokumentasi'));
        }
    }
    public function hapus_dokumentasi($id_dokumentasi)
    {
        $dokumentasi = $this->M_dokumentasi->find($id_dokumentasi);
        unlink('uploads/dokumentasi/' . $dokumentasi['foto']);

        $this->M_dokumentasi->delete($id_dokumentasi);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/dokumentasi'));
    }
    public function edit_dokumentasi($id_dokumentasi)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/dokumentasi', $newName);
            unlink('uploads/dokumentasi/' . $this->request->getVar('lama'));

            $this->M_dokumentasi->save([
                'id_dokumentasi' => $id_dokumentasi,
                'id_kegiatan' => $this->request->getVar('id_kegiatan'),
                'foto' => $newName,
            ]);

            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/dokumentasi'));
        } else {
            $this->M_dokumentasi->save([
                'id_dokumentasi' => $id_dokumentasi,
                'id_kegiatan' => $this->request->getVar('id_kegiatan'),
            ]);
            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/dokumentasi'));
        }
    }

    public function lokasi()
    {
        $data['title'] = 'Lokasi';
        $data['lokasi'] = $this->M_lokasi->findAll();
        echo view('admin/lokasi', $data);
        echo view('admin/tambah/lokasi');
    }
    public function tambah_lokasi()
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/lokasi', $newName);

            $this->M_lokasi->save([
                'nama_lokasi' => $this->request->getVar('nama_lokasi'),
                'lokasi' => $this->request->getVar('lokasi'),
                'foto' => $newName,
            ]);
            session()->setFlashdata("success", "Data berhasil di tambah.");
            return redirect()->to(base_url('admin/lokasi'));
        } else {
            session()->setFlashdata("error", "Data gagal di tambah.");
            return redirect()->to(base_url('admin/lokasi'));
        }
    }
    public function hapus_lokasi($id_lokasi)
    {
        $lokasi = $this->M_lokasi->find($id_lokasi);
        unlink('uploads/lokasi/' . $lokasi['foto']);

        $this->M_lokasi->delete($id_lokasi);
        session()->setFlashdata("success", "Data Berhasil di Hapus.");
        return redirect()->to(base_url('admin/lokasi'));
    }
    public function edit_lokasi($id_lokasi)
    {
        $periksa = $this->validate([
            'file_upload' => [
                'uploaded[file_upload]',
                'mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file_upload,10000]',
            ],
        ]);

        if ($periksa) {
            $file = $this->request->getFile('file_upload');
            $newName = $file->getRandomName();
            $file->move('uploads/lokasi', $newName);
            unlink('uploads/lokasi/' . $this->request->getVar('lama'));

            $this->M_lokasi->save([
                'id_lokasi' => $id_lokasi,
                'nama_lokasi' => $this->request->getVar('nama_lokasi'),
                'lokasi' => $this->request->getVar('lokasi'),
                'foto' => $newName,
            ]);

            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/lokasi'));
        } else {
            $this->M_lokasi->save([
                'id_lokasi' => $id_lokasi,
                'nama_lokasi' => $this->request->getVar('nama_lokasi'),
                'lokasi' => $this->request->getVar('lokasi'),
            ]);
            session()->setFlashdata("success", "Data berhasil di ubah.");
            return redirect()->to(base_url('admin/lokasi'));
        }
    }

    public function ubah_password()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to(base_url('home/blocked_admin'));
        }
        $data['title'] = 'Ubah Password';
        return view('admin/ubah-password', $data);
    }
    public function edit_password()
    {
        $periksa = $this->validate([
            'password2' => [
                'rules' => 'required|trim|min_length[3]|matches[password3]'
            ],
            'password3' => [
                'rules' => 'required|trim|min_length[3]|matches[password2]'
            ],

        ]);
        if ($periksa) {
            $cek = $this->M_admin->where('id_admin', session()->get('id_admin'))->first();
            $cek_admin = md5($this->request->getVar('password1'));
            if ($cek['password'] == $cek_admin) {
                $this->M_admin->save([
                    'id_admin' => session()->get('id_admin'),
                    'password' => md5($this->request->getVar('password2'))
                ]);
                session()->setFlashdata("success", "berhasil ubah password.");
                return redirect()->to(base_url('admin/ubah_password'));
            } else {
                session()->setFlashdata("error", "gagal ubah password.");
                return redirect()->to(base_url('admin/ubah_password'));
            }
        } else {
            session()->setFlashdata("error", "gagal ubah password.");
            return redirect()->to(base_url('admin/ubah_password'));
        }
    }
}

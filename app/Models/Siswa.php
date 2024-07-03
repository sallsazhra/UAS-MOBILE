<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'nis_siswa';
    protected $allowedFields    = ['nis_siswa','nama_siswa'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


        public function getSiswaWithTransaksiByNis($nis_siswa)
        {
            return $this->select('siswa.*, transaksi.id, transaksi.tanggal_transaksi, transaksi.nominal, transaksi.berita')
                        ->join('transaksi', 'siswa.nis_siswa = transaksi.nis_siswa')
                        ->where('siswa.nis_siswa', $nis_siswa)
                        ->findAll();
        }
}
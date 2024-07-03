<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nis_siswa','nama_siswa','nominal','berita'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

        // Function to get pembayaran with related siswa data
        public function getSiswaWithTransaksi()
        {
            return $this->select('transaksi.id, transaksi.tanggal_transaksi, siswa.*,  transaksi.nominal, transaksi.berita')
                        ->join('siswa', 'transaksi.nis_siswa = siswa.nis_siswa')
                        ->findAll();
        }
        public function getTransaksiWithSiswaByNis($nis_siswa)
        {
            return $this->select('transaksi.*, siswa.nama_siswa')
                        ->join('siswa', 'siswa.nis_siswa = transaksi.nis_siswa')
                        ->where('transaksi.nis_siswa', $nis_siswa)
                        ->findAll();
        }
}

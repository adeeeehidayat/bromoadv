<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'alamat', 'no_ktp', 'no_tlp_pribadi',
        'tanggal_berangkat', 'tanggal_pulang', 'alamat_penjemputan',
        'jumlah_peserta', 'paket_perjalanan', 'kebutuhan_khusus',
        'metode_pembayaran', 'bukti_pembayaran'
    ];
}


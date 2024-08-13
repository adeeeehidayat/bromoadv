<?php

namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Controller;

class Booking extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function simpan()
    {
        $bookingModel = new BookingModel();

        // Validasi data
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'alamat' => 'required',
            'no_ktp' => 'required',
            'no_tlp_pribadi' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_pulang' => 'required',
            'alamat_penjemputan' => 'required',
            'jumlah_peserta' => 'required',
            'paket_perjalanan' => 'required',
            'kebutuhan_khusus' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|is_image[bukti_pembayaran]'
        ]);

        if(!$validation->withRequest($this->request)->run()){
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari form
        $file = $this->request->getFile('bukti_pembayaran');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $data = [
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'no_ktp' => $this->request->getPost('no_ktp'),
                'no_tlp_pribadi' => $this->request->getPost('no_tlp_pribadi'),
                'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat'),
                'tanggal_pulang' => $this->request->getPost('tanggal_pulang'),
                'alamat_penjemputan' => $this->request->getPost('alamat_penjemputan'),
                'jumlah_peserta' => $this->request->getPost('jumlah_peserta'),
                'paket_perjalanan' => $this->request->getPost('paket_perjalanan'),
                'kebutuhan_khusus' => $this->request->getPost('kebutuhan_khusus'),
                'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
                'bukti_pembayaran' => $newName,
            ];

            // Simpan data ke dalam database
            $bookingModel->insert($data);

            // Redirect atau tampilkan pesan sukses
            return redirect()->to(base_url('prosespesanan'));
        }
        
        return redirect()->back()->withInput()->with('errors', 'Gagal mengupload bukti pembayaran.');
    }
}

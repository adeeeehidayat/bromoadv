<?php

namespace App\Controllers;
use App\Models\SignupModel;

class Signup extends BaseController
{
    public function index(): string
    {
        return view('signup');
    }

    public function create()
    {
        $signupModel = new SignupModel();
        
        $email = $this->request->getPost('email');
        $existingUser = $signupModel->where('email', $email)->first();

        $file = $this->request->getFile('image');

        if ($existingUser) {
            // Nama sudah digunakan, tampilkan pesan kesalahan
            return redirect()->back()->withInput()->with('error', 'Email sudah digunakan. Silakan login.');
        }

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Move the uploaded file to public/uploads directory
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);

            $data = [
                'name'     => $this->request->getPost('name'),
                'email'    => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'photo'    => $newName
            ];

            $signupModel->insert($data);

            // Akun berhasil dibuat, tampilkan pesan sukses
            return redirect()->to('signup')->with('success', 'Akun berhasil dibuat! Silakan masuk.');
        } else {
            // Handle error if file upload fails
            return redirect()->back()->withInput()->with('error', 'Gagal mengupload gambar.');
        }
    }
}

<?php

namespace App\Controllers;

use App\Models\Berita_model;
use App\Models\Client_model;
use App\Models\Galeri_model;
use App\Models\Konfigurasi_model;

class Send_email extends BaseController
{
    
    // Homepage
    public function index()
    {
        $email = \Config\Services::email();
        $email->setFrom('khairon.yt@gmail.com', 'Server Email');
        $email->setTo('khaironbiz@gmail.com');
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');
        $send = $email->send();
        if($send){
            echo "Sukses Kirim email by khairon";
        }else{
            echo "Gagal Kirim Email by khairon";
        }
    }
}

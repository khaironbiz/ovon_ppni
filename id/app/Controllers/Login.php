<?php
namespace App\Controllers;
use App\Models\Konfigurasi_model;
use App\Models\User_model;
class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $email = \Config\Services::email();
    }
    // Homepage
    public function index()
    {
        $session       = \Config\Services::session();
        $m_konfigurasi = new Konfigurasi_model();
        $m_user        = new User_model();
        $konfigurasi   = $m_konfigurasi->listing();
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'username' => 'required|valid_email',
                'password' => 'required|min_length[3]',
            ]
        )) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user     = $m_user->login($username, $password);
            // Proses login
            if ($user) {
                // Jika username password benar
                //kirim email
                $email_pengirim = 'khairon.yt@gmail.com';
                $nama_pengirim  = 'One Village One Nurse';
                $subject        = "Login Success";
                $ip             = $_SERVER['REMOTE_ADDR'];
                $perangkat      = $_SERVER['HTTP_USER_AGENT'];
                
                $waktu_login    = date('d-m-Y H:i:s');
                $to             = $user['email'];
                $pesan          = " 
                <h3>Login Success</h3> 
                <p>Selamat anda telah sukses login, jika anda tidak merasa login silahkan ganti password anda atau hubungi admin : Khairon 081213798746.</p> 
                <table>
                    <tr>
                        <td>IP Login</td>
                        <td>:</td>
                        <td>$ip</td>
                    </tr>
                    <tr>
                        <td>Waktu Login</td>
                        <td>:</td>
                        <td>$waktu_login</td>
                    </tr>
                    
                </table>
                
                <p>One Village One Nurse Administrator</p>

                <b>-----------------------------------------------------------</b>
                <p>Ini adalah email server mohon tidak membalas email ini</p>
                "; 

                //send email
                $email = \Config\Services::email();
                $email->setFrom($email_pengirim, $nama_pengirim);
                $email->setTo($to);
                $email->setSubject($subject);
                $email->setMessage($pesan);
                $email->send(); 
                //create session
                $this->session->set('username', $username);
                $this->session->set('id_user', $user['id_user']);
                $this->session->set('akses_level', $user['akses_level']);
                $this->session->set('nama', $user['user_nama']);
                $this->session->setFlashdata('sukses', 'Hai ' . $user['nama'] . ', Anda berhasil login');
                return redirect()->to(base_url('admin/dasbor'));
            }
            // jika username password salah
            $this->session->setFlashdata('warning', 'Username atau password salah');
            return redirect()->to(base_url('login'));
        }
        // End validasi
        $data = [
            'title'         => 'Login Administrator',
            'description'   => $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'      => $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'session'       => $session,
        ];
        echo view('login/index', $data);
        // End proses
    }
    // lupa
    public function lupa()
    {
        $session       = \Config\Services::session();
        $m_konfigurasi = new Konfigurasi_model();
        $m_user        = new User_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $data = [
                'title'         => 'Lupa Password',
                'description'   => $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
                'keywords'      => $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
                'session'       => $session,
        ];
        echo view('login/lupa', $data);
    }
    
    //reset password
    public function reset_password(){
        $session       = \Config\Services::session();
        $m_konfigurasi = new Konfigurasi_model();
        $m_user        = new User_model();
        $konfigurasi   = $m_konfigurasi->listing();
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'username' => 'required|valid_email',
            ]
        )) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user     = $m_user->login($username, $password);
            // Proses login
            if ($user) {
                // Jika username password benar
                //kirim email
                $email_pengirim = 'khairon.yt@gmail.com';
                $nama_pengirim  = 'One Village One Nurse';
                $subject        = "Login Success";
                $ip             = $_SERVER['REMOTE_ADDR'];
                $perangkat      = $_SERVER['HTTP_USER_AGENT'];
                $waktu_login    = date('d-m-Y H:i:s');
                $to             = $user['email'];
                $pesan          = " 
                <h3>Login Success</h3> 
                <p>Selamat anda telah sukses login, jika anda tidak merasa login silahkan ganti password anda atau hubungi admin : Khairon 081213798746.</p> 
                <table>
                    <tr>
                        <td>IP Login</td>
                        <td>:</td>
                        <td>$ip</td>
                    </tr>
                    <tr>
                        <td>Waktu Login</td>
                        <td>:</td>
                        <td>$waktu_login</td>
                    </tr>
                    
                </table>
                
                <p>One Village One Nurse Administrator</p>

                <b>-----------------------------------------------------------</b>
                <p>Ini adalah email server mohon tidak membalas email ini</p>
                "; 

                //send email
                $email = \Config\Services::email();
                $email->setFrom($email_pengirim, $nama_pengirim);
                $email->setTo($to);
                $email->setSubject($subject);
                $email->setMessage($pesan);
                $email->send(); 
                //create session
                $this->session->set('username', $username);
                $this->session->set('id_user', $user['id_user']);
                $this->session->set('akses_level', $user['akses_level']);
                $this->session->set('nama', $user['user_nama']);
                $this->session->setFlashdata('sukses', 'Hai ' . $user['nama'] . ', Anda berhasil login');
                return redirect()->to(base_url('login/reset'));
            }
        }
    }
    // Logout
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('login?logout=sukses'));
    }
}

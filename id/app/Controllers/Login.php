<?php
namespace App\Controllers;
use App\Models\Konfigurasi_model;
use App\Models\User_model;
class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
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
                'username' => 'required|min_length[3]',
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
                $subject        = "Login Success";
                $ip             = $_SERVER['REMOTE_ADDR'];
                $waktu_login    = date('d-m-Y');
                $htmlContent    = ' 
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
                <p>DPK PPNI RSPON</p>
                <p>Ini adalah email server mohon tidak membalas email ini</p>
                '; 
                $to             = $user['email'];
                $from           = 'admin@ppni.or.id'; 
                $fromName       = 'DPK PPNI RSPON'; 
                // $file           = $download['file']; 
                $headers        = "From: $fromName"." <".$from.">"; 
                $semi_rand      = md5(time());  
                $mime_boundary  = "==Multipart_Boundary_x{$semi_rand}x";  
                $headers        .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                $message        = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
                "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
                $send_email     = @mail($to, $subject, $message, $headers, $returnpath); 
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
    // Logout
    public function logout()
    {
        $this->session->destroy();

        return redirect()->to(base_url('login?logout=sukses'));
    }
}

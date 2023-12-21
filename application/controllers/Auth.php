<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        check_not_login(); // Memastikan pengguna belum masuk
        $this->load->view('login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);

        if (isset($post['login'])) {
            // Memeriksa apakah reCAPTCHA diisi
            $recaptchaResponse = $post['g-recaptcha-response'];
            $recaptchaSecretKey = '6LeLc0AoAAAAAJM7oKyNtxOF7VxNjMm8p7-u9-AK
            '; // Ganti dengan kunci rahasia reCAPTCHA Anda
            $recaptchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

            $recaptchaResponseData = array(
                'secret' => $recaptchaSecretKey,
                'response' => $recaptchaResponse
            );

            // Membuat permintaan POST ke Google reCAPTCHA API
            $recaptchaVerifyResponse = file_get_contents($recaptchaVerifyUrl, false, stream_context_create([
                'http' => [
                    'method' => 'POST',
                    'header' => 'Content-type: application/x-www-form-urlencoded',
                    'content' => http_build_query($recaptchaResponseData)
                ]
            ]));

            $recaptchaData = json_decode($recaptchaVerifyResponse);

            if ($recaptchaData->success) {
                // reCAPTCHA valid, lanjutkan dengan proses login
                $this->load->model('user_m');
                $query = $this->user_m->login($post);

                if ($query !== null && $query->num_rows() > 0) {
                    $row = $query->row();
                    $params = array(
                        'userid' => $row->user_id, // Ganti 'user_id' menjadi 'userid'
                        'level' => $row->level,
                    );
                    $this->session->set_userdata($params);
?>
                    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
                    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
                    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/animate.min.css">
                    <style>
                        body {
                            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                            font-size: 1.124em;
                            font-weight: normal;
                        }
                    </style>

                    <body></body>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Selamat login berhasil',
                            showClass: {
                                popup: 'animate__animated animate__pulse'
                            }
                        }).then((result) => {
                            window.location = '<?= site_url('dashboard') ?>';
                        })
                    </script>
                <?php
                    // Mengarahkan pengguna ke dashboard setelah login berhasil
                } else {
                ?>
                    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
                    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
                    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/animate.min.css">
                    <style>
                        body {
                            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                            font-size: 1.124em;
                            font-weight: normal;
                        }
                    </style>

                    <body></body>
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed',
                            text: 'Login gagal, username / password salah',
                            showClass: {
                                popup: 'animate__animated animate__shakeX' // Ganti animasi sesuai kebutuhan Anda
                            }
                        }).then((result) => {
                            window.location = '<?= site_url('auth/login') ?>';
                        })
                    </script>
                <?php
                    // Mengarahkan pengguna kembali ke halaman login jika login gagal
                }
            } else {
                ?>
                <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
                <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
                <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/animate.min.css">
                <style>
                    body {
                        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                        font-size: 1.124em;
                        font-weight: normal;
                    }
                </style>

                <body></body>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed',
                        text: 'reCAPTCHA tidak valid',
                        showClass: {
                            popup: 'animate__animated animate__tada'
                        }
                    }).then((result) => {
                        window.location = '<?= site_url('auth/login') ?>';
                    })
                </script>
<?php
                // Mengarahkan pengguna kembali ke halaman login jika reCAPTCHA tidak valid
            }
        }
    }


    public function logout()
    {
        $params = array('userid', 'level'); // Ganti 'user_id' menjadi 'userid'
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}

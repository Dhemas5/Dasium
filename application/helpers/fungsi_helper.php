<?php

function check_already_login()
{
    $ci = get_instance();
    $user_session = $ci->session->userdata('userid');
    if (!$user_session) {
        // Jika pengguna belum masuk, arahkan ke halaman login
        redirect('auth/login');
    }
}

function check_not_login()
{
    $ci = get_instance();
    $user_session = $ci->session->userdata('userid');
    if ($user_session) {
        // Jika pengguna sudah masuk, arahkan ke dashboard
        redirect('dashboard');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 1) {
        redirect('dashboard');
    }
}

function indo_currency($nominal)
{
    $result = "Rp" . number_format($nominal, 2, ',', '.');
    return $result;
}

function indo_date($date)
{
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);
    return $d . '-' . $m . '-' . $y;
}

function GetKodePenjualan()
{
    $ci = &get_instance();
    $AmbilTanggalSekarang = date('dmy');
    $CekKodePenjualan = $ci->db->get('penjualan')->num_rows();

    if ($CekKodePenjualan > 0) {
        $KodePenjualan = $ci->db->query("SELECT MAX(kode_penjualan) AS KD FROM penjualan WHERE DATE(tanggal) = CURDATE()")->row();
        $noUrut = substr($KodePenjualan->KD, 9, 4) + 1;
        $KodePenjualanBaru = sprintf('%04s', $noUrut);
    } else {
        $KodePenjualanBaru = '0001';
    }

    return "KDP" . $AmbilTanggalSekarang . $KodePenjualanBaru;
}

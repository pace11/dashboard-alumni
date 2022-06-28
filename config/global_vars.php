<?php 

use Dompdf\Dompdf;
use Ramsey\Uuid\Uuid;
require 'vendor/autoload.php';
$uuid4 = Uuid::uuid4();
$dompdf = new Dompdf();

function get_data_pimpinan($id) {
    include "connection.php";
    $absensi = mysqli_query($conn, "SELECT * FROM tbl_pimpinan WHERE id='$id'");
    return mysqli_fetch_array($absensi);
}

function get_count_already_working($id) {
    include "connection.php";
    $tmp = "";
    $a = mysqli_query($conn, "SELECT * FROM tbl_alumni WHERE id_generation='$id' AND profession IS NOT NULL");
    $b = mysqli_query($conn, "SELECT * FROM tbl_alumni WHERE id_generation='$id' AND profession IS NULL");
    $working = mysqli_num_rows($a);
    $not_working = mysqli_num_rows($b);
    $tmp = '<p>Working: '.$working.'</p>';
    $tmp .= '<p>Not yet working: '.$not_working.'</p>';
    return $tmp;
}

function get_absensi($id) {
    include "connection.php";
    $date_now = date('Y-m-d');
    $absensi = mysqli_query($conn, "SELECT * FROM tbl_absensi WHERE created_at LIKE '%$date_now%' AND id_pegawai='$id'");
    $count = mysqli_num_rows($absensi);
    if ($count > 0) {
        return mysqli_fetch_array($absensi);
    }
    return false;
}

function check_user_login($username, $password) {
    include "connection.php";
    $sql = mysqli_query($conn, "SELECT * FROM tbl_login
                                WHERE BINARY username='$username' AND password='$password'");
    $count = mysqli_num_rows($sql);
    if ($count > 0) {
        return mysqli_fetch_array($sql)['id'];
    }
    return false;
}

function get_user_login($param) {
    include "connection.php";
    $id = encrypt_decrypt('decrypt', $_COOKIE['user_dashboard']);
    $sql = mysqli_query($conn, "SELECT * FROM tbl_login WHERE id=$id") or die (mysqli_error($conn));
    $count = mysqli_num_rows($sql);
    if ($count > 0) {
        return mysqli_fetch_array($sql)[$param];
    }
    return false;
}

function count_table($name) {
    include "connection.php";
    return mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $name WHERE deleted_at IS NULL"));
}

function date_ind($param){
    $month = array (1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	$split = explode('-', $param);
	return $split[2] . ' ' . $month[ (int)$split[1] ] . ' ' . $split[0];
}

function month_ind($param) {
    $month = [
        "01" => "Januari",
        "02" => "Februari",
        "03" => "Maret",
        "04" => "April",
        "05" => "Mei",
        "06" => "Juni",
        "07" => "Juli",
        "08" => "Agustus",
        "09" => "September",
        "10" => "Oktober",
        "11" => "November",
        "12" => "Desember"
    ];
    return $month[$param];
}

function full_date_ind($param) {
    $day = [
        "Sun" => "Minggu",
        "Mon" => "Senin",
        "Tue" => "Selasa",
        "Wed" => "Rabu",
        "Thu" => "Kamis",
        "Fri" => "Jumat",
        "Sat" => "Sabtu"
    ];
    $month = array (1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	$split = explode('-', $param);
    return $day[$split[0]].', '.$split[1] . ' ' . $month[(int)$split[2]] . ' ' . $split[3];
}


function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'xxxxxxxxxxxxxxxxxxxxxxxx';
    $secret_iv = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
    $key = hash('sha256', $secret_key);    
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

function label_status($param) {
    $tmp = [
        "PP" => '<span class="badge badge-info">Permohonan Persetujuan <i class="fa fa-spinner fa-spin"></i></span>',
        "D" => '<span class="badge badge-success">Disetujui</span>',
    ];
    return $tmp[$param];
}


function history_arsip_invoice($param) {
    include "connection.php";
    $tmp = "";
    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM invoices WHERE id='$param'"));
    if ($data['invoice_number_rev']) {
        $get = json_decode($data['invoice_log_data'], true);
        $tmp = '<ol style="padding: 0;margin: 0 0 0 15px;">';
        $tmp .='<li><p style="padding:0;margin:0;">'.$data['id'].' - '.date('d/M/Y', strtotime($get['updated_at'])).'<a href="?page=invoiceprint&id='.$data['id'].'&type=L" class="btn btn-primary  m-1"><i class="fa fa-print"></i> print</a></p></li>';
        $tmp .='<li><p style="padding:0;margin:0;">REV.'.$data['id'].' - '.date('d/M/Y', strtotime($data['updated_at'])).' <span class="badge badge-danger">new <i class="fa fa-star"></i></span> <a href="?page=invoiceprint&id='.$data['id'].'&type=T" class="btn btn-primary  m-1"><i class="fa fa-print"></i> print</a></p></li>';
        $tmp .= '</ol>';
    } else {
        $tmp = '<ol style="padding: 0;margin: 0 0 0 15px;">';
        $tmp .='<li><p style="padding:0;margin:0;">'.$data['id'].' - '.date('d/M/Y', strtotime($data['updated_at'])).'<a href="?page=invoiceprint&id='.$data['id'].'&type=T"><i class="fa fa-print"></i> print</a></p></li>';
        $tmp .= '</ol>';
    }
    return $tmp;
}

?>
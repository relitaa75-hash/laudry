<?php
include '../koneksi.php';

// menangkap data yang dikirim dari form
$pelanggan = $_POST['pelanggan'];
$berat     = $_POST['berat'];
$tgl_selesai = $_POST['tgl_selesai'];

// menghitung tanggal sekarang
$tgl_hari_ini = date('Y-m-d');

// menghitung total harga
// ambil data harga per kilo dari tabel harga
$harga = mysqli_query($koneksi, "select harga_per_kilo from harga");
$h = mysqli_fetch_assoc($harga);
$harga_per_kilo = $h['harga_per_kilo'];

// menghitung total bayar
$total = $berat * $harga_per_kilo;

// simpan data ke tabel transaksi
mysqli_query($koneksi, "insert into transaksi values(NULL, '$tgl_hari_ini', '$pelanggan', '$berat', '$tgl_selesai', '$total', '0')");

// ambil id transaksi terakhir
$id_terakhir = mysqli_insert_id($koneksi);

// simpan data pakaian ke tabel pakaian
for($x=1; $x<=10; $x++){
    $jenis_pakaian = $_POST['jenis_pakaian'.$x];
    $jumlah_pakaian = $_POST['jumlah_pakaian'.$x];

    if($jenis_pakaian != ""){
        mysqli_query($koneksi, "insert into pakaian values('', '$id_terakhir', '$jenis_pakaian', '$jumlah_pakaian')");
    }
}

header("location:transaksi.php");
?>
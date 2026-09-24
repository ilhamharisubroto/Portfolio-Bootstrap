<?php

// <<< 1. HUBUNGKAN DENGAN DATABASE
include "koneksi.php";


// <<< 2. AMBIL DATA DARI FORM
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];


// <<< 3. SIAPKAN QUERY INSERT
$stmt = mysqli_prepare(
    $koneksi,
    "INSERT INTO contacts (nama, email, pesan) VALUES (?, ?, ?)"
);


// <<< 4. MASUKKAN DATA FORM KE QUERY
mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $nama,
    $email,
    $pesan
);


// <<< 5. JALANKAN QUERY
mysqli_stmt_execute($stmt);


// <<< 6. KEMBALI KE INDEX.PHP
header("Location: index.php#contact");

exit;

?>
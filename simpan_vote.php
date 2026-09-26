<?php

// <<< 1. HUBUNGKAN KE DATABASE
include "koneksi.php";


// <<< 2. AMBIL DATA DARI FORM
$skill_id = $_POST['skill_id'];
$rating = $_POST['rating'];


// <<< 3. SIMPAN VOTING KE DATABASE
$query = mysqli_query(
    $koneksi,
    "INSERT INTO skill_votes (skill_id, rating)
     VALUES ('$skill_id', '$rating')"
);


// <<< 4. KEMBALI KE HALAMAN UTAMA
header("Location: index.php#about");

exit;

?>
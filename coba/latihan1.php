<?php
// $mahasiswa = [
//         "nama" => "antoni",
//         "kelas" => "TIC",
//         "umur" => 22
//     ];

// echo json_encode($mahasiswa);

$conn = mysqli_connect('localhost','root','','perpus');

$result = mysqli_query($conn,'SELECT * FROM anggota');

$siswa = mysqli_fetch_assoc($result);

echo json_encode($siswa);
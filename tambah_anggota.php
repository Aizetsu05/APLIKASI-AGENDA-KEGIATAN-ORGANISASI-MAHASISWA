<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

$input = mysqli_query($koneksi, "INSERT INTO anggota (nim, nama, jabatan) 
VALUES ('$nim', '$nama', '$jabatan')") or die(mysqli_error($koneksi)
);

if ($input) {
    echo "<script>
        alert('Data anggota Berhasil Disimpan');
        window.location.href = 'anggota.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal Menyimpan Data ');anggota
        window.location.href = 'anggota.php';
    </script>";
}
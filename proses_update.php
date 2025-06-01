<?php
include 'koneksi.php';

$id = $_POST['id_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$prodi = $_POST['prodi_mahasiswa'];
$semester = $_POST['semester_mahasiswa'];

$sql = "UPDATE tb_mahasiswa 
        SET nama_mahasiswa = '$nama', 
            prodi_mahasiswa = '$prodi', 
            semester_mahasiswa = '$semester' 
        WHERE id_mahasiswa = $id";

if (mysqli_query($connection, $sql)) {
    echo "Data berhasil diperbarui. <a href='index.php'>Kembali</a>";
} else {
    echo "Gagal update data: " . mysqli_error($connection);
}

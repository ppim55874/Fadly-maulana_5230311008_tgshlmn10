<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Jalankan query delete
    $sql = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = $id";
    
    if (mysqli_query($connection, $sql)) {
        echo "Data dengan ID $id berhasil dihapus. <br><a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($connection);
    }
} else {
    echo "ID tidak ditemukan dalam request.";
}
?>

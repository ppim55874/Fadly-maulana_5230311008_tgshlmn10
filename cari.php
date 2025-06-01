<?php
include 'koneksi.php';

$nama_mahasiswa = $_POST['cari_mahasiswa'];
$sql = "SELECT * FROM tb_mahasiswa WHERE nama_mahasiswa LIKE '%$nama_mahasiswa%'";
$hasil = mysqli_query($connection, $sql);

if (mysqli_num_rows($hasil) > 0) {
    echo "<h1>Hasil Pencarian</h1>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "Nama Mahasiswa: " . htmlspecialchars($data['nama_mahasiswa']) . "<br>";
        echo "Jurusan: " . htmlspecialchars($data['prodi_mahasiswa']) . "<br>";
        echo "Semester: " . htmlspecialchars($data['semester_mahasiswa']) . "<br>";

        // Tombol Update dan Delete
        echo "
        <a href='form_update.php?id=" . $data['id_mahasiswa'] . "'>Update</a> |
        <a href='delete.php?id=" . $data['id_mahasiswa'] . "' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Delete</a>
        <br><br>
        ";
    }
} else {
    echo "Tidak ada data yang ditemukan untuk nama mahasiswa: <strong>" . htmlspecialchars($nama_mahasiswa) . "</strong>";
}
echo "<br><a href='index.php'>Kembali ke halaman utama</a>";
?>

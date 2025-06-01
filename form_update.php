<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = $id");
    $data = mysqli_fetch_array($query);
}
?>

<h2>Update Data Mahasiswa</h2>
<form action="proses_update.php" method="post">
    <input type="hidden" name="id_mahasiswa" value="<?= $data['id_mahasiswa'] ?>">

    <label>Nama Mahasiswa</label><br>
    <input type="text" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa'] ?>" required><br><br>

    <label>Jurusan</label><br>
    <input type="text" name="prodi_mahasiswa" value="<?= $data['prodi_mahasiswa'] ?>" required><br><br>

    <label>Semester</label><br>
    <input type="number" name="semester_mahasiswa" value="<?= $data['semester_mahasiswa'] ?>" required><br><br>

    <input type="submit" value="Update Data">
</form>

<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = $id");
    $data = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Hubungkan CSS -->
</head>
<body>

<div class="update-form-container">
    <h2>Update Data Mahasiswa</h2>
    <form action="proses_update.php" method="post">
        <input type="hidden" name="id_mahasiswa" value="<?= $data['id_mahasiswa'] ?>">

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa'] ?>" required>

        <label>Jurusan</label>
        <input type="text" name="prodi_mahasiswa" value="<?= $data['prodi_mahasiswa'] ?>" required>

        <label>Semester</label>
        <input type="number" name="semester_mahasiswa" value="<?= $data['semester_mahasiswa'] ?>" required>

        <input type="submit" value="Update Data">
    </form>
</div>

</body>
</html>

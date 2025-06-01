<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    include 'koneksi.php';
    $hasil = mysqli_query($connection, "SELECT * FROM tb_mahasiswa");

    echo "<div class='center-box'>";
    echo "<h1>DATA MAHASISWA</h1>";

    while ($data = mysqli_fetch_array($hasil)) {
        echo "<div class='result-box'>";
        echo "<strong>Nama Mahasiswa:</strong> " . htmlspecialchars($data['nama_mahasiswa']) . "<br>";
        echo "<strong>Jurusan:</strong> " . htmlspecialchars($data['prodi_mahasiswa']) . "<br>";
        echo "<strong>Semester:</strong> " . htmlspecialchars($data['semester_mahasiswa']) . "<br>";
        echo "</div>";
    }

    echo "</div>";
?>

<h2>TAMBAH DATA MAHASISWA</h2>
<form action="tambah.php" method="post">
    <label for="nama_mahasiswa">Nama Mahasiswa</label>
    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" required>

    <label for="prodi_mahasiswa">Jurusan</label>
    <input type="text" id="prodi_mahasiswa" name="prodi_mahasiswa" required>

    <label for="semester_mahasiswa">Semester</label>
    <input type="text" id="semester_mahasiswa" name="semester_mahasiswa" required>

    <input type="submit" value="Tambah Data">
    <input type="reset" value="Reset">
</form>

<h2>CARI DATA MAHASISWA</h2>
<form action="cari.php" method="post">
    <label for="cari_mahasiswa">Nama Mahasiswa</label>
    <input type="text" id="cari_mahasiswa" name="cari_mahasiswa" required>
    
    <input type="submit" value="Cari Data">
    <input type="reset" value="Reset">
</form>

</body>
</html>

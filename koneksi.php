
<?php
$connection = mysqli_connect("localhost", "root", "", "kuliah");

if (!$connection) {
    echo ("Connection failed: " . mysqli_connect_error());
} 


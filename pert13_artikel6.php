<?php 
$connection = mysqli_connect("localhost", "root", "", "artikel_db");

$id = $_GET['id'];
 
$perintah = "DELETE FROM articles WHERE id = '$id'"; 
$hasil= mysqli_query ($connection, $perintah); 
if ($hasil) { 
echo "Artikel berhasil dihapus<br>"; 
 echo "<a href=\"pert13_artikel3.php\">Back</a>"; 
} else { 
 echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi 
 ke database MySQL."; 
 } 
?>

<?php
$connection = mysqli_connect("localhost", "root", "", "artikel_db");  
$id = $_POST['id'];
$judul = $_POST['title']; 
$penulis = $_POST['author']; 
$lead = $_POST['abstraksi']; 
$isi = $_POST['content']; 
$time = date("d M Y, H:i"); 

$update = "UPDATE articles SET judul='$judul', penulis='$penulis', 
lead='$lead', 
content='$isi', waktu='$time' WHERE id ='$id'"; 
$hasil=mysqli_query($connection,$update); 
if ($hasil) { 
 echo "Artikel berhasil di update<br>"; 
 echo "<a href=\"pert13_artikel3.php\">List</a>"; 
} else { 
 echo "Artikel gagal di update"; 
} 
?>

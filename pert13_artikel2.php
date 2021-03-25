<?php
$connection = mysqli_connect("localhost", "root", "", "artikel_db");

$id = $_POST['id'];
$judul= $_POST['title']; 
$penulis = $_POST['author']; 
$lead = $_POST['abstraksi']; 
$isi = $_POST['content']; 
$time=date("d M Y, H:i"); 


$query = "INSERT INTO articles (id,judul,penulis,lead,content,waktu) 
 values('$id','$judul','$penulis','$lead','$isi','$time')"; 
$result = mysqli_query($connection, $query); 

if($result){ 
 echo "<h3 align=center>Proses penambahan artikel berhasil</h3>"; 
 echo "<A href=\"pert13_artikel3.php\">List</A>"; 
}else{ 
 echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>"; 
} 
?> 

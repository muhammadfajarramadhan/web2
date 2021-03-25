<?php 
$con = mysqli_connect("localhost","root","","lat_dbase"); 
if (!$con) 
 { 
 die('Could not connect: ' . mysql_error()); 
 }
$proses = "UPDATE tbl_mhs SET Age = '36' 
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'"; 
$hasil = mysqli_query($con, $proses);
mysqli_close($con); 

echo "Data Berhasil Diperbarui";
?> 

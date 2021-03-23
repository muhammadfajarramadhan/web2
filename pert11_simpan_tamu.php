<html>
<head>
<title>Simpan Data</title>
</head>
<body>
<?php
$id = $_POST['id'];
$nama = $_POST['name'];
$email = $_POST['email'];
$alm = $_POST['alamat'];
$kota = $_POST['kota'];
$msg = $_POST['msg'];
$koneksi = mysqli_connect("localhost","root","","buku_tamu");
$proses = "INSERT INTO tamu(ID,Nama,Email,Alamat,Kota,Pesan)
VALUES('$id','$nama','$email','$alm','$kota','$msg')";
$hasil = mysqli_query($koneksi,$proses);
echo "<font color = red size = 5>Buku Tamu BERHASIL Diisi</font>";
?>
<br>
<a href="tampil_tamu.php"><h3>Lihat Buku Tamu</h3></a>
</body>
</html>

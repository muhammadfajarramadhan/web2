
Sign up
TaofikHidayat
/
Web2
 0 stars  0 forks
Code
Issues
Pull requests
More
Web2/pert11_tampil_tamu.php /
@TaofikHidayat
TaofikHidayat Add files via upload
 1 contributor
29 lines (29 sloc)  655 Bytes
 
<html>
<head>
<title>BUKU TAMU</title>
</head>
<body>
<pre>
<h1>BUKU TAMU</h1>
<a href = "form_tamu.php"> <– Kembali ke Form Buku Tamu</a>
<hr size = 1>
<?php
$koneksi = mysqli_connect("localhost","root","","buku_tamu");
$sql = mysqli_query($koneksi, "SELECT * FROM tamu");
while($data = mysqli_fetch_array($sql))
{
$id = $data['ID'];
$name = $data['Nama'];
$email = $data['Email'];
$alm = $data['Alamat'];
$city = $data['Kota'];
$msg = $data['Pesan'];
echo "No     : $id<br>";
echo "Nama   : $name<br>";
echo "E-Mail : $email<br>";
echo "Alamat : $alm, $city<br>";
echo "Pesan  : $msg<br><hr size = 1>";
}
?>
</body>
</html>

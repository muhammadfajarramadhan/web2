<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
<!-- <Menentukan Form Input> -->
<form method="POST" action="">
Masukkan Bilangan Pertama : <br>
<input type="text" name="A" size=10><br>
Masukkan Bilangan Kedua : <br>
<input type="text" name="B" size=10><br>
<input type="submit" value="hitung">
</form>
</body>
</html>
<!-- <!membandingkan 2 buah bilangan yang diinput> -->

<?php
 $A=$_POST["A"] ? $_POST['A'] : 0;
 $B=$_POST["B"] ? $_POST["B"] : 0;
 function jumlah($A,$B)
 {
 $jumlahbil=$A + $B;
 return $jumlahbil;
 }
 function kurang($A,$B)
 {
 $kurangbil=$A - $B;
 return $kurangbil;
 }
 function kali($A,$B)
 {
 $kalibil=$A * $B;
 return $kalibil;
 }
 function bagi($A,$B)
 {
 $bagibil=$A / $B;
 return $bagibil;
 }
echo "<br>";
echo ("Bilangan Pertama : ");
echo $A;
echo "<br>";
echo ("Bilangan Kedua : ");
echo $B;
echo "<br><br>";
echo "Hasil Penjumlahan 2 buah bilangan ";
echo "<br>";
$jumlahbil=jumlah($A,$B);
Printf( "Penjumlahan antara : %d + %d = %d ",$A,$B,$jumlahbil);
echo "<br><br>";
echo "Hasil Pengurangan 2 buah bilangan ";
echo "<br>";
$kurangbil=kurang($A,$B);
Printf( "Pengurangan antara : %d - %d = %d ",$A,$B,$kurangbil);
echo "<br><br>";
echo "Hasil Perkalian 2 buah bilangan ";
echo "<br>";
$kalibil=kali($A,$B);
Printf( "Perkalian antara : %d * %d = %d ", $A, $B, $kalibil);
echo "<br><br>";
echo "Hasil Pembagian 2 buah bilangan ";
echo "<br>";
$bagibil=bagi($A,$B);
Printf( "Pembagian antara : %d / %d = %d ",$A,$B,$bagibil);
echo "<br><br>";
?>

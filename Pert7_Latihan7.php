<HTML>
<HEAD>
	<TITLE> Penggunaan Split </TITLE>
</HEAD>
<BODY>
	<?php
	$tanggal = "17-05-2010";
	list ($hari, $bulan, $tahun) = mb_split("-", $tanggal);
	echo "Hari = $hari";
	echo "<br />";
	echo "Bulan = $bulan";
	echo "<br />";
	echo "Tahun = $tahun";
	?>
</BODY>
</HTML>

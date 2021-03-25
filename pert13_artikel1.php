<?php
include "koneksi.php"; 
?> 

<h1>Form Berita</h1> 
<form name = "article" method = "post" action = "pert13_artikel2.php"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0"> 
<tr>
<td>ID</td>
<td>:</td>
<td><input type = "text" name = "id" size = "30"></td>
</tr>

<tr> 
<td width="18%"><br>Judul</td> 
<td width="2%">:</td> 
<td width="80%"><input type="text" name="title" size="30" 
class="masukan"></td> 
</tr>

<tr> 
<td><br>Penulis</td> 
<td>:</td> 
<td><input type="text" name="author" size="30" class="masukan"></td> 
</tr> 

<tr>
<td><br>Lead</td> 
<td>:</td> 
<td><textarea name="abstraksi" rows="4" cols="45"></textarea></td> 
</tr> 

<tr> 
<td><br>Content</td> 
<td>:</td> 
<td><br><textarea name="content" rows="8" cols="45" ></textarea></td> 
</tr> 

<tr> 
<td>&nbsp;</td> 
<td>&nbsp;</td> 
<td>&nbsp;</td> 
</tr> 

<tr> 
<td>&nbsp;</td> 
<td>&nbsp;</td> 
<td><input type="submit" name="Submit" value="Add" class="tombol"> 
<input type="reset" name="batal" value="Reset" class="tombol"></td> 
</tr> 
</table> 
</form>

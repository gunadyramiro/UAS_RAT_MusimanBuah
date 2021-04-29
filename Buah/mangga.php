<?php include'/storage/ssd5/917/16707917/public_html/header.php';


$q = mysqli_query($conn, "select * from buah where Nama='Mangga'");

while($w = mysqli_fetch_array($q)){
	$id = $w['ID'];
	$nama = $w['Nama'];
	$harga = $w['Harga'];
	$detail	= $w['Detail'];
	$gambar	= $w['Gambar'];

	echo "
  <h1>$nama</h1>
	<table  bgcolor=#ddddddddd;>
 <tr>
 </tr>
 <tr>
	<td rowspan=4> <img src='Gambar/$gambar' width=450px; height='400px';></td>
  	<td>Harga</td>
 </tr>
<tr>
	<td> $harga per buah</td>
</tr>
 <tr>
  <td>Deskripsi</td>
  <tr>
   <td>$detail</td>
  </tr>
 
</tr>
 

	


</table>
";}
include'/storage/ssd5/917/16707917/public_html/footer.php';?>
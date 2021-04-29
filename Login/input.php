<?php
 include "connection.php";
 
?>
<html>
<head>
<script language="javascript">
 function tanya(){
	if(confirm("apakah anda yakin untuk memodifikasi data ini?")){
		return true;
	}else{
		return false;
	}
}
</script>
<title></title>
</head>
<body>

<form action="upload.php" method="POST" name="form-upload-file" enctype="multipart/form-data">

<table>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<tr>
<td><label>No Kartu Keluarga : * </label></td>
<td><input type="area" name="nama"></td>
</tr>

<tr>
<td><label>Email/Nomor Telepon</label></td>
<td><input type="area" name="harga"></td>
</tr>

<tr>
<td><label>Tes PCR(+/-), Suhu Peserta</label></td>
<td><input type="area" name="detail"></td>
</tr>

<tr height="36">
		<td>Foto Selfie dengan KTP : *</td>
		<td><input type="file" name="nama_file" size="50"/></td>
    </tr>
	<td><button type="Submit" name="Submit" value="Submit">Submit</button>&nbsp;&nbsp;&nbsp;


</form>



<tr>
</tr>
</table>
</form>

<label>List Peserta</label>

<table border="1">
<tr>
<th>No Kartu Keluarga</th>
<th>Email/Nomor Telepon</th>
<th>Tes PCR(+/-), Suhu Peserta</th>
<th>Foto Selfie dengan KTP</th>
<th>Pengisi Data</th>

</tr>

<?php

$q = mysqli_query($conn, "select * from buah");

while($w = mysqli_fetch_array($q)){
	$id = $w['ID'];
	$nama = $w['Nama'];
	$harga = $w['Harga'];
	$detail	= $w['Detail'];
	$gambar	= $w['Gambar'];

	echo "<tr>
	<td>$id</td>
	<td>$nama</td>
	<td>$harga</td>
	<td>$detail</td>
	<td> <img src='/TugasAkhir/Login/Gambar/$gambar' width=200px; height='200px';></td>

	<td> <a href='edit.php?id=$id'><div onClick='return tanya()'> Edit </a> <a href='hapus.php?id=$id'> <div onClick='return tanya()'>  Hapus </div></a>   </td>
	</tr>";
	

}
?>



</table>
</body>
</html>
<?php 
include "connection.php";
$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM buah WHERE ID='$id'");

while($hasil = mysqli_fetch_assoc($data))
{
	$id = $hasil['ID'];
	$nama = $hasil['Nama'];
	$harga = $hasil['Harga'];
	$detail = $hasil['Detail'];
	$gambar = $hasil['Gambar'];

?>
<h1>Form Edit </h1> 
<p>
<form action="upload.php" method="POST" name="form-upload-file" enctype="multipart/form-data">

<table>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<tr>
<td><label>No Kartu Keluarga : * </label></td>
<td><input type="area" name="nama"></td>
</tr>

<tr>
<td><label>Email/Nomor Telepon : *</label></td>
<td><input type="area" name="harga"></td>
</tr>

<tr>
<td><label>Tes PCR(+/-), Suhu Peserta : *</label></td>
<td><input type="area" name="detail"></td>
</tr>

<tr height="36">
		<td>Foto Selfie dengan KTP : *</td>
		<td><input type="file" name="nama_file" size="50"/></td>
    </tr>
	<td><button type="Submit" name="Submit" value="Submit">Submit</button>&nbsp;&nbsp;&nbsp;


</form>


</p>
<?php
if(isset($_POST['inputdata'])){
	
	$nama	= $_POST['nama'];
	$harga	= $_POST['harga'];
	$detail	= $_POST['detail'];
	$nama_file	= $_FILES['nama_file']['name'];
	
	
	
	$inputdata = mysqli_query($conn, "UPDATE buah SET Nama='$nama', Harga='$harga', Detail='$detail', Gambar='$nama_file' WHERE ID='$id'"  );
	
	if($inputdata){
		echo "data berhasil disimpan";
	header("Location: index.php");
	}else{
		echo "data gagal disimpan";
	}
	
}

}
?>

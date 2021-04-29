<?php
if ($_POST['Submit'] == "Submit") {
	$nama	= $_POST['nama'];
	$harga	= $_POST['harga'];
	$detail	= $_POST['detail'];
	$nama_file	= $_FILES['nama_file']['name'];
	
	//Cek File
		if (strlen($nama_file)>0) {
			//upload Photo
			if (is_uploaded_file($_FILES['nama_file']['tmp_name'])) {
				move_uploaded_file ($_FILES['nama_file']['tmp_name'], "Gambar/".$nama_file);
			}
		}
		
	include "connection.php";
	$input	="INSERT INTO buah (Nama, Harga, Detail, Gambar) VALUES ('$nama','$harga', '$detail', '$nama_file')";
	$query_input =mysqli_query($conn, $input);
	if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Upload File Gambar Berhasil!');
				document.location='index.php';
				</script>
		<?php
	}
	else {
	//Jika Gagal
	echo "Upload File Gambar Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
}
?>

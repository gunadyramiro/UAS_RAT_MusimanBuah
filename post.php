<?php
  include "connect.php";
  $name  = $_REQUEST['name'];
  $harga  = $_REQUEST['harga'];
  $detail = $_REQUEST['detail'];
  $gambar = $_REQUEST['gambar'];
  
  $mysqli  = "INSERT INTO buah (Nama, Harga, Detail, Gambar) VALUES ('$name', '$harga', '$detail', '$gambar')";
  if (mysqli_query($conn, $mysqli)) {
    echo "Input berhasil";
	header("Location: index.php");
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>

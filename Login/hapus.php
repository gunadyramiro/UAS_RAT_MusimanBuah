<?php
include "connection.php";
$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM buah WHERE ID='$id'");
if($hapus){
	echo "delete successful";
	header("Location: index.php");
}else{
	echo "delete failed";
}

?>

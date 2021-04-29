<?php include 'header.php';?>


 

<div class="w3-container w3-white w3-padding-32">
  <!-- Product grid -->
  
  <!--<?php

$q = mysqli_query($conn, "select * from buah");

while($w = mysqli_fetch_array($q)){
	$id = $w['ID'];
	$nama = $w['Nama'];
	$harga = $w['Harga'];
	$detail = $w['Detail'];
	$gambar = $w['Gambar'];
	
	echo '
<div class="w3-col 13 s6"  style="width: 30%;">  
<img  src="https://musimanbuah.000webhostapp.com/Buah/Gambar/';?><?php echo $gambar?> <?php echo'"  style="height:136px; width:205px">
        <p>';?><?php echo $nama;?><?php echo '<br><b class="w3-text-black">';?> <?php echo  $harga;?> <?php echo  ' per buah</b></p>
		</div>
		
		
		
      
	  
	  
	 ';}?>
</div>
<?php include'footer.php';?>

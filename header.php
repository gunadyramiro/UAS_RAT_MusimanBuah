<!DOCTYPE html>
<?php
 include "connect.php";
 
?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
h1{  
  font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;
}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><a href ="https://musimanbuah.000webhostapp.com/index.php"<b>LOGO</b></s></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="https://musimanbuah.000webhostapp.com/index.php" class="w3-bar-item w3-button">Beranda</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Buah <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="https://musimanbuah.000webhostapp.com/Buah/durian.php" class="w3-bar-item w3-button">Durian</a>
      <a href="https://musimanbuah.000webhostapp.com/Buah/pepaya.php" class="w3-bar-item w3-button">Pepaya</a>
      <a href="https://musimanbuah.000webhostapp.com/Buah/mangga.php" class="w3-bar-item w3-button">Mangga</a>
      <a href="https://musimanbuah.000webhostapp.com/Buah/manggis.php" class="w3-bar-item w3-button">Manggis</a>
      <a href="https://musimanbuah.000webhostapp.com/Buah/salak.php" class="w3-bar-item w3-button">Salak</a>
	  <a href="https://musimanbuah.000webhostapp.com/Buah/sirsak.php" class="w3-bar-item w3-button">Sirsak</a>
    </div>
   
    <a href="https://musimanbuah.000webhostapp.com/news.php" class="w3-bar-item w3-button">Berita</a>
   <a href="https://musimanbuah.000webhostapp.com/kalender.php" class="w3-bar-item w3-button">Kalender</a>
  <a href="https://musimanbuah.000webhostapp.com/pertanyaan.php" class="w3-bar-item w3-button">Pertanyaan</a>
    <a href="https://musimanbuah.000webhostapp.com/infarm.php" class="w3-bar-item w3-button">inFarm</a>
    <a href="https://musimanbuah.000webhostapp.com/Puzzle/npuzzle.php" class="w3-bar-item w3-button">Puzzle</a>
    <a href="https://musimanbuah.000webhostapp.com/tentang.php" class="w3-bar-item w3-button">Tentang Kami</a>
-->
  
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide"><a href= "https://musimanbuah.000webhostapp.com/Login">LOGO</a></div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Buah Musiman</p>
    
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="https://musimanbuah.000webhostapp.com/Login/Gambar/spanduk.jpg" alt="Jeans" style="width:100%">
    
  </div>
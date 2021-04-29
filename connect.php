<?php
$conn = mysqli_connect("localhost", "id16707917_musimbuah", "Musimanbuah1234-","id16707917_musim");
if(!$conn)
{
    echo"not connected to db recheck the details";
}else
    echo"DB OK";
?>
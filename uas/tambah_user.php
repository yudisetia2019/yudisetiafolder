<?php

//$con=mysqli_connect("localhost","root","","proyekuas");
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];

//$input=mysqli_query($con,"INSERT INTO user(id_user,nama_user) VALUES ('$id','$nama')");
$sql="INSERT INTO user(id_user,nama_user) VALUES ('$id','$nama')";


if(mysql_query($sql))
{
	echo'<script language="Javascript">alert("berhasil");document.location="user.php"</script>';

}
else{
	echo'<script language="Javascript">alert("gagal");document.location="user.php"</script>';

}


?>


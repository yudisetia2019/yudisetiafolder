<?php
include "koneksi.php";

$id=$_POST['id'];
$kasir=$_POST['kasir'];
$nasabah=$_POST['nasabah'];
$rek_asal=$_POST['rek_asal'];
$nominal=$_POST['nominal'];
$rek_tujuan=$_POST['rek_tujuan'];
$beban=$_POST['beban'];


$sql="INSERT INTO transfer(id_transfer,tanggal,id_user,id_nasabah) VALUES ('$id','today()','$kasir','$nasabah')";


$sql2="INSERT INTO detail_transfer(id_transfer,rek_asal,rek_tujuan,jml_transfer,beban) VALUES ('$id','$rek_asal','$rek_tujuan','$nominal','$beban')";

if((mysql_query($sql)) AND (mysql_query($sql2)))
{
	echo'<script language="Javascript">alert("berhasil");document.location="transfer.php"</script>';

}
else{
	echo'<script language="Javascript">alert("gagal");document.location="transfer.php"</script>';

}


?>

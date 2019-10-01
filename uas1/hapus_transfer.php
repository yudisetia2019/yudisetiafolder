<?php
include('koneksi.php');
$id	= $_GET['id'];

//$sql 	= 'delete from user where id_user="'.$id.'"';
$sql="DELETE from transfer where id_transfer='$id'";
if(mysql_query($sql))
{
	echo'<script language="Javascript">alert("berhasil");document.location="transfer.php"</script>';

}
else{
	echo'<script language="Javascript">alert("gagal");document.location="transfer.php"</script>';

}
?>
<?php

$con=mysqli_connect("localhost","root","","datatransaksi");
$Tanggal=$_POST['tanggal'];
$No_Referensi=$_POST['id_referensi'];
$Nama=$_POST['nama'];
$No_Telephone=$_POST['notelepon'];
$No_Rekening=$_POST['id_rekening'];
$Bank_Transfer=$_POST['bank'];
$Jumlah_Transfer=$_POST['jumlah'];
$Admin=$_POST['admin'];
$Kurs=$_POST['kurs'];
$Beban_Transfer=$_POST['bebantransfer'];

$input=mysqli_query($con,"INSERT INTO nasabah(bank, id_rekening,nama, notelepon) VALUES ('$Bank_Transfer','$No_Rekening','$Nama','$No_Telephone')");

$input=mysqli_query($con,"INSERT INTO oprasional(id_referensi,admin,kurs,bebantransfer) VALUES ('$No_Referensi','$Admin','$No_Rekening','$Beban_Transfer')");

$inpu=mysqli_query($con,"INSERT INTO transaksi(tanggal,id_referensi,id_rekening,jumlah) VALUES ('$Tanggal','$No_Referensi','$No_Rekening','$Jumlah_Transfer')");

echo'<script language="Javascript">alert("Data Tersimpan");document.location="index.php"</script>';

?>


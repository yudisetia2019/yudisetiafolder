<?php
$con=mysqli_connect("localhost","root","","basisdata2");
if (mysqli_connect_errno())
{
  echo "Gagal tersambung dengan database : " . mysqli_connect_error();
}
?>
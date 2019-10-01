

<body>

<h2>Masukan Data Transaksi</h2>
<?php include "koneksi.php"; ?>
<form action="tambah_transfer.php" method="post">
   id transfer:
   <input type="text" name="id" value="">
   <br><br>
   Kasir :
   <select name="kasir">
      <option selected="selected"  value="0">pilih Kasir</option>
         <?php $user=mysql_query("SELECT * FROM user");
      while ($r=mysql_fetch_array($user)){?>
       <option value="<?php echo "$r[id_user]";  ?>"><?php echo "$r[nama_user]";  ?></option>
     <?php }  ?>
   </select>

    <br><br>
   Nasabah :
   <select name="nasabah">
      <option selected="selected"  value="0">pilih Nasabah</option>
         <?php $nasabah=mysql_query("SELECT * FROM nasabah");
      while ($n=mysql_fetch_array($nasabah)){?>
       <option value="<?php echo "$n[id_nasabah]";  ?>"><?php echo "$n[nama_nasabah]";  ?></option>
     <?php }  ?>
   </select>
   
   
   <br><br>

  rekening asal :<br>
   <input type="text" name="rek_asal" value="">
  
   <br><br>

   nominal :<br>
   <input type="text" name="nominal" value="">
  
   <br><br>

   rekening tujuan :<br>
   <input type="text" name="rek_tujuan" value="">
  
   <br><br>

   beban :<br>
   <input type="text" name="beban" value="">
  
   <br><br>
   <button name="simpan">Simpan</button>
   </form>

   </body>

    <input type='button' value="History Transfer" onclick="<?php echo"document.location='history_transfer.php'";?>"> <?php //"history_user.php = harus dibuat dulu    ?>
 <?php



   include "koneksi.php";
$query = mysql_query("SELECT * FROM transfer");

 ?>
 <form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Id_Transfer</th>
           
            <th>Id_Nasabah</th>
            <th>Action</th>
        </tr>
        <?php if(mysql_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysql_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["id_transfer"];?></td>     <?php //"id_user" = nama kolom di database     ?>
            <td><?php echo $data["id_nasabah"];?></td>
            <td>
               <a href="hapus_transfer.php?id=<?php echo $data['id_transfer'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a> |  <?php //"hapus__detail_transfer.php = harus dibuat dulu    ?>
                <a href="#">Edit</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
 

   
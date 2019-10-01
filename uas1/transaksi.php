

<body>

<h2>Masukan Data user</h2>
<?php include "koneksi.php"; ?>
<form action="tambah_transfer.php" method="post">
   id transfer:<br>
   <input type="text" name="id" value="">
   <br><br>
   Kasir : <br>
   <select name="kasir">
      <option selected="selected"  value="0">pilih Kasir</option>
         <?php $user=mysql_query("SELECT * FROM user");
      while ($r=mysql_fetch_array($user)){?>
       <option value="<?php echo "$r[id_user]";  ?>"><?php echo "$r[nama_user]";  ?></option>
     <?php }  ?>
   </select>

    <br><br>
   Nasabah : <br>
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
   <input type="text" name="jumlah" value="">
  
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
 

   
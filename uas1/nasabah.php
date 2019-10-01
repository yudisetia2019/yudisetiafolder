

<body>

<h2>Masukan Data Nasabah</h2>

<form action="tambah_nasabah.php" method="post">
   id nasabah:<br>
   <input type="text" name="id" value="">
   <br><br>
   
   Nama:<br>
   <input type="text" name="nama" value="">
   <br><br>

  no rekening:<br>
   <input type="text" name="rek" value="">
  
   <br><br>
   <button name="simpan">Simpan</button>


   </form>

   </body>
   <input type='button' value="History Nasabah" onclick="<?php echo"document.location='history_nasabah.php'";?>"> <?php //"history_nasabah.php = harus dibuat dulu    ?>

    <br><br> <br><br>
 <?php
 
 

   include "koneksi.php";
$query = mysql_query("SELECT * FROM nasabah");

 ?>
 <form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Id_Nasabah</th>
           
            <th>Nama_Nasabah</th>
            <th>Action</th>
        </tr>
        <?php if(mysql_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysql_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["id_nasabah"];?></td>     <?php //"id_user" = nama kolom di database     ?>
            <td><?php echo $data["nama_nasabah"];?></td>
            <td>
               <a href="hapus_nasabah.php?id=<?php echo $data['id_nasabah'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a> |  <?php //"hapus__detail_transfer.php = harus dibuat dulu    ?>
                <a href="#">Edit</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
 

   

   
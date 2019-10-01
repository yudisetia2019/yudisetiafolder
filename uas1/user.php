

<body>

<h2>Masukan Data user</h2>

<form action="tambah_user.php" method="post">
   id user:<br>
   <input type="text" name="id" value="">
   <br><br>
   
   Nama:<br>
   <input type="text" name="nama" value="">
  
   <br><br>
   <button name="simpan">Simpan</button>
   </form>

   </body>
   <input type='button' value="History User" onclick="<?php echo"document.location='history_user.php'";?>"> <?php //"history_user.php = harus dibuat dulu    ?> <br><br>
 <?php



   include "koneksi.php";
$query = mysql_query("SELECT * FROM user");

 ?>
 <form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama_User</th>
            <th>Action</th>
        </tr>
        <?php if(mysql_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysql_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["id_user"];?></td>     <?php //"id_user" = nama kolom di database     ?>
            <td><?php echo $data["nama_user"];?></td>
            <td>
               <a href="hapus_user.php?id=<?php echo $data['id_user'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a> |  <?php //"hapus_user.php = harus dibuat dulu    ?>
                <a href="#">Edit</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

   
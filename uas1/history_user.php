<?php



   include "koneksi.php";
$query = mysql_query("SELECT * FROM riwayat_user");

 ?>
 <form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Id_User</th>
            <th>Tanggal</th>
             <th>Oleh</th>
        </tr>
        <?php if(mysql_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysql_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["aksi"];?></td>
            <td><?php echo $data["id_user"];?></td>
            <td><?php echo $data["tgl"];?></td>
            <td><?php echo $data["oleh"];?></td>
           
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
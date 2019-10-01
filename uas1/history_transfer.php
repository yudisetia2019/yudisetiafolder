<?php



   include "koneksi.php";
$query = mysql_query("SELECT * FROM riwayat_transfer");

 ?>
 <form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aktifitas</th>
            <th>Id_transfer</th>
            <th>Waktu</th>
             <th>Oleh</th>
        </tr>
        <?php if(mysql_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysql_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["aktifitas"];?></td>
            <td><?php echo $data["id_transfer"];?></td>
            <td><?php echo $data["waktu"];?></td>
            <td><?php echo $data["oleh"];?></td>
           
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
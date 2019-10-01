
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
        <small> cv. mitra mandiri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?= $title ?></a></li>
        <li class="active">Logout</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Barang</th>
                  <th>Nama Barang</th>
                  <th>Merk Barang</th>
                  <th>Keterangan</th>
                  <th>Satuan</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach($transaksi as $a){ ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a->jenis_barang ?></td>
                        <td><?= $a->nama_barang ?></td>
                        <td><?= $a->merk_barang ?></td>
                        <td><?= $a->keterangan ?></td>
                        <td><?= $a->satuan ?></td>
                        <td><?= $a->jumlah ?></td>
                        <td>
                           <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i> Edit Data</a>
                           <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Data</a>
                        </td>
                     </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  
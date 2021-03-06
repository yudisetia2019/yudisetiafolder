
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
        <small> CV. Mitra Mandiri</small>
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
              <h3 class="box-title">Daftar pesanan yang telah anda pesan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-10">
              <div class="col-md-1">Instansi</div>
              <div class="col-md-5"><select style="width:40%" class="form-control"><option>Pilih Instansi</option></select>
              </div>
              <div class="col-md-1">Tanggal</div>
              <div class="col-md-5"><select style="width:40%" class="form-control"><option>Tanggal</option></select></div>
              </div>
              <div class="col-md-2">
                <div align="right">
                <button class= "btn  btn-primary"><i class="fa fa-download"></i></button> 
                <button class= "btn  btn-primary"><i class="fa fa-print"></i></button></div></div><br><br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>No Bukti</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Jumlah</th>
                  
                </tr>
                </thead>
                <tbody>
                 
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
  
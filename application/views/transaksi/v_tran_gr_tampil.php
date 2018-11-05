<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3>Data Goods Receipt</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="content">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="btn btn-default">
                  <i class="fa fa-file-excel-o"></i>
                </div>
                <?php if ($this->session->flashdata('sukses')) { ?>
                  <div id="alert" style="margin-top: 10px;" class="alert alert-success">
                    <?= $this->session->flashdata('sukses') ?> </div>
                <?php } ?>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="pe-7s-search"></i></button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="btn btn-info btn-fill">
                      <i class="fa fa-plus"></i>
                      <?php echo anchor('c_transaksi/gr_input', 'Tambah Data Goods Receipt', array('class' => 'btn-infoa')); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>ISBN</th>
                <th>Judul</th>
                <th>From</th>
                <th>To</th>
                <th>Transaction Date</th>
                <th>QTY</th>
              </thead>
              <tbody>
                <?php foreach($results as $gdrc){?>
                  <tr>
                    <td><?=$gdrc->isbn; ?></td>
                    <td><?=$gdrc->judul; ?></td>
                    <td><?=$gdrc->from; ?></td>
                    <td><?=$gdrc->to; ?></td>
                    <td><?=$gdrc->trandate; ?></td>
                    <td><?=$gdrc->qty; ?></td>
                    <!-- <td width="200" style="text-align: center;">
                      <div class="row">
                        <div class="btn btn-info">
                          <?php echo anchor('c_transaksi/gr_edit/'.$gdrc->isbn,'<i class="fa fa-edit"></i>'); ?>    
                        </div>
                        <div class="btn btn-danger">
                          <?php echo anchor('c_transaksi/gr_hapus/'.$gdrc->isbn,'<i class="fa fa-trash"></i>'); ?>        
                        </div>
                      </div>
                    </td> -->
                  </tr>
                <?php }?>
              </tbody>
            </table>
            <?php echo $links; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $("#alert").fadeTo(2000, 500).slideUp(500, function(){$("#alert").slideUp(500);});
  </script>
</body>

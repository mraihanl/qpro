<body>
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
        <h3>Data Warehouse</h3>
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
                   <div id="alert" class="alert alert-success">                   
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
                      <div class="btn btn-info btn-fill" style="float: right;">
                        <i class="fa fa-plus"></i>
                        <?php echo anchor('c_master/master_wrhs_input', 'Tambah Data Warehouse', array('class' => 'btn-infoa')); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
              <!-- <div class="header">
                  <h4 class="title">Master Inventory Buku</h4>
              </div> -->
              <div class="content table-responsive table-full-width">
                  <table class="table table-hover table-striped">
                      <thead>
                          <th>Code</th>
      										<th>Name</th>
      										<th>Area</th>
      										<th>Telp</th>
      										<th>Mail</th>
      										<th>Kontak</th>
      										<th>Alamat</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <?php foreach($wrhss as $wrhs){?>
                          <tr>
                              <td><?=$wrhs->code; ?></td>
                              <td><?=$wrhs->name; ?></td>
                              <td><?=$wrhs->area; ?></td>
                              <td><?=$wrhs->telp; ?></td>
                              <td><?=$wrhs->mail; ?></td>
                              <td><?=$wrhs->contact; ?></td>
                              <td><?=$wrhs->address; ?></td>
                              <td>
                                <div class="row">
                                  <div class="btn btn-info">
                                    <?php echo anchor('c_master/wrhs_edit/'.$wrhs->code,'<i class="fa fa-edit"></i>'); ?>
                                  </div>
                                  <div class="btn btn-danger">
                                    <i class="fa fa-trash" onclick="hapus(<?php echo $wrhs->code; ?>)"></i>
                                  </div>
                                </div>
                              </td>
                          </tr>
                          <?php }?>
                      </tbody>
                  </table>

              </div>
          </div>
      </div>
  </div>
</div>
<script type="text/javascript">
  function hapus(id){
     if (confirm("Hapus Data ?")) {
     window.location='<?php echo site_url('c_master/master_wrhs_hapus/'); ?>'+id;
     } else {
     alert('Hapus data dibatalkan');
     }
  } 

  $("#alert").fadeTo(2000, 500).slideUp(500, function(){$("#alert").slideUp(500);});            
</script>
</body>
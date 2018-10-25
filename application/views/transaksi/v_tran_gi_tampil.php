    <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h3>Data Good Issue</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn btn-default">
                                  <i class="fa fa-print"></i>
                                </div>
                                <div class="btn btn-default">
                                  <i class="fa fa-file-excel-o"></i>
                                </div>
                                <div class="btn btn-default">
                                  <i class="fa fa-filter"></i>
                                </div>                                
                                  <?php if ($this->session->flashdata('sukses')) { ?>
                                  <div class="alert alert-success alert-dismissible">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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
                                      <?php echo anchor('c_transaksi/gi_input', 'New Good Issue', array('class' => 'btn-infoa')); ?>
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
                                        <th>ISBN</th>
                    										<th>Judul</th>  
                                        <th>Warehouse</th>                  									
                    										<th>Trandate</th>
                    										<th>QTY</th>                    										
                    										
                                    </thead>
                                    <tbody>
                                      <?php foreach($results as $gi){?>
                                        <tr>
                                            <td><?=$gi->isbn; ?></td>
                                            <td><?=$gi->judul; ?></td>
                                            <td><?=$gi->warehouse; ?></td>
                                            <td><?=$gi->trandate; ?></td>                       
                                            <td><?=$gi->qty; ?></td>                                  
                                            <!-- <td>
                                              <div class="row">
                                                <div class="btn btn-info">
                                                  <?php echo anchor('c_master/buku_edit/'.$gi->isbn,'<i class="fa fa-edit"></i>'); ?>
                                                </div>
                                                <div class="btn btn-danger">
                                                  <i class="fa fa-trash" onclick="hapus(<?php echo $gi->isbn; ?>)"></i>
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
              function hapus(id){
                  if (confirm("Hapus Data ?")) {
                    window.location='<?php echo site_url('c_transaksi/gi_hapus/'); ?>'+id;
                  } else {
                  alert('Hapus data dibatalkan');
                  }
                }         
            </script>
          </body>
          

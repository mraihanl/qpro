    <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h3>Data Supplier</h3>
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
                                    <div class="input-group" style="float: right;">
                                      <input type="text" class="form-control" placeholder="Search...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="pe-7s-search"></i></button>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="btn btn-info btn-fill" style="float: right;">
                                      <i class="fa fa-plus"></i>
                                      <?php echo anchor('c_master/master_sp_input', 'Tambah Data Supplier', array('class' => 'btn-infoa')); ?>
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
                                        <th>ID</th>
                    										<th>Nama Supplier</th>	
                    										<th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php foreach($results as $sp){?>
                                        <tr>
                                            <td><?=$sp->id; ?></td>
                                            <td><?=$sp->nama; ?></td>                                
                                            <td>
                                              <div class="row">
                                                <div class="btn btn-info">
                                                  <?php echo anchor('c_master/master_sp_edit/'.$sp->id,'<i class="fa fa-edit"></i>'); ?>
                                                </div>
                                                <div class="btn btn-danger">
                                                  <i class="fa fa-trash" onclick="hapus(<?php echo $sp->id; ?>)"></i>
                                                </div>
                                              </div>
                                            </td>
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
                    window.location='<?php echo site_url('c_master/master_sp_hapus/'); ?>'+id;
                  } else {
                  alert('Hapus data dibatalkan');
                  }
                }
                
              $("#alert").fadeTo(2000, 500).slideUp(500, function(){$("#alert").slideUp(500);});         
            </script>
          </body>
          

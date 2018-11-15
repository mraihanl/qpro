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
                                
                                <!-- <div class="btn btn-default">
                                  <i class="fa fa-file-excel-o"></i>
                                </div> -->
                                                                
                                  <?php if ($this->session->flashdata('sukses')) { ?>
                                  <div id="alert" style="margin-top: 10px;" class="alert alert-success">                                  
                                  <?= $this->session->flashdata('sukses') ?> </div>
                                  <?php } ?>        
                              </div>                              
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="input-group">
                                      <input id="srcInput" type="text" class="form-control" placeholder="Search...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="pe-7s-search"></i></button>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="btn btn-info btn-fill" style="float: right;">
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
                                        <th>From</th> 
                                        <th>To</th>                  									
                    										<th>Transaction Date</th>
                    										<th>QTY</th>                    										
                    										
                                    </thead>
                                    <tbody id="srcTable">
                                      <?php foreach($results as $gi){?>
                                        <tr>
                                            <td><?=$gi->isbn; ?></td>
                                            <td><?=$gi->judul; ?></td>
                                            <td><?=$gi->from; ?></td>
                                            <td><?=$gi->to; ?></td>
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

              $("#alert").fadeTo(2000, 500).slideUp(500, function(){$("#alert").slideUp(500);});         
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                  $("#srcInput").on("keyup",function() {
                    var value = $(this).val().toLowerCase();
                    $("#srcTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                }); 
              </script>
          </body>
          

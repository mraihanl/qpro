    <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h3>Master Buku</h3>
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
                                  <div id="alert" class="alert alert-success">
                                  <?= $this->session->flashdata('sukses') ?> </div>
                                  <?php } ?>        
                              </div>                              
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div action="<?php echo site_url('c_master/search_gdkeyword/')?>" method="post" class="input-group" style="float: right;">
                                      <input id="srcInput" type="text" name="keyword" class="form-control" placeholder="Search...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" value="search"><i class="pe-7s-search"></i></button>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="btn btn-info btn-fill" style="float: right;">
                                      <i class="fa fa-plus"></i>
                                      <?php echo anchor('c_master/master_buku_input', 'Add Buku', array('class' => 'btn-infoa')); ?>
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
                    										<th>Pengarang</th>
                                        <th>Tahun Terbit</th>
                                        <th>Edisi</th>
                    										<th>Kategori</th>                    										
                    										<th>Sell Price</th>
                    										<th>Cost Price</th>
                    										<th>Action</th>
                                    </thead>
                                    <tbody id="srcTable">
                                      <?php foreach($results as $buku){?>
                                        <tr>
                                            <td><?=$buku->isbn; ?></td>
                                            <td><?=$buku->judul; ?></td>
                                            <td><?=$buku->pengarang; ?></td>
                                            <td><?=$buku->tahun; ?></td>
                                            <td><?=$buku->edisi; ?></td>
                                            <td><?=$buku->cat; ?></td>                                    
                                            <td><?=$buku->sellprice; ?></td>
                                            <td><?=$buku->costprice; ?></td>      
                                            <td>
                                              <div class="row">
                                                <div class="btn btn-info">
                                                  <?php echo anchor('c_master/buku_edit/'.$buku->isbn,'<i class="fa fa-edit"></i>'); ?>
                                                </div>
                                                <div class="btn btn-danger">
                                                  <i class="fa fa-trash" onclick="hapus(<?php echo $buku->isbn; ?>)"></i>
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
                    window.location='<?php echo site_url('c_master/master_buku_hapus/'); ?>'+id;
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
          

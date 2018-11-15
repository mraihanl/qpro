            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h3>Data Charges</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <!-- <div class="btn btn-default">
                                  <i class="fa fa-print"></i>
                                </div>
                                <div class="btn btn-default">
                                  <i class="fa fa-file-excel-o"></i>
                                </div>
                                <div class="btn btn-default">
                                  <i class="fa fa-filter"></i>
                                </div> -->
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
                                    <div class="btn btn-info btn-fill">
                                      <i class="fa fa-plus"></i>
                                      <?php echo anchor('c_master/master_chgs_input', 'Tambah Data Charges', array('class' => 'btn-infoa')); ?>
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
                    										<th>BP Code</th>
                    										<th>Nama Charges</th>
                    										<th>Add Sub</th>
                    										<th>Pct</th>
                    										<th>Amt</th>
                    										<th>Action</th>
                                    </thead>
                                    <tbody id="srcTable">
                                      <?php foreach($chgss as $chgs){?>
                                        <tr>
                                            <td><?=$chgs->code; ?></td>
                                            <td><?=$chgs->bpcode; ?></td>
                                            <td><?=$chgs->name; ?></td>
                                            <td><?=$chgs->addsub; ?></td>
                                            <td><?=$chgs->pct; ?></td>
                                            <td><?=$chgs->amt; ?></td>
                                            <td width="200" style="text-align: center;">
                                              <div class="row">
                                                <div class="btn btn-info">
                                                  <i class="fa fa-eye"></i>
                                                </div>
                                                <div class="btn btn-warning">
                                                  <?php echo anchor('c_master/chgs_edit/'.$chgs->code,'<i class="fa fa-edit"></i>'); ?>
                                                </div>
                                                <div class="btn btn-danger">
                                                  <?php echo anchor('c_master/master_chgs_hapus/'.$chgs->code,'<i class="fa fa-trash"></i>'); ?>
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
                $(document).ready(function() {
                  $("#srcInput").on("keyup",function() {
                    var value = $(this).val().toLowerCase();
                    $("#srcTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                }); 
            </script>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h3>Data Goods Sold</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">                                
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
                                    <div class="btn btn-info btn-fill">
                                      <i class="fa fa-plus"></i>
                                      <?php echo anchor('c_transaksi/gs_input', 'Input Goods Sold', array('class' => 'btn-infoa')); ?>
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
                                        <th>Judul</th>
                                        <th>ISBN</th>
                    										<th>Customer</th>                    										
                    										<th>Transaction Date</th>                    										
                    										<th>Pembayaran</th>               										
                    										<th>Harga Satuan</th>
                    										<th>Discount</th>
                                        <th>Tax</th>
                                        <th>QTY</th>
                                        <th>Total Harga</th>                    										
                                    </thead>
                                    <tbody id="srcTable">
                                      <?php foreach($results as $si){?>
                                        <tr>
                                            <td><?=$si->judul; ?></td>
                                            <td><?=$si->isbn; ?></td> 
                                            <td><?=$si->customer; ?></td>                                 
                                            <td><?=$si->trandate; ?></td>                                 
                                            <td><?=$si->top; ?></td>                                      
                                            <td><?=$si->amount; ?></td>
                                            <td><?=$si->discount; ?></td>
                                            <td><?=$si->tax; ?></td>
                                            <td><?=$si->qty; ?></td>
                                            <td><?=$si->netamount; ?></td>
                                            <!-- <td width="200" style="text-align: center;">
                                              <div class="row">
                                                <div class="btn btn-info">
                                                  <i class="fa fa-eye"></i>
                                                </div>
                                                <div class="btn btn-warning">
                                                  <?php echo anchor('c_transaksi/gs_edit/'.$si->code,'<i class="fa fa-edit"></i>'); ?>
                                                </div>
                                                <div class="btn btn-danger">
                                                  <?php echo anchor('c_transaksi/gs_hapus/'.$si->code,'<i class="fa fa-trash"></i>'); ?>
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
                $(document).ready(function() {
                  $("#srcInput").on("keyup",function() {
                    var value = $(this).val().toLowerCase();
                    $("#srcTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                }); 
              </script>

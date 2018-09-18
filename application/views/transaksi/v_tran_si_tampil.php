            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h3>Data Sales Invoice</h3>
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
                                      <?php echo anchor('c_transaksi/sales_invoice_input', 'Input Sales Invoice', array('class' => 'btn-infoa')); ?>
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
                    										<th>BR Code</th>
                    										<th>CS Code</th>
                    										<th>Transaction Date</th>
                    										<th>Transaction Type</th>
                    										<th>T.O.P</th>
                    										<th>PO Number</th>
                    										<th>Amount</th>
                    										<th>Discount</th>
                                        <th>Tax</th>
                                        <th>Nett Amount</th>
                    										<th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php foreach($sis as $si){?>
                                        <tr>
                                            <td><?=$si->code; ?></td>
                                            <td><?=$si->brcode; ?></td>
                                            <td><?=$si->cscode; ?></td>
                                            <td><?=$si->trandate; ?></td>
                                            <td><?=$si->trantipe; ?></td>
                                            <td><?=$si->top; ?></td>
                                            <td><?=$si->ponum; ?></td>
                                            <td><?=$si->amount; ?></td>
                                            <td><?=$si->discount; ?></td>
                                            <td><?=$si->tax; ?></td>
                                            <td><?=$si->netamount; ?></td>
                                            <td width="200" style="text-align: center;">
                                              <div class="row">
                                                <div class="btn btn-info">
                                                  <i class="fa fa-eye"></i>
                                                </div>
                                                <div class="btn btn-warning">
                                                  <?php echo anchor('c_transaksi/sales_invoice_edit/'.$si->code,'<i class="fa fa-edit"></i>'); ?>
                                                </div>
                                                <div class="btn btn-danger">
                                                  <?php echo anchor('c_transaksi/sales_invoice_hapus/'.$si->code,'<i class="fa fa-trash"></i>'); ?>
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

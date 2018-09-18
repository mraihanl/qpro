<body>
<form method="post">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Incoming Payment</h3>
                            <p>Tambah Data Incoming Payment</p> 
                        </div>
                        <div class="col-md-6">
                           <div class="btn btn-info pull-right btn-fill">
                            <i class="fa fa-file-o"></i>
                            <?php echo anchor('c_transaksi/incoming_payment_data', 'Daftar Incoming Payment', array('class' => 'btn-infoa')); ?>
                           </div> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>kode</label>
                                            <input type="text" class="form-control" placeholder="Code" name="code">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>BR Code</label>
                                            <input type="text" class="form-control" placeholder="BR Code" name="brcode">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CS Code</label>
                                            <input type="text" class="form-control" placeholder="CS Code" name="cscode">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Transaction Date</label>
                                            <input type="date" class="form-control" placeholder="Transaction Date" name="trandate">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>SI Code</label>
                                            <input type="text" class="form-control" placeholder="Sales Invoice Code" name="sicode">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input type="text" class="form-control" placeholder="Amount" name="amount">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Submit</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    
<?php foreach($sis as $si){?>
<body>
<form action="<?php echo base_url(). 'c_transaksi/data_sales_invoice_edit'; ?>" method="post">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Sales Invoice</h3>
                            <p>Edit Data Sales Invoice</p> 
                        </div>
                        <div class="col-md-6">
                           <div class="btn btn-info pull-right btn-fill">
                            <i class="fa fa-file-o"></i>
                            <?php echo anchor('c_transaksi/sales_invoice_data', 'Daftar Sales Invoice', array('class' => 'btn-infoa')); ?>
                           </div> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" class="form-control" placeholder="Code" name="code" value="<?php echo $si->code ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>BR Code</label>
                                            <input type="text" class="form-control" placeholder="BR Code" name="brcode" value="<?php echo $si->brcode ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CS Code</label>
                                            <input type="text" class="form-control" placeholder="CS Code" name="cscode" value="<?php echo $si->cscode ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Transaksi</label>
                                            <input type="date" class="form-control" placeholder="Transaction Date" name="trandate" value="<?php echo $si->trandate ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipe Transaksi</label>
                                            <input type="text" class="form-control" placeholder="Transaction Type" name="trantipe" value="<?php echo $si->trantipe ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Pembayaran</label>
                                            <input type="text" class="form-control" placeholder="Term Of Payment" name="top" value="<?php echo $si->top ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>PO Number</label>
                                            <input type="text" class="form-control" placeholder="PO Number" name="ponum" value="<?php echo $si->ponum ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" class="form-control" placeholder="Amount" name="amount"value="<?php echo $si->amount ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Diskon</label>
                                            <input type="text" class="form-control" placeholder="Discount" name="discount" value="<?php echo $si->discount ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pajak</label>
                                            <input type="text" class="form-control" placeholder="Tax" name="tax" value="<?php echo $si->tax ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Total Jumlah</label>
                                            <input type="text" class="form-control" placeholder="Nett Amount" name="netamount" value="<?php echo $si->netamount ?>">
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
<?php }?>
    
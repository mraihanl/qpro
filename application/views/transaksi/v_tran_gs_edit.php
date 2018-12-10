<?php foreach($sis as $si){?>
<body>
<form action="<?php echo base_url(). 'c_transaksi/data_sales_invoice_edit'; ?>" method="post">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Good Sold</h3>
                            <p>Edit Data Good Sold</p> 
                        </div>
                        <div class="col-md-6">
                           <div class="btn btn-info pull-right btn-fill">
                            <i class="fa fa-file-o"></i>
                            <?php echo anchor('c_transaksi/gs_data', 'Daftar Sales Invoice', array('class' => 'btn-infoa')); ?>
                           </div> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" placeholder="Judul" name="judul" value="<?php echo $si->judul ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" placeholder="ISBN" name="isbn" value="<?php echo $si->isbn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>CUSTOMER</label>
                                            <input type="text" class="form-control" placeholder="Customer" name="customer" value="<?php echo $si->customer ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Transaksi</label>
                                            <input type="datetime-local" class="form-control" placeholder="Transaction Date" name="trandate" value="<?php echo $si->trandate ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Pembayaran</label>
                                            <input type="text" class="form-control" placeholder="Type Of Payment" name="top" value="<?php echo $si->top ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" class="form-control" placeholder="Amount" name="amount" id="jumlah" value="<?php echo $si->amount ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Diskon(%)</label>
                                            <input type="text" class="form-control" placeholder="Discount" name="discount" id="diskon" value="<?php echo $si->discount ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pajak(%)</label>
                                            <input type="text" class="form-control" placeholder="Tax" name="tax" id="pajak" value="<?php echo $si->tax ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Total Jumlah</label>
                                            <input type="text" class="form-control" placeholder="Nett Amount" name="netamount" id="total" value="<?php echo $si->nettamount ?>" readonly>
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
    
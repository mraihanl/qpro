<?php foreach($dos as $do){?>
<body>
<form action="<?php echo base_url(). 'c_transaksi/data_delivery_order_edit'; ?>" method="post">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Delivery Order</h3>
                            <p>Edit Data Delivery Order</p> 
                        </div>
                        <div class="col-md-6">
                           <div class="btn btn-info pull-right btn-fill">
                            <i class="fa fa-file-o"></i>
                            <?php echo anchor('c_transaksi/delivery_order_data', 'Daftar Delivery Order', array('class' => 'btn-infoa')); ?>
                           </div> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Code</label>
                                            <input type="text" class="form-control" placeholder="Code" name="code" value="<?php echo $do->code ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" placeholder="BR Code" name="isbn" value="<?php echo $do->isbn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <input type="text" class="form-control" placeholder="BR Code To" name="tujuan" value="<?php echo $do->tujuan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Transaction Date</label>
                                            <input type="date" class="form-control" placeholder="Transaction Date" name="trandate" value="<?php echo $do->trandate ?>">
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
    
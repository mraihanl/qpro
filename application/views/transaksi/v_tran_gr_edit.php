<?php foreach($gdrcs as $gdrc){?>
<body>
<formmethod="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Goods Receipt</h3>
                                <p>Edit Data Goods Receipt</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-user"></i>
                                <?php echo anchor('c_transaksi/gr_tampil', 'Daftar Good Receipt', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <input type="text" class="form-control" placeholder="Kode Customer" name="isbn" value="<?php echo $gdrc->isbn ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>JUDUL</label>
                                                <input type="text" class="form-control" placeholder="Kode Branch" name="judul" value="<?php echo $gdrc->judul ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>TRANSACTION DATE</label>
                                                <input type="text" class="form-control" placeholder="BR Code FR" name="trandate" value="<?php echo $gdrc->trandate ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>QTY</label>
                                                <input type="text" class="form-control" placeholder="Transaction Date" name="qty" value="<?php echo $gdrc->qty ?>">
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
<body>
<form method="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Goods Receipt</h3>
                                <p>Tambah Data Goods Receipt</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-user"></i>
                                <?php echo anchor('c_master/master_gdrc_tampil', 'Daftar Goods Receipt', array('class' => 'btn-infoa')); ?>
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
                                                <input type="text" class="form-control" placeholder="Kode Customer" name="code">
                                            </div>
                                            <div class="form-group">
                                                <label>BR Code</label>
                                                <input type="text" class="form-control" placeholder="Kode Branch" name="brcode">
                                            </div>
                                            <div class="form-group">
                                                <label>BR Code FR</label>
                                                <input type="text" class="form-control" placeholder="BR Code FR" name="brcodefr">
                                            </div>
                                            <div class="form-group">
                                                <label>Transaction Date</label>
                                                <input type="date" class="form-control" placeholder="Transaction Date" name="trandate">
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
    
<?php foreach($chgss as $chgs){?>
<body>
<form action="<?php echo base_url(). 'c_master/master_chgs_edit'; ?>" method="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Charges</h3>
                                <p>Ubah Data Charges</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-user"></i>
                                <?php echo anchor('c_master/master_chgs_tampil', 'Daftar Charges', array('class' => 'btn-infoa')); ?>
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
                                                <input type="text" class="form-control" placeholder="Kode Charges" name="code" value="<?php echo $chgs->code ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>BP Code</label>
                                                <input type="text" class="form-control" placeholder="BP Code" name="bpcode" value="<?php echo $chgs->bpcode ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Charges</label>
                                                <input type="text" class="form-control" placeholder="Nama Charges" name="name" value="<?php echo $chgs->name ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Add Sub</label>
                                                <input type="text" class="form-control" placeholder="Add Sub" name="addsub" value="<?php echo $chgs->addsub ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label>Pct</label>
                                              <input type="text" class="form-control" placeholder="Pct" name="pct" value="<?php echo $chgs->pct ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amt</label>
                                                <input type="text" class="form-control" placeholder="Amt" name="amt" value="<?php echo $chgs->amt ?>">
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
    
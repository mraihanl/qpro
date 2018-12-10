<?php echo form_open_multipart('c_master/c_branch_input');?>
<form method="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Input Branch</h3>                                 
                            </div>
                            <div style="margin-bottom: 10px;" class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-home"></i>
                                <?php echo anchor('c_master/c_branch_data', 'Daftar Warehouse', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" placeholder="ID Branch" name="id">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Branch</label>
                                                <input type="text" class="form-control" placeholder="Nama Branch" name="branch">
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Customer</label>
                                                <input type="text" class="form-control" placeholder="Kode Customer" name="prefix">
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
    
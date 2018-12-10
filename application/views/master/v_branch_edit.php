<?php foreach($branch as $row){?>
<!-- <?php //echo form_open_multipart('c_master/master_wrhs_input');?> -->
<form method="post" action="<?php echo base_url(). 'c_master/c_branch_update'; ?>" method="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Branch</h3>
                                <p>Edit Branch</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-home"></i>
                                <?php echo anchor('c_master/c_branch_data', 'Daftar Branch', array('class' => 'btn-infoa')); ?>
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
                                                <input type="text" class="form-control" placeholder="ID Branch" name="id" value="<?php echo $row->id ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Branch</label>
                                                <input type="text" class="form-control" placeholder="Nama Branch" name="branch" value="<?php echo $row->branch ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Customer</label>
                                                <input type="text" class="form-control" placeholder="Kode Customer" name="prefix" value="<?php echo $row->prefix ?>">
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
    
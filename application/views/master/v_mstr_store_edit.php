<body>
<?php echo form_open_multipart('c_master/master_store_update');?>
<!-- <form method="post"> -->
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Store</h3>
                                <p>Edit Data Store</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-book"></i>
                                <?php echo anchor('c_master/master_store_data', 'Daftar Store', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                        </div>
                        <div class="card">
                            <?php foreach($stores as $store){?>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" placeholder="ID" name="id" readonly value="<?php echo $store->id ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Store</label>
                                                <input type="text" class="form-control" placeholder="Nama Supplier" name="nama" required value="<?php echo $store->nama ?>">
                                            </div>
                                        </div>
                                    </div>

                                        <button name="submit" type="submit" class="btn btn-info btn-fill pull-right" >Submit</button>
                                                                           
                                    <div class="clearfix"></div>   
                                </form>                          
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
    
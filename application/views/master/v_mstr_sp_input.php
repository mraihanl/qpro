<body>
<?php echo form_open_multipart('c_master/master_sp_input');?>
<!-- <form method="post"> -->
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Supplier</h3>
                                <p>Tambah Data Supplier</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-book"></i>
                                <?php echo anchor('c_master/master_sp_data', 'Daftar Supplier', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" placeholder="ID" name="id" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Supplier</label>
                                                <input type="text" class="form-control" placeholder="Nama Supplier" name="nama" required>
                                            </div>
                                        </div>
                                    </div>

                             <button type="submit" name="submit" class="btn btn-info btn-fill pull-right" >Submit</button>
                                                                           
                                    <div class="clearfix"></div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
    
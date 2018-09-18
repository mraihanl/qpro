<head>
    <script>
        function berhasil() {
        alert("Data berhasil dimasukkan!");
        }
    </script>
</head>
<body>
<?php echo form_open_multipart('c_master/master_wrhs_input');?>
<form method="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Warehouse</h3>
                                <p>Tambah Data Warehouse</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-home"></i>
                                <?php echo anchor('c_master/master_wrhs_data', 'Daftar Warehouse', array('class' => 'btn-infoa')); ?>
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
                                                <input type="text" class="form-control" placeholder="Kode Warehouse" name="code" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Warehouse</label>
                                                <input type="text" class="form-control" placeholder="Nama Warehouse" name="name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Area</label>
                                                <input type="text" class="form-control" placeholder="Area" name="area">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Telepon</label>
                                              <input type="text" class="form-control" placeholder="No Telepon" name="telp">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="Email" name="mail">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Kontak</label>
                                              <input type="text" class="form-control" placeholder="Kontak" name="contact">
                                            </div>
                                        </div>
                                    </div>

                                 

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea type="text" class="form-control" placeholder="Alamat" name="address"></textarea>
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
    
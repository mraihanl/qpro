<body>
<form method="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Customer</h3>
                                <p>Tambah Data Customer</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-user"></i>
                                <?php echo anchor('c_master/master_cust_data', 'Daftar Customer', array('class' => 'btn-infoa')); ?>
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
                                                <input type="text" class="form-control" placeholder="Kode Customer" name="code" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label>BR Code</label>
                                                <input type="text" class="form-control" placeholder="Kode Branch" name="brcode">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Customer</label>
                                                <input type="text" class="form-control" placeholder="Nama Customer" name="name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NPWP</label>
                                                <input type="text" class="form-control" placeholder="No NPWP" name="npwp">
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
    
<head>
    <script>
        function berhasil(id) {
        if(confirm("Data berhasil dimasukkan!")){
            window.location='<?php echo site_url('c_master/master_buku_data/'); ?>'+id;
        }
        
        }
    </script>
</head>
<body>
<?php echo form_open_multipart('c_master/master_buku_input');?>
<!-- <form method="post"> -->
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Buku</h3>
                                <p>Tambah Data Buku</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-book"></i>
                                <?php echo anchor('c_master/master_buku_data', 'Daftar Buku', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <input type="text" class="form-control" placeholder="Nomor ISBN" name="isbn" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Judul Buku</label>
                                                <input type="text" class="form-control" placeholder="Judul Buku" name="judul" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Penulis</label>
                                                <input type="text" class="form-control" placeholder="Penulis" name="pengarang" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Kategori</label>
                                              <input type="text" class="form-control" placeholder="Kategori" name="cat" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="display: none;">
                                        <div class="col-md-4" style="margin-right: 0px; padding-right: 7px;">                                    
                                            <label>Gambar</label>
                                            <input type="text" class="form-control" name="imgurl" value="null" required>
                                        </div>
                                        
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Sell Price</label> 
                                            <div class="input-group">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">Rp</button>
                                              </span>
                                              <input type="text" class="form-control" placeholder="Sell Price" name="sellprice" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Costprice</label> 
                                            <div class="input-group">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">Rp</button>
                                              </span>
                                              <input type="text" class="form-control" placeholder="Costprice" name="costprice" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Discount</label>
                                                <input type="text" class="form-control" placeholder="Discount" name="discount" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tax</label>
                                                <input type="text" class="form-control" placeholder="Tax" name="tax" min="1" step="any" required>
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
    
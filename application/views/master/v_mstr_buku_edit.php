<body>
<?php echo form_open_multipart('c_master/update_buku_edit');?>
<!-- <form method="post"> -->
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Goods</h3>
                                <p>Edit Data Goods</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-book"></i>
                                <?php echo anchor('c_master/master_buku_data', 'Daftar Buku', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                        </div>
                        <div class="card">
                            <?php foreach($bukus as $buku){?>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <input type="text" class="form-control" placeholder="Nomor ISBN" name="isbn" required value="<?php echo $buku->isbn ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Judul Buku</label>
                                                <input type="text" class="form-control" placeholder="Judul Buku" name="judul" required value="<?php echo $buku->judul ?>">
                                            </div>
                                        </div>
                                    </div>
<!-- ============================================================================================== -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" class="form-control" placeholder="Penerbit" name="pengarang" required value="<?php echo $buku->pengarang ?>">
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" class="form-control" placeholder="Tahun Penerbit" name="tahun" required value="<?php echo $buku->tahun ?>">
                                            </div>
                                        </div>                                        
                                    </div>
<!-- =============================================================================================== -->
                                    <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Edisi</label>
                                              <input type="text" class="form-control" placeholder="Edisi" name="edisi" required value="<?php echo $buku->edisi ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Kategori</label>
                                              <input type="text" class="form-control" placeholder="Kategori" name="cat" required value="<?php echo $buku->cat ?>">
                                            </div>
                                        </div>                                        
                                    </div>
<!-- =============================================================================================== -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            
                                            <label>Costprice</label> 
                                            <div class="input-group">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">Rp</button>
                                              </span>
                                              <input type="text" class="form-control" placeholder="Costprice" name="costprice" required value="<?php echo $buku->costprice ?>">
                                            </div>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <label>Sell Price</label> 
                                            <div class="input-group">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">Rp</button>
                                              </span>
                                              <input type="text" class="form-control" placeholder="Sell Price" name="sellprice" required value="<?php echo $buku->sellprice ?>">
                                            </div>
                                        </div>
                                    </div>
                                        
                                        <button name="submit" type="submit" class="btn btn-info btn-fill pull-right" style="margin-top: 10px;" >Submit</button>
                                                                           
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
    
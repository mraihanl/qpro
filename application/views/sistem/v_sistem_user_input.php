<head></head>
<body>
<?php echo form_open_multipart('c_sistem/user_input');?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                            <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="title">System Users</h3>
                                        <p>Tambah Data User</p> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn btn-info pull-right btn-fill">
                                        <i class="fa fa-book"></i>
                                        <?php echo anchor('c_sistem/user_data', 'Daftar User', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                            </div>
                        <div class="card">
                            <div class="content">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="mail">
                                            </div>
                                            <div class="form-group">
                                                  <label>Nama</label>
                                                  <input type="text" class="form-control" placeholder="Nama" name="name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Branch</label>
                                                <input id="wrhs" type="text" class="form-control" placeholder="Branch" name="cabang">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Role Code</label>
                                                <input type="text" class="form-control" placeholder="Role Code" name="rocode">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Submit</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#wrhs" ).autocomplete({
              source: "<?php echo site_url('c_transaksi/auto_wrhs/?');?>"
            });
        });
    </script>
</body>
    
<body>
<form method="post">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Input Good Issue</h3> 
                        </div>
                        <div class="col-md-6" >
                           <div class="btn btn-info pull-right btn-fill">
                            <i class="fa fa-file-o"></i>
                            <?php echo anchor('c_transaksi/gi_data', 'Daftar Good Issue', array('class' => 'btn-infoa')); ?>
                           </div> 
                        </div>
                    </div>
                    <div class="card" style="margin-top: 10px;">
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input id="title" type="text" class="form-control" placeholder="Judul Buku" name="judul" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control"  placeholder="Code" name="isbn" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input id="wrhs" type="text" class="form-control" placeholder="Warehouse" name="from" value="<?php echo $this->session->userdata("cabang"); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>to</label>
                                            <input id="wrhs2" type="text" class="form-control" placeholder="Warehouse" name="to">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Transaction Date</label>
                                            <input type="datetime-local" class="form-control" placeholder="Transaction Date" name="trandate" Required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>QTY</label>
                                            <input type="text" class="form-control" placeholder="QTY" name="qty">
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
<script type="text/javascript">
        $(document).ready(function(){
            $('#title').autocomplete({
                source: "<?php echo site_url('c_transaksi/auto_judul');?>",      
                select: function (event, ui) {
                    $('[name="judul"]').val(ui.item.label);
                    $('[name="isbn"]').val(ui.item.description);                     
                }
            });
        });

         $(document).ready(function(){
            $( "#wrhs" ).autocomplete({
              source: "<?php echo site_url('c_transaksi/auto_wrhs/?');?>"
            });
        });

         $(document).ready(function(){
            $( "#wrhs2" ).autocomplete({
              source: "<?php echo site_url('c_transaksi/auto_wrhs/?');?>"
            });
        });
    </script>
</body>


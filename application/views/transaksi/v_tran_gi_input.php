<body>
<form method="post">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Good Issue</h3> 
                        </div>
                        <div class="col-md-6">
                           <div class="btn btn-info pull-right btn-fill">
                            <i class="fa fa-file-o"></i>
                            <?php echo anchor('c_transaksi/gi_data', 'Daftar Good Issue', array('class' => 'btn-infoa')); ?>
                           </div> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" id="title" placeholder="Code" name="isbn">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input type="text" class="form-control" placeholder="Judul Buku" name="judul" Readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Warehouse</label>
                                            <input id="wrhs" type="text" class="form-control" placeholder="Warehouse" name="warehouse">
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
                source: "<?php echo site_url('c_transaksi/auto_isbn');?>",      
                select: function (event, ui) {
                    $('[name="isbn"]').val(ui.item.label); 
                    $('[name="judul"]').val(ui.item.description); 
                }
            });
        });

         $(document).ready(function(){
            $( "#wrhs" ).autocomplete({
              source: "<?php echo site_url('c_transaksi/auto_wrhs/?');?>"
            });
        });
    </script>
</body>


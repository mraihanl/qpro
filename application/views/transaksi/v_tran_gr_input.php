<body>
<form method="post">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title">Master Goods Receipt</h3>
                                <p>Tambah Data Goods Receipt</p> 
                            </div>
                            <div class="col-md-6">
                               <div class="btn btn-info pull-right btn-fill">
                                <i class="fa fa-user"></i>
                                <?php echo anchor('c_transaksi/gr_data', 'Daftar Goods Receipt', array('class' => 'btn-infoa')); ?>
                               </div> 
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">                                            
                                            <div class="form-group">
                                                <label>JUDUL</label>
                                                <input id="title" type="text" class="form-control" placeholder="Kode Branch" name="judul">
                                            </div>
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <input type="text" class="form-control" placeholder="Kode Customer" name="isbn" id="title" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>TRANSACTION DATE</label>
                                                <input type="datetime-local" class="form-control" placeholder="BR Code FR" name="trandate">
                                            </div>
                                            <div class="form-group">
                                                <label>QTY</label>
                                                <input type="text" class="form-control" placeholder="Transaction Date" name="qty">
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

    </script>
</body>
    
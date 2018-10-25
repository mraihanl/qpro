<body>
<form method="post">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Sales Invoice</h3>
                            <p>Tambah Data Sales Invoice</p> 
                        </div>
                        <div class="col-md-6">
                           <div class="btn btn-info pull-right btn-fill">
                            <i class="fa fa-file-o"></i>
                            <?php echo anchor('c_transaksi/sales_invoice_data', 'Daftar Sales Invoice', array('class' => 'btn-infoa')); ?>
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
                                            <input type="text" class="form-control" placeholder="ISBN" name="isbn">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>CUSTOMER</label>
                                            <input type="text" class="form-control" placeholder="Customer" name="customer">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Transaksi</label>
                                            <input type="datetime-local" class="form-control" placeholder="Transaction Date" name="trandate">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Pembayaran</label>
                                            <input type="text" class="form-control" placeholder="Type Of Payment" name="top">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" class="form-control" placeholder="Amount" name="amount" id="jumlah" onkeyup="sum()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Diskon(%)</label>
                                            <input type="text" class="form-control" placeholder="Discount" name="discount" id="diskon" onkeyup="sum()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pajak(%)</label>
                                            <input type="text" class="form-control" placeholder="Tax" name="tax" id="pajak" onkeyup="sum()">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Total Jumlah</label>
                                            <input type="text" class="form-control" placeholder="Nett Amount" name="netamount" id="total" readonly>
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
    function sum(){
        var jumlah = document.getElementById('jumlah').value;
        var diskon = document.getElementById('diskon').value;
        var pajak = document.getElementById('pajak').value;
        var jumdis = (parseInt(jumlah)-(parseInt(jumlah)*(parseInt(diskon)/100)));
        var total = jumdis+(jumdis*(parseInt(pajak)/100));
        if (!isNaN(total)) {
         document.getElementById('total').value = total;
      }
    }
</script>
</body>

<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
        <h3>Data branch</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="content">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  
                  <!-- <div class="btn btn-default">
                    <i class="fa fa-file-excel-o"></i>
                  </div> -->
                   <?php if ($this->session->flashdata('sukses')) { ?>
                   <div id="alert" class="alert alert-success">                   
                   <?= $this->session->flashdata('sukses') ?> </div>
                   <?php } ?> 
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <input id="srcInput" type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button"><i class="pe-7s-search"></i></button>
                        </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="btn btn-info btn-fill" style="float: right;">
                        <i class="fa fa-plus"></i>
                        <?php echo anchor('c_master/c_branch_input', 'Add Branch', array('class' => 'btn-infoa')); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
              <!-- <div class="header">
                  <h4 class="title">Master Inventory Buku</h4>
              </div> -->
              <div class="content table-responsive table-full-width">
                  <table class="table table-hover table-striped">
                      <thead>
                          <th>ID</th>
      										<th>Nama Branch</th>
                          <th>Kode Customer</th>
                          <th>Action</th>
                      </thead>
                      <tbody id="srcTable">
                        <?php foreach($results as $wrhs){?>
                          <tr>
                              <td><?=$wrhs->id; ?></td>
                              <td><?=$wrhs->branch; ?></td>
                              <td><?=$wrhs->prefix; ?></td>                              
                              <td>
                                <div class="row">
                                  <div class="btn btn-info">
                                    <?php echo anchor('c_master/c_branch_edit/'.$wrhs->id,'<i class="fa fa-edit"></i>'); ?>
                                  </div>
                                  <!-- <div class="btn btn-danger">
                                    <i class="fa fa-trash" onclick="hapus(<?php echo $wrhs->code; ?>)"></i>
                                  </div> -->
                                </div>
                              </td>
                          </tr>
                          <?php }?>
                      </tbody>
                  </table>

              </div>
          </div>
      </div>
  </div>
</div>
<script type="text/javascript">
  function hapus(id){
     if (confirm("Hapus Data ?")) {
     window.location='<?php echo site_url('c_master/master_wrhs_hapus/'); ?>'+id;
     } else {
     alert('Hapus data dibatalkan');
     }
  } 

  $("#alert").fadeTo(2000, 500).slideUp(500, function(){$("#alert").slideUp(500);});            
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#srcInput").on("keyup",function() {
      var value = $(this).val().toLowerCase();
      $("#srcTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  }); 
</script>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../third_party/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>QISTHI PRESS</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/light-bootstrap-dashboard.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>"> 
    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url(); ?>css/dropzone.css"> -->

    <!-- <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap-notify.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstap-select.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/chartist.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/demo.js"></script>
    <!-- <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.3.2.1.min.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery-3.3.1.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/light-bootstrap-dashboard.js"></script>
  
  <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>

    <!-- <script type='text/javascript' src="<?php //echo base_url(); ?>js/dropzone.js"></script> -->

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="<?php echo base_url('img/sidebar-5.jpg')?>">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="#" class="simple-text">
            <img src="<?php echo base_url('img/qisthi-logo.png'); ?>" style="background-color: white; width: 100px;border-radius: 5px;">
          </a>
        </div>
        <ul class="nav">
          <div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <i class="pe-7s-graph"></i>
                  <?php echo anchor('c_halaman/dashboard','DASHBOARD'); ?>
                </h4>
              </div>
            </div>
          </div>
          <div id="panelsistem" class="panel-group">
            <div class="panel panel-default">
              <a data-toggle="collapse" href="#collapse1">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <i class="pe-7s-menu"></i>
                    <p>Sistem<b class="caret"></b></p>
                  </h4>
                </div>
              </a>
              <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                  <li id="a" class="list-group-item"><?php echo anchor('c_sistem/user_data', 'User'); ?></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel-group">
            <div class="panel panel-default">
              <a data-toggle="collapse" href="#collapse2">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <i class="pe-7s-box1"></i>
                    <p>Master <b class="caret"></b></p>
                  </h4>
                </div>
              </a>
              <div id="collapse2" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item"><?php echo anchor('C_master/master_buku_data', 'Buku'); ?></li>
                  <li class="list-group-item"><?php echo anchor('C_master/c_branch_data', 'Branch'); ?></li> 
                  <li class="list-group-item"><?php echo anchor('C_master/master_cust_data', 'Customer'); ?></li>                     
                  <li class="list-group-item"><?php echo anchor('C_master/master_sp_data', 'Percetakan'); ?></li>                                        
                </ul>
              </div>
            </div>
          </div>
          <div class="panel-group">
            <div class="panel panel-default">
              <a data-toggle="collapse" href="#collapse3">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <i class="pe-7s-notebook"></i>
                    <p>Transaksi <b class="caret"></b></p>
                  </h4>
                </div>
              </a>
              <div id="collapse3" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item"><?php echo anchor('C_transaksi/gr_data', 'Goods Receipt'); ?></li>
                  <li class="list-group-item"><?php echo anchor('C_transaksi/gi_data', 'Goods Issue'); ?></li>                                                   
                  <li class="list-group-item"><?php echo anchor('C_transaksi/gs_data', 'Goods Sold'); ?></li>    
                  <li class="list-group-item"><?php echo anchor('C_halaman/dashboard', 'Goods Return'); ?></li>
                  <li id="payment" class="list-group-item"><?php echo anchor('c_halaman/dashboard', 'Payment'); ?></li>                           
                </ul>
              </div>
            </div>
          </div>
          <div class="panel-group">
            <div class="panel panel-default">
              <a data-toggle="collapse" href="#collapse4">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <i class="pe-7s-display1"></i>
                    <p>Report <b class="caret"></b></p>
                  </h4>
                </div>
              </a>
              <div id="collapse4" class="panel-collapse collapse">
                <ul class="list-group">                        
                  <li class="list-group-item"><?php echo anchor('C_report/soh', 'Stock on Hand', array('target' => '_blank')); ?></li>
                  <li class="list-group-item"><?php echo anchor('C_halaman/dashboard', 'Stock Mutation', array('target' => '_blank')); ?></li>              
                  <li class="list-group-item"><?php echo anchor('C_halaman/dashboard', 'Sales Report', array('target' => '_blank')); ?></li>
                  <li class="list-group-item"><?php echo anchor('C_halaman/dashboard', 'Incoming Payment', array('target' => '_blank')); ?></li>
                  <li class="list-group-item"><?php echo anchor('C_halaman/dashboard', 'AR Aging', array('target' => '_blank')); ?></li>
                  <li class="list-group-item"><?php echo anchor('C_halaman/dashboard', 'Best Seller', array('target' => '_blank')); ?></li>                        
                </ul>
              </div>
            </div>
          </div>
          <script type="text/javascript">            
            var role = "<?php echo $this->session->userdata("rocode") ?>";
            switch(role){
              case "Warehouse":
              document.getElementById("panelsistem").style.display="none";
              document.getElementById("payment").style.display="none";
              break;
              case "Staff":
              document.getElementById("panelsistem").style.display="none";
              document.getElementById("payment").style.display="none";
            }
          </script>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">                    
            <a class="navbar-brand" href="#">Qisthi Press</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <p>Hai, <?php echo $this->session->userdata("name"); ?><b class="caret"></b></p>
                </a>
                <ul class="dropdown-menu">
                  <li>                    
                      <i class="fa fa-power-off" style="padding: 10px;"></i>
                      <p style="display: inline; margin-left: 15px;"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></p>
                  </li>
                </ul>
              </li>
              <li class="separator hidden-lg"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content"><br><br>
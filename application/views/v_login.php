<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Login</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
 -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url('img/favicon.ico'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>QISTHI PRESS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/light-bootstrap-dashboard.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body class="login">
    <div class="ocean">
      <div class="wave"></div>
      <div class="wave"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            
            </div>
            <div class="col-md-6">
                <div class="logoq" style="text-align: center;">
                    <img src="<?php echo base_url('img/tehbotol.png'); ?>" style=" width: 200px; margin: 20px; border-radius: 10px;transform: translateY(80px);">
                </div>
                <div class="col-md-12" style="text-align: center; opacity: 0;">
                    <p>SELAMAT DATANG DI QISTHI PRESS</p>
                    <hr>
                </div>
                <div class="card" style="width: 450px; margin: auto;">
                    <div class="header" style="text-align: center;">
                        <h4 class="title">LOGIN</h4>
                    </div>
                    <div class="content">
                        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                            <div class="row">
                                <div class="col-md-12" style="padding: 35px 35px 15px 35px !important;">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" required="masukkan username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" required="masukkan password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="padding: 0px 35px 35px 35px !important;">
                                    <a href="qdashboard.html">
                                        <button type="submit" class="btn btn-danger btn-block btn-fill pull-right" value="login">LOGIN</button>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<!-- <script src="assets/js/demo.js"></script> -->

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>

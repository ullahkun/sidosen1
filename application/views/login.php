<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI DOSEN | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/lte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/lte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/lte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/lte/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>SI</b>Dosen</a>
  </div>
     <?php
       
      echo $this->session->flashdata("notif");
        
   ?>
  <!-- /.login-logo -->
  <form method="POST" action="Login/ceklogin">
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
 	<div class="form-group has-feedback">
		<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<input type="password" name="password" placeholder="Masukkan Password" class="form-control">
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	</div>
	<div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
		<input type="submit" name="login" value="Login" class="btn btn-primary btn-block btn-flat">
	</div></div>
	</form>
         
                 
    

    
    <!-- /.social-auth-links -->

    
  </div>
  
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top vc_custom_1434459441156">
<div class="wpb_wrapper">
<h4 style="text-align: center;">
                                          <!--   Through high commitment to the quality, high efficiency and accountability, IPB produces graduates who -->
</h4>
 </div>
</div>

<div class="imgcontent">
<img src="https://ipb.ac.id/assets/assert/vektor.png" max-width=100% width="2000" height="331" alt="university-education-all-background-01" title="university-education-all-background-01">
</div>

                              
<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/lte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/lte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

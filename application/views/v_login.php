<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="MY HIS">
		<meta name="author" content="EZSAY">
		<meta name="keyword" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LOGIN | MYHIS</title>
		<!-- start: Css -->
		<link rel="stylesheet"  href="<?php echo base_url()."assets/"; ?>css/bootstrap.min.css">
		<!-- plugins -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"; ?>css/plugins/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"; ?>css/plugins/simple-line-icons.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"; ?>css/plugins/animate.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"; ?>css/plugins/icheck/skins/flat/aero.css"/>
		<link href="<?php echo base_url()."assets/"; ?>css/style.css" rel="stylesheet">
		<!-- end: Css -->
		<!-- <link rel="shortcut icon" href="asset/img/logomi.png"> -->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="mimin" class="dashboard form-signin-wrapper">
		<div class="container">
			<?php $attributes = array('class' => 'form-signin', 'id' => 'myform');?>
			<?php echo form_open('login/signin',$attributes);?>
			<div class="panel periodic-login">
				<span class="atomic-number"></span>
				<div class="panel-body text-center">
					<h1>MY HIS</h1>
					<p >The thing that you look like interest or something you like to read. Save with us MYHIS</p>
					<i class="icons icon-arrow-down"></i>
					<div class="form-group form-animate-text" style="margin-top:40px !important;">
						<input type="text" class="form-text" name="email" autocomplete="off" required>
						<span class="bar"></span>
						<label>User</label>
					</div>
					<div class="form-group form-animate-text" style="margin-top:40px !important;">
						<input type="password" class="form-text" name="password" required>
						<span class="bar"></span>
						<label>Password</label>
					</div>				
					<input type="submit" class="btn col-md-12" value="SignIn">				
				</div>
					    <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="reg.html">| Signup</a>
                </div>
				<?php if ($error_login = $this->session->flashdata('error_login')): ?>
				<div class="alert alert-danger">
				     <button type="button" class="close" data-dismiss="alert">&times;</button>
					 <?php echo $error_login ;?>
				</div>
				<?php endif ?>
			</div>
		</form>
	</div>
	     <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
      <script src="<?php echo base_url()."assets/"; ?>js/jquery.ui.min.js"></script>
      <script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>

      <script src="<?php echo base_url()."assets/"; ?>js/plugins/moment.min.js"></script>
      <script src="<?php echo base_url()."assets/"; ?>js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="<?php echo base_url()."assets/"; ?>js/main.js"></script>
     
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title> ... </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/BS5/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url('assets/BS5/css/styles.css')?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Kayla Media</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
					<?php echo form_open('login/aksi_login'); ?>
			        <div class="box">
			            <div class="content-wrap ">
			                <h6>Sign In</h6>
			                <div class=""></div>
			                <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo set_value('username'); ?>">
			                <?php echo form_error('username'); ?>
			                <input name="password" class="form-control" type="password" placeholder="Password">
			                <?php echo form_error('password'); ?>
			                <div class="action">
			                    <button type="submit" value="login" class="btn btn-primary signup">Login</button>
			                </div>                
			            </div>
			        </div>
			        </form>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/BS5/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/BS5/js/custom.js')?>"></script>
  </body>
</html>
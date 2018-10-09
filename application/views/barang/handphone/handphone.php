<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title> ... </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

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
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="dash">Kayla Media</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Gak iso dipake...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login/logout">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="dash"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                    <li class="submenu current">
                    	<a href=""><i class="glyphicon glyphicon-list"></i>Koleksi<span class="caret pull-right"></span></a>
                    	<ul>
                    		<li class="current"><a href="hp">Handphone</a></li>
                    	</ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
  			<div class="content-box-large">

  				<div class="panel-heading">
					<div class="panel-title">Handphone</div>
					<div class="panel-options">
						<a href="hp/add"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah</button></a>
					</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>#</th>
								<th>ID</th>
								<th>Merek</th>
								<th>Tipe</th>
								<th>Harga</th>
								<th>Stock</th>
								<th>Kondisi</th>
								<th>Spesifikasi</th>
								<th>Foto</th>
								<th>aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach ($hp as $sw) { ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $sw-> id ?></td>
								<td><?php echo $sw-> merek ?></td>
								<td><?php echo $sw-> tipe ?></td>
								<td><?php echo $sw-> harga ?></td>
								<td><?php echo $sw-> stock ?></td>
								<td><?php echo $sw-> kondisi ?></td>
								<td><?php echo $sw-> spek ?></td>
								<td align="center"><a href="<?php echo base_url('/images/'.$sw-> foto); ?>"/><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"> <?php echo $sw-> foto ?></span></button></a></td>
								<td align="center">
									<a href="<?php echo base_url('hp/edit/'.$sw-> id);?>">
										<button class="btn btn-primary btn-xs">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
									</a>
									<a href="<?php echo base_url('hp/del/'.$sw-> id);?>" onclick="return confirm('Apakah anda yakin untuk menghapusnya?')">
										<button class="btn btn-danger btn-xs">
											<span class="glyphicon glyphicon-remove"></span>
										</button>
									</a>
								</td>
							</tr>
							<?php
								$no++;
								 } ?>
						</tbody>
					</table>
  				</div>
  			</div>



		  </div>
		</div>
    </div>
      <link href="<?php echo base_url('assets/BS5/vendors/datatables/dataTables.bootstrap.css')?>" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/BS5/bootstrap/js/bootstrap.min.js')?>"></script>

    <script src="<?php echo base_url('assets/BS5/vendors/datatables/js/jquery.dataTables.min.js')?>"></script>

    <script src="<?php echo base_url('assets/BS5/vendors/datatables/dataTables.bootstrap.js')?>"></script>

    <script src="<?php echo base_url('assets/BS5/js/custom.js')?>"></script>
    <script src="<?php echo base_url('assets/BS5/js/tables.js')?>"></script>
  </body>
</html>
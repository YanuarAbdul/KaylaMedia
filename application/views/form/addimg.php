<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>
<div class="col-md-10">
		  	<div class="row">
	  				<div class="col-md-12">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Handphone</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
			  				<?php echo $this->session->userdata('message'); ?>
			  				<?php echo form_open_multipart('hp/savimg', ['class' => 'form-horizontal', 'method' => 'post', 'role' => 'form']); ?>
			  					<?php echo form_error('filefoto'); ?>
								<div class="form-group">
								    <label class="col-sm-1 control-label">Foto</label>
								    <div class="col-sm-6">
								    	<input name="filefoto" type="file" class="btn btn-default" id="exampleInputFile1" required> 
								    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-1 col-sm-10">
										<a href="<?php echo base_url('hp'); ?>"><button type="button" class='btn btn-default'>Batal</button></a>
										 <?php echo form_submit('submit', 'Tambah', 'class="btn btn-primary"'); ?>
										
									</div> 
                				</div>
			  				<?php echo form_close(); ?>
						</div>
			  		</div>
	  			</div>
	  		</div>
	  	</div>
	  </div>
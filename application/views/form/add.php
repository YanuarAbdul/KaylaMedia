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
			  				<?php echo form_open_multipart('hp/save', ['class' => 'form-horizontal', 'method' => 'post', 'role' => 'form']); ?>
			  				<div class="form-group <?php echo (form_error('id') != '') ? 'has-error has-feedback' : '' ?>">
								    <label class="col-sm-1 control-label">ID</label>
								    <div class="col-sm-6">
								    	<div>
								      <input name="id" type="text" class="form-control"  data-mask="*****999" data-mask-placeholder="_" value="<?php echo set_value('id'); ?>">
								      <?php echo form_error('id'); ?>
								      </div>
								    </div>
								</div>
			  					<div class="form-group <?php echo (form_error('merek') != '') ? 'has-error has-feedback' : '' ?>">
								    <label class="col-sm-1 control-label">Merek</label>
								    <div class="col-sm-6">
								      <input name="merek" type="text" class="form-control" value="<?php echo set_value('merek'); ?>">
								    </div>
								</div>
								<div class="form-group <?php echo (form_error('tipe') != '') ? 'has-error has-feedback' : '' ?>">
								    <label class="col-sm-1 control-label">Tipe</label>
								    <div class="col-sm-6">
								      <input name="tipe" type="text" class="form-control" value="<?php echo set_value('tipe'); ?>">
								    </div>
								</div>
								<div class="form-group <?php echo (form_error('harga') != '') ? 'has-error has-feedback' : '' ?>">
								    <label class="col-sm-1 control-label">Harga</label>
								    <div class="col-sm-3">
								      <input name="harga" type="text" min="1" minlength="5" step="1" class="form-control" value="<?php echo set_value('harga'); ?>">
								    </div>
								</div>
								<div class="form-group <?php echo (form_error('stock') != '') ? 'has-error has-feedback' : '' ?>">
								    <label class="col-sm-1 control-label">Stock</label>
								    <div class="col-sm-2">
								      <input name="stock" type="number" class="form-control" id="inputEmail3" value="<?php echo set_value('stock'); ?>">
								    </div>
								</div>
								<div class="form-group <?php echo (form_error('kondisi') != '') ? 'has-error has-feedback' : '' ?>">
								    <label class="col-sm-1 control-label">Kondisi</label>
								    <div class="col-sm-4">
								    	<select name="kondisi" class="form-control" id="select">
								    		<option></option>
								    		<option>Baru</option>
								    		<option>Bekas</option>
								    	</select>
								    </div>
								</div>
								<div class="form-group <?php echo (form_error('spek') != '') ? 'has-error has-feedback' : '' ?>">
								    <label class="col-sm-1 control-label">Spesifikasi</label>
								    <div class="col-sm-6">
								    	<textarea name="spek" class="form-control" rows="4"><?php echo set_value('spek'); ?></textarea>
								    </div>
								</div>
								<div class="form-group">
								    <label class="col-sm-1 control-label">Foto</label>
								    <div class="col-sm-6">
								    	<input name="filefoto" type="file" class="btn btn-default" id="exampleInputFile1"> 
								    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-1 col-sm-10">
										<a href="<?php echo base_url('hp'); ?>"><button type="button" class='btn btn-default'>Batal</button></a>
										<button type="submit" value="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
									</div> 
                				</div>
			  				<?php echo form_close(); ?>
						</div>
			  		</div>
	  			</div>
	  		</div>
	  	</div>
	  </div>
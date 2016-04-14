	<?php include('header.php'); ?>

	<div class="container">
		
			<div class="row col-md-offset-2">
				<div class="col-md-8">
			<?php echo form_open('admin/login', ['class'=>'form-horizontal', 'name'=>'login_form']) ?>
	  		<fieldset>
	    		<legend>SignIn<a href="<?php echo base_url('admin/signup'); ?>" class="btn btn-primary pull-right">New User</a> </legend>

						<div class="row ">
	    				  <div class="col-md-6">
	    				  	 <div class="form-group">
  							<label for="inputEmail" class="col-md-3 control-label">User Id</label>
	      						<div class="col-md-9">
	      						<?php echo form_input(['name'=>'userid','class'=>'form-control','placeholder'=>'Users Id']) ?>
	        						
	      						</div>

	    				  </div>
	    				  </div>
	    				  <div class="col-md-6">
	    				  	<?php echo form_error('userid'); ?>
	    				  </div>
	      				</div>
	    				
	    				<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label for="inputPassword" class="col-md-3 control-label">Password</label>
	      					<div class="col-md-9">
	      					 <?php echo form_password(['name'=>'password','class'=>'form-control','id'=>'inputtypePassword','placeholder'=>'Password']) ?>
	        				</div>
							</div>
							</div>
							<div class="col-md-6">
								<?php echo form_error('password'); ?>
							</div>
	      				
	    				</div>
	    				<div class="form-group">
	      					<div class="col-md-10 col-md-offset-2">
	        					<?php echo form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'Cancel']) ?>
	        					<?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Submit']) ?>
	        				</div>
	   				 </div>
	  				</fieldset>
				<?php echo form_close() ?>
			</div>
			
			    
			</div>
		</div>
	

	<?php include('footer.php'); ?>
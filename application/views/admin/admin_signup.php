	<?php include('header.php'); ?>

	<div class="container">
		
			<div class="row">

              <div class="col-md-8" >
				<?php echo form_open('admin/signup', ['class'=>'form-horizontal', 'name'=>'register_form']) ?>
	  				<fieldset>
	    		<legend>SignUp</legend>
	    				

						<div class="row ">
	    				  <div class="col-md-6">
	    				  	 <div class="form-group">
  							<label for="name" class="col-md-3 control-label">Name</label>
	      						<div class="col-md-9">
	      						<?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name']) ?>
	        						
	      						</div>

	    				  </div>
	    				  </div>
	    				  <div class="col-md-6">
	    				  	<?php echo form_error('name'); ?>
	    				  </div>
	      				</div>
	      				<div class="row ">
	    				  <div class="col-md-6">
	    				  	 <div class="form-group">
  							<label for="email" class="col-md-3 control-label">Email</label>
	      						<div class="col-md-9">
	      						<?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email Id']) ?>
	        						
	      						</div>

	    				  </div>
	    				  </div>
	    				  <div class="col-md-6">
	    				  	<?php echo form_error('email'); ?>
	    				  </div>
	      				</div>
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
	    				<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label for="confirmPassword" class="col-md-3 control-label">Confirm Password</label>
	      					<div class="col-md-9">
	      					 <?php echo form_password(['name'=>'passconf','class'=>'form-control','id'=>'confirmPassword','placeholder'=>'Confirm Password']) ?>
	        				</div>
							</div>
							</div>
							<div class="col-md-6">
								<?php echo form_error('passconf'); ?>
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
<div class="container">
	<form action="<?php echo base_url('pages/add'); ?>" method="post">
			<h4>Employe Id <span style="color: red;">*</span></h4>
			<input type="hidden" name="id">
	        <div class="form-group"><input type="text" class="form-control" name="eid">
	        <span class="error"><?php echo form_error('eid'); ?></span>      	
	        </div>
	        <h4>Employe First Name <span style="color: red;">*</span></h4>
	        <div class="form-group"><input type="text" class="form-control" name="first_name">
	        <span class="error"><?php echo form_error('first_name'); ?></span>      	
	        </div>
	        <h4>Employe Last Name <span style="color: red;">*</span></h4>
	        <div class="form-group"><input type="text" class="form-control" name="last_name">
	        <span class="error"><?php echo form_error('last_name'); ?></span>      	
	        </div>
			
			<div class="form-group">
	            <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
	        </div>
	</form>
</div>
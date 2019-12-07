<div class="container">
	<form action="<?php echo base_url('pages/updatee')?>" method="post">
		<?php foreach($feth->result() as $fech) { ?>
			<h4>Employe Id</h4>
			<input type="hidden" name="id" value="<?php echo $fech->id ?>">
	        <div class="form-group"><input type="text" class="form-control" name="eid" value="<?php echo $fech->eid ?>">      	
	        </div>
	        <h4>Employe First Name</h4>
	        <div class="form-group"><input type="text" class="form-control" name="first_name" value="<?php echo $fech->first_name ?>">      	
	        </div>
	        <h4>Employe Last Name</h4>
	        <div class="form-group"><input type="text" class="form-control" name="last_name" value="<?php echo $fech->last_name ?>">      	
	        </div>
			
			<div class="form-group">
	            <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
	        </div>
	    <?php } ?>
	</form>
</div>
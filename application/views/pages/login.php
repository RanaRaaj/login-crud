<!DOCTYPE html>
<html lang="en">
<head>


<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}

</style>
</head>
<body>
<div class="signup-form">
    <form action="<?php echo base_url('req-login') ?>" method="post">
		<h2>Log In</h2>
        <div class="form-group"><input type="text" class="form-control" name="name" placeholder="Name">
        <span class="error"><?php echo form_error('name'); ?></span>       	
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="error"><?php echo form_error('password'); ?></span>
        </div>
		<div class="form-group">
            <span class="error"><?php echo $this->session->flashdata('error'); ?></span>
            <button type="submit" class="btn btn-success btn-lg btn-block">LogInn</button>
            <br>
            <a class="btn btn-success btn-lg btn-block" style="color: #fff;" href="<?php echo base_url('/','refresh') ?>">Register</a>
        </div>
    </form>
</div>
</body>
</html>                           

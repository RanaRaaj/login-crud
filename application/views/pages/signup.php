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
    <form action="pages/signup" method="post">
    	<a href="<?php echo base_url('login'); ?>">Login</a>
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a few Seconds.</p>
		<span style="color: #449d44;font-size: 19px;"><?php echo $this->session->flashdata('success'); ?></span>
        <div class="form-group"><input type="text" class="form-control" name="name" placeholder="Name" required="required">       	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="<?php echo base_url('login') ?>">Sign in</a></div>
</div>
</body>
</html>                            
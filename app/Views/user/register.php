<?= $this->extend("layouts/layout") ?>

<?= $this->section("content") ?>

<div class="container">
	<h3>Registration</h3>
	<?php if(isset($validation)):?>
	<div>
	   <?= $validation->listErrors() ?>
	</div>
	<?php endif;?>

	<form action="<?php echo base_url(); ?>/user/signup" method="post">
		<div class="form-group">
		    <label for="name">Name</label>
		    <input type="email" name="name" class="form-control" id="name">
		</div>
		<div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" name="email" class="form-control" id="email">
		</div>
		<div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" name="password" class="form-control" id="password">
	    </div>
	    <button type="submit" class="btn btn-primary">Sign Up</button>
	</form>

	<br>
    <div>
    	<p>Already a user sign in <a href="<?php echo base_url(); ?>/user/signin">here</a></p>
    </div>

</div>

<?= $this->endSection() ?>
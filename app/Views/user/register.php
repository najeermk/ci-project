<?= $this->extend("layouts/layout") ?>

<?= $this->section("content") ?>

<div>
	<h1>Registration</h1>
	<?php if(isset($validation)):?>
	<div>
	   <?= $validation->listErrors() ?>
	</div>
	<?php endif;?>
	<form action="<?php echo base_url(); ?>/user/signup" method="post">
	    <div>
	        <input type="text" name="name" placeholder="Name">
	    </div>
	    <div>
	        <input type="email" name="email" placeholder="Email">
	    </div>
	    <div>
	        <input type="password" name="password" placeholder="Password">
	    </div>
	    <div>
	        <button type="submit">Signup</button>
	    </div>
	</form>
</div>

<?= $this->endSection() ?>
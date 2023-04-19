<?= $this->extend("layouts/layout") ?>

<?= $this->section("content") ?>

<div class="container">
                
    <h3>Log in</h3>
    
    <?php if(session()->getFlashdata('msg')):?>
        <div>
           <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif;?>
    <form action="<?php echo base_url(); ?>/user/signinAuth" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>          
    </form>

    <br>
    <div>
        <p>Not a user sign up <a href="<?php echo base_url(); ?>/user">here</a></p>
    </div>

</div>

<?= $this->endSection() ?>
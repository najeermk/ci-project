<?= $this->extend("layouts/layout") ?>

<?= $this->section("content") ?>

<div>
                
    <h2>Login in</h2>
    
    <?php if(session()->getFlashdata('msg')):?>
        <div>
           <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif;?>
    <form action="<?php echo base_url(); ?>/user/signinAuth" method="post">
        <div>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
        </div>
        
        <div>
             <button type="submit">Signin</button>
        </div>
        <br>
        <div>
        	<p>Not a user sign up <a href="<?php echo base_url(); ?>/user">here</a></p>
        </div>     
    </form>
</div>

<?= $this->endSection() ?>
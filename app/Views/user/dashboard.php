<?= $this->extend("layouts/layout") ?>

<?= $this->section("content") ?>

<div class="container">
    <h3>Dashboard</h3>
    <h5>
        <?php 
            $session = session();
            echo "Welcome " . $session->get('name'); 
        ?>        
    </h5> 
    <br>
    <p><a href="<?php echo base_url(); ?>/user/logout">Logout</a></p>
</div>

<?= $this->endSection() ?>
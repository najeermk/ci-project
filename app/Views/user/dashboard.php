<?= $this->extend("layouts/layout") ?>

<?= $this->section("content") ?>

<div>
    <h1>Dashboard</h1>
    <h2>
        <?php 
            $session = session();
            echo "Welcome " . $session->get('name'); 
        ?>        
    </h2> 
    <br>
    <p><a href="<?php echo base_url(); ?>/user/logout">Logout</a></p>
</div>

<?= $this->endSection() ?>
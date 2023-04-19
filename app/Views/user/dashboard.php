<?= $this->extend("layouts/layout") ?>

<?= $this->section("content") ?>

<div>
    <h2>Welcome <?= $session->get('name'); ?></h2> 
</div>

<?= $this->endSection() ?
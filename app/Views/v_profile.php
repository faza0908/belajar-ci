<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Profil Pengguna</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Username:</strong> <?= 'Faza' ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= 'fazanaufalrafif@gmail.com' ?></li>
        <li class="list-group-item"><strong>Role:</strong> <?= 'admin' ?></li>
        <li class="list-group-item"><strong>Waktu Login:</strong> <?= date('Y-m-d H:i:s') ?></li>
        <li class="list-group-item"><strong>Status Login:</strong> <?= 'sampun online' ?></li>
    </ul>
</div>

<?= $this->endSection()?>
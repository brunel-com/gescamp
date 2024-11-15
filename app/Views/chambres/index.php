<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<!-- Table with CRUD actions -->
<div class="d-flex justify-content-between mb-3">
    <h4><?= esc($title) ?></h4>
    <!-- Add Room Button -->
    <a href="/chambres/create" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Ajouter
    </a>
</div>

<?php if (session()->has('chambres_create_success')): ?>
    <p class="text-error"><?= esc(session('chambres_create_success')) ?></p>
<?php endif ?>

<table id="roomsTable" class="table table-hover border rounded">
    <thead>
        <tr>
            <th>Numéro</th>
            <th>Site</th>
            <!-- <th>Capacity</th> -->
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($objList as $obj): ?>

            <tr>
                <td><?= esc($obj['numero']) ?></td>
                <td><?= esc($obj['site']) ?></td>
                <td><?= esc($obj['statut']) ?></td>
                <td>
                    <button type="button" class="btn btn-link p-0" data-bs-toggle="popover" data-bs-html="true" data-bs-content="
                            <button data-bs-toggle='modal' data-bs-target='#addRoomModal' id='updateRoomBtn' class='btn btn-outline-warning btn-sm w-100 mb-2'>
                                <i class='bi bi-pencil'></i> Modifier
                            </button>
                            <button id='deleteRoomBtn' data-bs-toggle='modal' data-bs-target='#deleteRoomModal' class='btn btn-outline-danger btn-sm w-100'>
                                <i class='bi bi-trash'></i> Supprimer
                            </button>">
                        <i class="bi bi-three-dots"></i> <!-- Vertical Ellipsis Icon -->
                    </button>
                </td>
            </tr>

        <?php endforeach ?>
        <!-- <tr>
            <td>101</td>
            <td>Site A</td>
            <td>Disponible</td>
            <td>
                <button type="button" class="btn btn-link p-0" data-bs-toggle="popover" data-bs-html="true" data-bs-content="
                            <button data-bs-toggle='modal' data-bs-target='#addRoomModal' id='updateRoomBtn' class='btn btn-outline-warning btn-sm w-100 mb-2'>
                                <i class='bi bi-pencil'></i> Modifier
                            </button>
                            <button id='deleteRoomBtn' data-bs-toggle='modal' data-bs-target='#deleteRoomModal' class='btn btn-outline-danger btn-sm w-100'>
                                <i class='bi bi-trash'></i> Supprimer
                            </button>">
                    <i class="bi bi-three-dots"></i>
                </button>
            </td>
        </tr> -->
    </tbody>
</table>



<?= $this->include('sites/create.php') ?>
<?= $this->include('sites/delete.php') ?>
<?= $this->endSection() ?>
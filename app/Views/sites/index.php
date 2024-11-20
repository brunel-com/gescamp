<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<!-- Table with CRUD actions -->
<div class="d-flex justify-content-between mb-3">
    <h4><?= esc($title) ?></h4>
    <a href="/sites/create" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Ajouter
    </a>
</div>

<table id="roomsTable" class="table table-hover border rounded">
    <thead>
        <tr>
            <th>Label</th>
            <th>Chambres</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($objList as $obj): ?>

            <tr>
                <td><?= esc($obj['label']) ?></td>
                <td>Chambres: <?= esc($obj['chambres']) ?></td>
                <td>
                    <button type="button" class="btn btn-link p-0" data-bs-toggle="popover" data-bs-html="true" data-bs-content="
                            <a href='/sites/update?id=<?= esc($obj['id']) ?>' class='btn btn-outline-warning btn-sm w-100 mb-2'>
                                <i class='bi bi-pencil'></i> Modifier
                            </a>
                            <a href='/sites/delete?id=<?= esc($obj['id']) ?>' class='btn btn-outline-danger btn-sm w-100'>
                                <i class='bi bi-trash'></i> Supprimer
                            </a>">
                        <i class="bi bi-three-dots"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
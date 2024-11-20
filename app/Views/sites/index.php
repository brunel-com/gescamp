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
                    <div class="d-flex gap-2">
                        <a href='/sites/update?id=<?= esc($obj['id']) ?>' class='btn btn-outline-warning rounded-circle btn-sm'>
                            <i class='bi bi-pencil'></i>
                        </a>
                        <a href='/sites/delete?id=<?= esc($obj['id']) ?>' class='btn btn-outline-danger rounded-circle btn-sm'>
                            <i class='bi bi-trash'></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
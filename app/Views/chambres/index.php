<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<!-- Table with CRUD actions -->
<div class="d-flex justify-content-between mb-3">
    <h4><?= esc($title) ?></h4>
    <a href="/chambres/create" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Ajouter
    </a>
</div>

<table class="table table-hover border rounded align-middle">
    <thead class="table-light">
        <tr>
            <th>Numéro</th>
            <th>Site</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($objList as $obj): ?>

            <tr>
                <td><?= esc($obj['numero']) ?></td>
                <td><?= esc($obj['site']) ?></td>
                <td><span class="tag <?= $obj['statut'] == 'DISPONIBLE' ? 'bg-success' : 'bg-danger' ?>"> <?= esc($obj['statut']) ?></span></td>
                <td>
                    <div class="d-flex gap-2">
                        <a href='/chambres/update?id=<?= esc($obj['id']) ?>' class='btn btn-outline-warning rounded-circle btn-sm'>
                            <i class='bi bi-pencil'></i>
                        </a>
                        <a href='/chambres/delete?id=<?= esc($obj['id']) ?>' class='btn btn-outline-danger rounded-circle btn-sm'>
                            <i class='bi bi-trash'></i>
                        </a>
                    </div>
                </td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between mb-3">
    <h4><?= esc($title) ?></h4>
    <a href="/equipements/create" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Ajouter
    </a>
</div>

<table class="table table-hover border rounded align-middle">
    <thead class="table-light">
        <tr>
            <th scope="col">Type</th>
            <th scope="col">Etat</th>
            <th scope="col">Chambre</th>
            <th scope="col">Quantité</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($objList as $obj): ?>
            <tr>
                <td>
                    <span class="badge bg-primary rounded-circle p-3 text-white">
                        <?= esc(ucfirst($obj['nom'][0]) . ucfirst($obj['prenom'][0])) ?>
                    </span>
                </td>
                <td><?= esc($obj['type']) ?></td>
                <td><?= esc($obj['etat']) ?></td>
                <td><?= esc($obj['chambre']) ?></td>
                <td><?= esc($obj['quantite']) ?></td>
                <td>
                    <div class="d-flex gap-2">
                        <a href='/equipements/update?id=<?= esc($obj['id']) ?>' class='btn btn-outline-warning rounded-circle btn-sm'>
                            <i class='bi bi-pencil'></i>
                        </a>
                        <a href='/equipements/delete?id=<?= esc($obj['id']) ?>' class='btn btn-outline-danger rounded-circle btn-sm'>
                            <i class='bi bi-trash'></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>

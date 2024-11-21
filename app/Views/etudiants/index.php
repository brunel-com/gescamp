<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between mb-3">
    <h4><?= esc($title) ?></h4>
    <a href="/etudiants/create" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Ajouter
    </a>
</div>

<table class="table table-hover border rounded align-middle">
    <thead class="table-light">
        <tr>
            <th scope="col">Initiales</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Classe</th>
            <th scope="col">Filière</th>
            <th scope="col">Cycle</th>
            <th scope="col">Chambre</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($objList as $obj): ?>
            <tr>
                <td>
                    <span class="badge rounded-circle p-3">
                        <?= esc(ucfirst($obj['nom'][0]) . ucfirst($obj['prenom'][0])) ?>
                    </span>
                </td>
                <td><?= esc($obj['nom']) ?></td>
                <td><?= esc($obj['prenom']) ?></td>
                <td><?= esc($obj['classe']) ?></td>
                <td><?= esc($obj['filiere']) ?></td>
                <td><?= esc($obj['cycle']) ?></td>
                <td><?= esc($obj['chambre']) ?></td>
                <td>
                    <div class="d-flex gap-2">
                        <a href='/etudiants/update?id=<?= esc($obj['id']) ?>' class='btn btn-outline-warning rounded-circle btn-sm'>
                            <i class='bi bi-pencil'></i>
                        </a>
                        <a href='/etudiants/delete?id=<?= esc($obj['id']) ?>' class='btn btn-outline-danger rounded-circle btn-sm'>
                            <i class='bi bi-trash'></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
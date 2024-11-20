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
                    <span class="badge bg-primary rounded-circle p-3 text-white">
                        JD
                    </span>
                </td>
                <td>Doe</td>
                <td>John</td>
                <td>10A</td>
                <td>Science</td>
                <td>1</td>
                <td>Room 101</td>
                <td>
                    <a href="/etudiants/update?id=<?= esc($obj['id']) ?>" class="btn btn-sm btn-primary">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="/etudiants/delete?id=<?= esc($obj['id']) ?>" class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
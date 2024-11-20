<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<!-- Main Container -->
<div class="container py-5">
    <h4><?= esc($title) ?></h4>

    <!-- Section 1: Statistic Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Sites</h5>
                    <p class="display-5 fw-bold text-primary"><?= esc(count($sites)) ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Chambres</h5>
                    <p class="display-5 fw-bold text-success"><?= esc(count($chambres)) ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Étudiants</h5>
                    <p class="display-5 fw-bold text-warning"><?= esc(count($etudiants)) ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Équipements</h5>
                    <p class="display-5 fw-bold text-danger"><?= esc(count($equipements)) ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2: Students and Rooms List -->
    <div class="row g-4 mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-4">Étudiants et Chambres</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="fw-bold">Étudiants</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">John Doe</li>
                                <li class="list-group-item">Jane Smith</li>
                                <li class="list-group-item">Robert Johnson</li>
                                <li class="list-group-item">Emily Davis</li>
                                <li class="list-group-item">Michael Brown</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold">Chambres</h6>
                            <ul class="list-group list-group-flush">
                                <?php foreach($chambres as $chambre): ?>
                                    <li class="list-group-item">Chambre <?= esc($chambre['numero']) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Equipment List -->
    <div class="row g-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-4">Équipements</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Projecteur</li>
                        <li class="list-group-item">Tableau Blanc</li>
                        <li class="list-group-item">Chaise</li>
                        <li class="list-group-item">Table</li>
                        <li class="list-group-item">Armoir</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
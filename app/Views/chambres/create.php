<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<?= service('validation')->listErrors() ?>

<div class="container py-5">
    <h2 class="text-center mb-4">Nouvelle Chambre</h2>

    <!-- Add Room Form -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form id="addRoomForm" action="/chambres/create" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="numero" class="form-label">Numéro</label>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="Numéro de la chambre" required>
                        </div>

                        <div class="mb-3">
                            <label for="site" class="form-label">Site</label>
                            <select class="form-select" id="site" name="site" required>
                                <option disabled value="">Choisir Site...</option>
                                <?php foreach ($sites as $site): ?>
                                    <option value="<?= esc($site['label']) ?>"><?= esc($site['label']) ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <select class="form-select" id="statut" name="statut" required>
                                <option disabled value="">Statut...</option>
                                <option value="DISPONIBLE">Disponible</option>
                                <option value="OCCUPEE">Occupée</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-link text-danger me-2" onclick="window.history.back()">Annuler</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
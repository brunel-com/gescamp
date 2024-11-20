<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<?= service('validation')->listErrors() ?>

<div class="container py-5">
    <h2 class="text-center mb-4"><?= esc($title) ?></h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="/equipements/create" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="<?= old('type') ?>" required />
                        </div>

                        <!-- Cycle -->
                        <div class="mb-3">
                            <label for="etat" class="form-label">État</label>
                            <select class="form-select" id="etat" name="etat" required>
                                <option selected disabled>Choisir État...</option>
                                <option value="Bon">Bon</option>
                                <option value="Endommage">Endommagé</option>
                            </select>
                        </div>

                        <!-- Chambre -->
                        <div class="mb-3">
                            <label for="roomNumber" class="form-label">Chambre</label>
                            <select class="form-select" id="chambre" name="chambre">
                                <option selected disabled>Assigner une chambre...</option>
                                <?php foreach ($chambres as $chambre): ?>
                                    <option value="<?= esc($chambre['numero']) ?>">Chambre <?= esc($chambre['numero']) ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="quantite" class="form-label">Quantité</label>
                            <input type="number" class="form-control" id="quantite" name="quantite" min="1" value="<?= old('quantite') ?>" required>
                        </div>

                        <!-- Actions -->
                        <div class="d-flex align-items-end justify-content-end mt-4">
                            <button type="button" class="btn btn-danger me-2" onclick="window.history.back()">Annuler</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
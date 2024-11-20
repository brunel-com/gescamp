<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<?= service('validation')->listErrors() ?>

<div class="container py-5">
    <h2 class="text-center mb-4"><?= esc($title) ?></h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/sites/update" method="post">
                        <?= csrf_field() ?>

                        <input type="hidden" name='id' value="<?= esc($obj['id'])?>" />

                        <div class="mb-3">
                            <label for="label" class="form-label">Label</label>
                            <input type="text" class="form-control" id="label" name="label" value="<?= esc($obj['label']) ?>" placeholder="Ex: Site A, Site B,..." required>
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
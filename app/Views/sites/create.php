<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<?= service('validation')->listErrors() ?>

<div class="container py-5">
    <h2 class="text-center mb-4">Nouveau Site</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/sites/create" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="label" class="form-label">Label</label>
                            <input type="text" class="form-control" id="label" name="label" placeholder="Ex: Site A, Site B,..." required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter Site</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
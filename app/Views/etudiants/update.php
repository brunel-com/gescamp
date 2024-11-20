<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<?= service('validation')->listErrors() ?>

<div class="container py-5">
    <h2 class="text-center mb-4"><?= esc($title) ?></h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Add Student Form -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="/etudiants/update" method="post">
                        <?= csrf_field() ?>

                        <input type="hidden" name='id' value="<?= esc($obj['id'])?>" />

                        <!-- First Name -->
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="<?= esc($obj['nom'])?>" placeholder="Entrer nom" required>
                        </div>
                        <!-- Last Name -->
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="<?= esc($obj['prenom'])?>" placeholder="Enter prénom" required>
                        </div>

                        <!-- Classe -->
                        <div class="mb-3">
                            <label for="class" class="form-label">Classe</label>
                            <input type="text" class="form-control" id="class" name="classe" value="<?= esc($obj['classe'])?>" placeholder="Entrer classe (e.g., INFO 1)" required>
                        </div>

                        <!-- Filière -->
                        <div class="mb-3">
                            <label for="department" class="form-label">Filière</label>
                            <select class="form-select" id="filiere" name="filiere" required>
                                <option selected disabled>Choisir Filière...</option>
                                <option <?= $obj['filiere'] == 'Ingenieure' ? 'selected' : '' ?> value="Ingenieure">Ingénieure</option>
                                <option <?= $obj['filiere'] == 'Analyste Programmeur' ? 'selected' : '' ?> value="Analyste Programmeur">Analyste Programmeur</option>
                            </select>
                        </div>

                        <!-- Cycle -->
                        <div class="mb-3">
                            <label for="level" class="form-label">Cycle</label>
                            <select class="form-select" id="cycle" name="cycle" required>
                                <option selected disabled>Choisir Cycle...</option>
                                <option <?= $obj['cycle'] == 'DUT' ? 'selected' : '' ?> value="DUT">DUT</option>
                                <option <?= $obj['cycle'] == 'Licence' ? 'selected' : '' ?> value="Licence">Licence</option>
                                <option <?= $obj['cycle'] == 'Master' ? 'selected' : '' ?> value="Master">Master</option>
                            </select>
                        </div>

                        <!-- Chambre -->
                        <div class="mb-3">
                            <label for="roomNumber" class="form-label">Chambre</label>
                            <select class="form-select" id="chambre" name="chambre">
                                <option selected disabled>Assigner une chambre...</option>
                                <option value="DUT">EX Chambre</option>
                            </select>
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
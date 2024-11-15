<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<!-- Container for the Add Room Page -->
<div class="container py-5">
    <h2 class="text-center mb-4">Nouvelle Chambre</h2>

    <!-- Add Room Form -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form id="addRoomForm">
                        <div class="mb-3">
                            <label for="roomName" class="form-label">Numéro</label>
                            <input type="text" class="form-control" id="roomName" placeholder="Numéro de la chambre" required>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="number" class="form-control" id="capacity" placeholder="Enter Capacity" required>
                        </div> -->
                        <div class="mb-3">
                            <label for="roomType" class="form-label">Site</label>
                            <select class="form-select" id="roomType" required>
                                <option value="">Choisir Site...</option>
                                <option value="Standard">Ex 1</option>
                                <option value="Deluxe">Ex 2</option>
                                <option value="Suite">Ex 3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="roomType" class="form-label">Statut</label>
                            <select class="form-select" id="roomType" required>
                                <option value="">Statut...</option>
                                <option value="Standard">Disponible</option>
                                <option value="Deluxe">Occupé</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-link text-danger me-2" data-bs-toggle="modal" data-bs-target="#cancelModal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Cancel Modal -->
<div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="cancelModalLabel">Cancel Room Creation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to cancel? All changes will be lost.</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel Creation</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
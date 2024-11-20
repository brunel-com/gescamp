<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<div class="container py-5">
  <h2 class="text-center mb-4"><?= esc($title) ?></h2>
  <div class="col-md-5">
    <div class="card shadow-sm">
      <form action="/chambres/delete" method="post" class="card-body">
        <h5 class="card-title">Confirmer la suppression</h5>
        <p class="card-text">Voulez vous vraiment supprimer la chambre ? Notez que cette action est irreversible.</p>
        <div class="d-flex justify-content-end">
          <a href="/chambres" class="btn btn-secondary">Annuler</a>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Room Modal -->
<!-- <div class="modal fade" id="deleteRoomModal" tabindex="-1" aria-labelledby="deleteRoomModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/chambres/delete" method="post" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteRoomModalLabel">Confirmer la suppression</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Voulez vous vraiment supprimer la chambre ? Notez que cette action est irreversible.</p>
        <input type="hidden" name="id" value="6">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Supprimer</button>
      </div>
    </form>
  </div>
</div> -->
<?= $this->endSection() ?>
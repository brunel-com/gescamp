<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<div class="container py-5">
  <h2 class="text-center mb-4"><?= esc($title) ?></h2>
  <div class="col-md-5 mx-auto">
    <div class="card shadow-sm mt-4">
      <form action="/sites/delete" method="post" class="card-body">
        <?= csrf_field() ?>
        <input type="hidden" name='id' value="<?= esc($obj['id']) ?>" />

        <h5 class="card-title">Confirmer la suppression</h5>
        <p class="card-text">Voulez vous vraiment supprimer ce site ? Notez que cette action est irreversible.</p>
        <div class="d-flex justify-content-end gap-3">
          <a href="/sites" class="btn btn-secondary">Annuler</a>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
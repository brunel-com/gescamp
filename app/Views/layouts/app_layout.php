<!doctype html>
<html>

<head>
    <title>GesCamp</title>
    <link rel="stylesheet" href="/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css" />
    <link href="/css/app.css" rel="stylesheet" />
</head>

<body>

    <?php if (session()->has('flash_operation_success')): ?>
        <div id="app-success-alert" class="app-alert alert alert-success alert-dismissible fade show" role="alert">
            Opération effectuée avec succès
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>

    <?php if (session()->has('flash_operation_error')): ?>
        <div id="app-error-alert" class="app-alert alert alert-danger alert-dismissible fade show" role="alert">
            Erreur lors de l'opération
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>

    <?= $this->include('layouts/app_bar') ?>

    <main class="container mt-4">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="container mt-5">
        <em>&copy; Copyright Brunel.com 2024 - Tout droits reservés</em>
    </footer>
    <script src="/lib/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>
<!doctype html>
<html>

<head>
    <title>GesCamp</title>
    <link rel="stylesheet" href="/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <link href="/css/app.css" rel="stylesheet" />
</head>

<body>

    <?= $this->include('layouts/app_bar') ?>

    <main class="container mt-4">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="container mt-5">
        <em>&copy; Footer Brunel.com 2024</em>
    </footer>
     <!-- jQuery (required for DataTables) -->
     <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- DataTables JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="lib/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
</body>

</html>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-xxl">
        <!-- Logo -->
        <a class="navbar-brand" href="/">GesCamp</a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul id="app-bar" class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sites">Sites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/chambres">Chambres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/etudiants">Etudiants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/equipements">Équipements</a>
                </li>
                <li class="nav-item ms-4">
                    <form action="/logout" method="get">
                        <button type="submit" class="btn btn-danger" href="#">Se déconnecter</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Breadcrumb -->
<div class="breadcrumb-container">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= esc(base_url()) ?>">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a class="active" href="<?= esc(current_url()) ?>"><?= ucfirst(uri_string()) ?></a></li>
            </ol>
        </nav>
    </div>
</div>
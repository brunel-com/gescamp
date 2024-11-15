<style>
    /* Custom Navbar Styling */
    .navbar {
        background-color: #fff;
        border-bottom: 1px solid #e0e0e0;
        /* Thin bottom border instead of shadow */
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.8rem;
        letter-spacing: 0.1em;
        background: linear-gradient(90deg, #0047ab, #007bff, #00aaff);
        /* Steady blue gradient */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
        /* Sleek and elegant font */
    }

    .navbar-brand::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        height: 100%;
        width: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
        animation: shine 2s infinite;
    }

    @keyframes shine {
        0% {
            left: -100%;
        }

        100% {
            left: 100%;
        }
    }



    .navbar-nav .nav-link {
        color: #555;
        transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover {
        color: #007bff;
    }


    /* Breadcrumb styling */
    .breadcrumb-container {
        background-color: #f8f9fa;
        padding: 0.75rem 1rem;
        border-top: 1px solid #e0e0e0;
    }

    .breadcrumb {
        margin: 0;
        background-color: transparent;
    }

    .breadcrumb-item a {
        color: #007bff;
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }
</style>

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
            <ul class="navbar-nav">
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
                    <a class="nav-link" href="#">Contact</a>
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
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="#">Chambres</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
            </ol>
        </nav>
    </div>
</div>
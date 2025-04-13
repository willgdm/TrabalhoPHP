<!DOCTYPE html>
<html>
<head>
    <title><?= $tituloPagina ?? "Lista" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f1ec;
            color: #2e2e2e;
        }

        .navbar {
            background-color: #5c3d2e !important;
        }

        .navbar .nav-link,
        .navbar-brand {
            color: #fefcf8 !important;
        }

        .btn-primary {
            background-color: #8b5e3c;
            border-color: #8b5e3c;
        }

        .btn-secondary {
            background-color: #bfa58a;
            border-color: #bfa58a;
            color: #2e2e2e;
        }

        .btn-outline-light {
            color: #fefcf8;
            border-color: #fefcf8;
        }

        .btn-outline-light:hover {
            background-color: #8b5e3c;
            border-color: #8b5e3c;
        }

        .card {
            background-color: #fffaf3;
            border-color: #d6c5b0;
        }

        .card-title,
        .card-text {
            color: #2e2e2e;
        }

        .form-control {
            background-color: #fefcf8;
            border-color: #ccc;
            color: #2e2e2e;
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
            object-position: center;
        }
        .img-detalhe {
            max-height: 350px;
            width: auto;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
    </head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Lista</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                <?php if (isset($_SESSION["logado"]) && $_SESSION["logado"]): ?>
                    <li class="nav-item"><a class="nav-link" href="protegido.php">Área Protegida</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
            <form class="d-flex" method="get" action="index.php">
                <input class="form-control me-2" type="search" name="buscar" placeholder="Buscar por nome ou ocupação" value="<?= htmlspecialchars($_GET['buscar'] ?? '') ?>">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-4">
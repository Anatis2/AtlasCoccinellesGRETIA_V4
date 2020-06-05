<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Vérification de la compatibilité avec Internet explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Adaptation aux écrans mobiles (occupation de tout l'espace disponible) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link href="css/style.css" rel="stylesheet" />
    <title>Atlas des coccinelles du grand ouest</title>
</head>

<body>

    <div class="container-fluid" id="container">

        <div class="position-fixed headerNav">
            <header class="row" id="header">
                <a class="col-sm-2 col-md-2 col-lg-2" href="http://www.gretia.org/" target="_blank" title="Aller sur le site du GRETIA"><img class="logoGretia" src="images/logo_gretia_reduit2.jpg" alt="logo du GRETIA"/></a>
                <h1 class="col-sm-10 col-md-10 col-lg-10" id="headerH1">Atlas des coccinelles du grand ouest</h1>
            </header>

            <nav class="navbar navbar-expand-lg navbar-light" id="nav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=actualites">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=reconnaitre">Reconnaître une coccinelle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=biologie">Biologie / écologie</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?action=avancement" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avancement de l’atlas</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#sectionAvancementCartesGlobales">Cartes globales</a>
                                <a class="dropdown-item" href="#sectionAvancementCartesEspeces">Cartes à l'espèce</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=participer">Participer à l’atlas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=ressources">Ressources</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


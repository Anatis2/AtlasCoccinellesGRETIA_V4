

<?php

    $action='accueil';

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    switch ($action) {
        case 'accueil':
            include("vue/header.php");
            include("vue/sectionAccueil.php");
            include("vue/footer.php");
            break;
        case 'actualites':
            include("vue/header.php");
            include("vue/sectionActualites.php");
            include("vue/footer.php");
            break;
        case 'reconnaitre':
            include("vue/header.php");
            include("vue/sectionReconnaitre.php");
            include("vue/footer.php");
            break;
        case 'biologie':
            include("vue/header.php");
            include("vue/sectionBiologie.php");
            include("vue/footer.php");
            break;
        case 'avancement':
            include("vue/header.php");
            include("vue/sectionAvancement.php");
            include("vue/footer.php");
            break;
        case 'participer':
            include("vue/header.php");
            include("vue/sectionParticiper.php");
            include("vue/footer.php");
            break;
        case 'ressources':
            include("vue/header.php");
            include("vue/sectionRessources.php");
            include("vue/footer.php");
            break;
    }

?>

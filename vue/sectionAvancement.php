        <section id="sectionAvancementCartesGlobales">
            <h3>Avancement de l'atlas (cartes globales)</h3>

            <div class="margeDiv avancementGrandOuest">
                <h4>Sur l'ensemble du Grand Ouest</h4>

                <p>
                    Voici la carte du nombre d'espèces connues par maille de 10X10 km début 2018 sur l'ensemble de notre zone de prospection.<br/>
                    Vous pouvez cliquer sur la carte pour l'aggrandir.
                </p>

                <figure>
                    <a href="./images/Cartes/NbEspecesMaillesGrandOuest2018Reduit.jpg" target="_blank" title="Cliquez pour agrandir"><img src="./images/Cartes/NbEspecesMaillesGrandOuest2018Reduit.jpg" class="imageReduite" alt="EspecesMaillesGrandOuest"/></a>
                    <figcaption><strong>Nombre d'espèces connues par maille sur le Grand Ouest</strong></figcaption>
                </figure>
            </div>

            <div class="margeDiv avancementNormandie">
                <h4>En Normandie</h4>

                <p>
                    Afin de vous aider dans vos prospections, voici une carte de la Basse-Normandie, délimitée par mailles de 10X10 km.
                </p>

                <figure>
                    <a href="./images/Cartes/NomsMaillesBN.png" target="_blank" title="Cliquez pour agrandir"><img src="./images/Cartes/NomsMaillesBN.png" class="imageReduite" alt="CartoMailles"/></a>
                    <figcaption><strong>Représentation cartographique des mailles pour la Basse-Normandie</strong></figcaption>
                </figure>

                <p>
                    Et voici l'état d'avancement du nombre d'espèces connues par maille en 2018 :
                </p>

                <figure>
                    <a href="./images/Cartes/NbEspecesMaillesBN2018.jpeg" target="_blank" title="Cliquez pour agrandir"><img src="./images/Cartes/NbEspecesMaillesBN2018.jpeg" class="imageReduite" alt="EspecesMaillesBN"/></a>
                    <figcaption><strong>Nombre d'espèces connues par maille en Basse-Normandie</strong></figcaption>
                </figure>

                <p>
                    Vous trouverez, <a href="Telechargements/CorrespondanceMaillesCommunesReduit.pdf" target="_blank">en cliquant ici</a>, un document qui effectue la correspondance entre les communes bas-normandes et le nom des mailles.
                </p>

                <p>
                    Au sommaire :
                    <ul>
                        <li>La carte bas-normande des mailles en 10*10km</li>
                        <li>La carte du nombre d'espèces par maille en Basse-Normandie</li>
                        <li>Une table de correspondance des mailles, avec une entrée par commune classées par ordre alphabétique</li>
                        <li>Une table de correspondance des mailles, avec une entrée par maille</li>
                    </ul>
                </p>

                <p>
                    Enfin, voici une cartographie en ligne du nombre d'espèces par maille en Basse-Normandie :
                    <a href="https://qgiscloud.com/GRETIA/Coccinelles_BN/" target="_blank">Lien vers la cartographie en ligne</a>
                </p>

            </div>

            <div class="margeDiv avancementBretagne">
                <h4>En Bretagne</h4>

                <p>
                    Etat d'avancement du nombre d'espèces connues par maille dans le département des Côtes d'Armor (22) en 2018 :
                </p>

                <figure>
                    <a href="./images/Cartes/NbEspecesMaillesCotesArmor2018.jpg" target="_blank"><img src="./images/Cartes/NbEspecesMaillesCotesArmor2018.jpg" class="imageReduite" alt="EspecesMailles22"/></a>
                    <figcaption><strong>Nombre d'espèces connues par maille dans le département des Côtes d'Armor</strong></figcaption>
                </figure>

                <p>Pour plus d'informations sur les coccinelles des Côtes d'Armor (galerie photos, cartes de répartition par espèce, ...) :
                    <a href="http://www.nature22.com/coccinelles22/accueil.html" target="_blank">lien vers le site "coccinelles 22"</a>.
                </p>

            </div>

            <div class="margeDiv avancementPaysDeLoire">
                <h4>En Pays de la Loire</h4>

                <p>
                    A venir...
                </p>
            </div>

            <div class="margeDiv avancementAutres">
                <h4>Autres</h4>

                <p>
                    A venir...
                </p>
            </div>

            <div class="margeDiv">
                <a href="#" class="retourHautDePage">Retour en haut de page</a>
            </div>
        </section>

        <section class="container" id="sectionAvancementCartesEspeces">
            <h3>Avancement de l'atlas (cartes à l'espèce)</h3>

                <h4>Lambert93</h4>

                <div class="row">

                <?php
                    $ext_list = Array("jpg", "jpeg", "bmp", "gif", "png"); // Liste des extensions de photo 
                    $listephotos = Array(); 
                    $dossier = opendir("./images/Cartes/GrandOuest2020L93/"); // Ouvre le dossier 
                    for($i=0 ; $f=readdir($dossier) ; $i++) { 
                        $listephotos[$i] = $f; // Ajoute la photo  
                    }
                    closedir($dossier); // On n'a plus besoin du dossier 
                    sort($listephotos); // Trie par ordre alphabétique 
                    // Et maintenant, on affiche. 
                    foreach($listephotos as $nom) { 
                        $nbASuppr = 4;
                        $nomSansExtension = substr($nom, 0, -$nbASuppr);
                        if ($nom != "." && $nom != "..") {
                ?>

                <div class="col" style="margin-bottom: 60px;">
                    <a href="./images/Cartes/GrandOuest2020L93/<?php echo $nom; ?>" target="_blank">
                        <img src="./images/Cartes/GrandOuest2020L93/<?php echo $nom; ?>" style="min-width: 300px; width: 60%;" class="imageReduiteCol" alt="<?php echo $nom; ?>"/>
                    </a>
                    <figcaption><strong><?php echo $nomSansExtension; ?></strong></figcaption>
                </div>


                <?php
                        }
                    }
                ?>

                </div>

                <div class="margeDiv">
                    <a href="#" class="retourHautDePage">Retour en haut de page</a>
                </div>
        </section>

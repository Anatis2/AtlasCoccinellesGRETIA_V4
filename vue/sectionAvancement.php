        <section id="sectionAvancementCartesGlobales">
            <h3>Avancement de l'atlas (cartes globales)</h3>

            <div class="margeDiv avancementGrandOuest">
                <p>
                    Cartes du nombre d'espèces connues par maille en mai 2020 sur l'ensemble du Grand Ouest (cliquez sur les cartes pour les aggrandir).
                </p>

                <div class="row">
                    <div class="col">
                        <figure>
                            <a href="./images/Cartes/nbespecesmaillesgrandouest2020L93.jpeg" target="_blank" title="Cliquez pour agrandir">
                                <img src="./images/Cartes/nbespecesmaillesgrandouest2020L93Reduit.jpeg" class="imageReduite" alt="EspecesMaillesGrandOuest"/>
                            </a>
                            <figcaption><strong>Nombre d'espèces connues par maille (L93) sur le Grand Ouest</strong></figcaption>
                        </figure>
                    </div>

                    <div class="col">
                        <figure>
                            <a href="./images/Cartes/nbespecesmaillesgrandouest2020UTM.jpeg" target="_blank" title="Cliquez pour agrandir">
                                <img src="./images/Cartes/nbespecesmaillesgrandouest2020UTMReduit.jpeg" class="imageReduite" alt="EspecesMaillesGrandOuest"/>
                            </a>
                            <figcaption><strong>Nombre d'espèces connues par maille (UTM) sur le Grand Ouest</strong></figcaption>
                        </figure>
                    </div>
                    
                </div>

                
            </div>

            <div class="margeDiv avancementNormandie">
                <h4>En Normandie</h4>

                <p>Nom des mailles UTM 10X10 km pour la Basse-Normandie.</p>

                <figure>
                    <a href="./images/Cartes/NomsMaillesBN.png" target="_blank" title="Cliquez pour agrandir"><img src="./images/Cartes/NomsMaillesBN.png" class="imageReduite" alt="CartoMailles"/></a>
                    <figcaption><strong>Représentation cartographique des mailles pour la Basse-Normandie</strong></figcaption>
                </figure>

                <p>
                    Pour télécharger le document effectuant la correspondance entre les communes bas-normandes et le nom des mailles, <a href="Telechargements/CorrespondanceMaillesCommunesReduit.pdf" target="_blank">cliquez ici !</a>
                    <br/><br/>
                    Vous y trouverez :
                    <ul>
                        <li>La carte bas-normande des mailles en 10*10km</li>
                        <li>La carte du nombre d'espèces par maille en Basse-Normandie</li>
                        <li>Une table de correspondance des mailles, avec une entrée par commune classées par ordre alphabétique</li>
                        <li>Une table de correspondance des mailles, avec une entrée par maille</li>
                    </ul>
                </p>

        </section>


        <section id="sectionAvancementCartesEspeces" style="padding-top: 60px;">
            <h3>Avancement de l'atlas (cartes à l'espèce)</h3>

                <div class="accordion" id="accordionExample">
                    <button class="btn btn-link text-left dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Maillage Lambert93
                    </button>
                    <br/><br/>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        
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

                            <div class="col" style="margin-bottom: 60px; text-align: center;">
                                <a href="./images/Cartes/GrandOuest2020L93/<?php echo $nom; ?>" target="_blank">
                                    <img src="./images/Cartes/GrandOuest2020L93/<?php echo $nom; ?>" style="min-width: 300px; width: 60%;" alt="<?php echo $nom; ?>"/>
                                </a>
                                <p style="margin-top: 10px;"><strong><?php echo $nomSansExtension; ?></strong></p>
                            </div>

                        <?php
                                }
                            }
                        ?>

                        </div>
                    </div>

                    <button class="btn btn-link text-left dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                        Maillage UTM
                    </button>
                    <br/><br/>

                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        
                        <div class="row">

                        <?php
                            $ext_list = Array("jpg", "jpeg", "bmp", "gif", "png"); // Liste des extensions de photo 
                            $listephotos = Array(); 
                            $dossier = opendir("./images/Cartes/GrandOuest2020UTM/"); // Ouvre le dossier 
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

                        <div class="col" style="margin-bottom: 60px; text-align: center;">
                            <a href="./images/Cartes/GrandOuest2020UTM/<?php echo $nom; ?>" target="_blank">
                                <img src="./images/Cartes/GrandOuest2020UTM/<?php echo $nom; ?>" style="min-width: 300px; width: 60%;" alt="<?php echo $nom; ?>"/>
                            </a>
                            <p style="margin-top: 10px;"><strong><?php echo $nomSansExtension; ?></strong></p>
                        </div>


                        <?php
                                }
                            }
                        ?>

                        </div>

                    </div>
                    
                </div>
        </section>

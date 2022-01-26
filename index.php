<?php include("header.php");
?>
    <main id="content" class="container">
        <!-- bloc bienvenue -->
        <div id="welcome" class="cadre_inset">
            <div id="intro">
                <h2>Qui sommes-nous?</h2>
                <p> Depuis maintenant 22 ans Projet Forge poursuit son chemin dans la coutellerie.</p>
                    <p>Yvan Descouteaux, coutelier forgeron, vous propose des couteaux, des haches et des épées forgés.</p>
                    <p>Toutes nos pièces sont forgées avec le même objectif : la qualité doit être au rendez-vous et la pièce à la hauteur des demandes du client.</p>

            </div>
        </div>
        <!--  les différentes sections de la page d'accueil  -->
        <section id="creations">
            <h3>Nos créations</h3>
    <!-- Slider css uniquement, sera modifié en JS -->
            <div class="slider-container">
                <div class="slider">
                    <div class="slides">
                        <div id="slides__1" class="slide">
                            <span class="slide__image"><img class="slide" src="images/hache-1280.jpg"
                                    alt="hache viking"></span>
                        </div>
                        <div id="slides__2" class="slide">
                            <span class="slide__image"><img class="slide" src="images/Couteau-1280.jpg"
                                    alt="Couteau"></span>
                        </div>
                        <div id="slides__3" class="slide">
                            <span class="slide__image"><img class="slide" src="images/katana-1280.jpg"
                                    alt="katana"></span>
                        </div>
                    </div>
                    <!-- trois points qui permettent de basculer les images -->
                    <div class="slider__nav"></div>
                        <a class="slider__navlink" href="#slides__1"></a>
                        <a class="slider__navlink" href="#slides__2"></a>
                        <a class="slider__navlink" href="#slides__3"></a>
                    </div>
                    <div id="creation_button">
                        <a href="creations.php">Voir plus</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- bloc stage -->
        <section id="internship">
            <h3>Stage de forge</h3>
            <article class="photo_stage">
                <p>Venez forger votre couteau et faire votre étui en cuir en Bretagne, dans le morbihan, près de Vannes.</p>
                <a href="#/"><img src="images/enclume.jpg" alt="marteau et enclume"></a>
            </article>
            <article class="photo_stage">
                <p>Pas besoin de connaissance particulière. Découvrir un métier : forgeron et travailler l’acier, le bois et le cuir tout cela en 3 jours.</p>
                <a href="#/"><img src="images/forge1.jpg" alt="marteau et enclume"></a>
            </article>
            <article class="photo_stage">
                <p>
                    Forger son couteau, dessiner la lame, la forger, monter le manche et faire votre étui en cuir, un cadeau qui sort de l’ordinaire. </p>
                <a href="#/"><img src="images/forge2.jpg" alt="marteau et enclume"></a>
            </article>
        </section>
    <!-- bloc boutique -->
        <section id="shop">
            <h3>Boutique</h3>
            <article class="boutique">
                <img src="images/hache2.jpg" alt="hache viking avec gravure">
                <a href="#/" class="shop_button">Consulter notre boutique</a>
            </article>
            <article class="boutique" id="affutage">
                <img src="images/affutage1.jpg" alt="Affutage d'une hache">
                <a href="#/" class="shop_button">Entretenez vos lames</a>
            </article>
        </section>
    </main>
    <?php include("footer.php");
?>
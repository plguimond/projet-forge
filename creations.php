<?php
include("header.php");
require_once("Classes/createProduct.php")

?>
<main id="content" class="container">
    <div id="welcome_creations" class="cadre_inset">
        <h2>Nos créations</h2>
        <p>Vous trouverez dans cette section les différentes créations que nous avons pu réaliser au cours des dernières
            années.
        <p>Nous nous spécialisons dans la fabrication de couteaux, mais nous réalisons entre autres des haches et
            différent type d'épées.</p>
        <p>Toutes nos lames sont fabriquées en acier carbonne et certaines utilisent un procédé qui permet de souder
            deux types d'acier et de faire apparaître un motif après trempage dans un acide.</p>
    </div>

    <!-- Navigation dans les catégories-->
    <nav id="menu_produit">
        <div class="bloc_gris">
            <ul>
                <li><a href="#couteau">
                        <p>Nos couteaux</p>
                    </a></li>
                <li><a href="#hache">
                        <p>Nos haches</p>
                    </a></li>
                <li><a href="#epe">
                        <p>Nos épées</p>
                    </a></li>

            </ul>
        </div>
    </nav>
    <!-- chaque section représente une catégories de produits avec ses articles -->
    <section id="couteau" class="product">
        <h3>Nos couteaux</h3>
        <?php if (isset($couteaux)) {
            foreach ($couteaux as $couteau) {
        ?>
                <article class="card">
                    <a href="couteaux.php?id=<?= array_search($couteau, $couteaux); ?>">
                        <img src=<?= $couteau->getPicture(); ?> alt=<?= $couteau->getTitle(); ?>>
                        <div class="contenu_card">
                            <h4><?= $couteau->getTitle(); ?></h4>
                            <p><?= $couteau->getAccroche(); ?></p>
                        </div>
                    </a>
                </article>
        <?php
            };
        };
        ?>
        <!-- <article class="card">
            <a href="couteau2.php">
                <img src="images/couteau2.jpg" alt="couteau et etui en cuir">
                <div class="contenu_card">
                    <h4>Couteau de chasse</h4>
                    <p>Petit couteau de chasse et son étui</p>
                </div>
            </a>
        </article>
        <article class="card">
            <a href="couteau3.php">
                <img src="images/couteau3.jpg" alt="Couteau manche bois">
                <div class="contenu_card">
                    <h4>Couteau lame damas</h4>
                    <p>Petit couteau avec manche bi-matière</p>
                </div>
            </a>
        </article> -->

    </section>
    <section id="hache" class="product">
        <h3>Nos haches</h3>
        <?php if (isset($haches)) {
            foreach ($haches as $hache) {
        ?>
                <article class="card">
                    <a href="haches.php?id=<?= array_search($hache, $haches); ?>">
                        <img src=<?= $hache->getPicture(); ?> alt=<?= $hache->getTitle(); ?>>
                        <div class="contenu_card">
                            <h4><?= $hache->getTitle(); ?></h4>
                            <p><?= $hache->getAccroche(); ?></p>
                        </div>
                    </a>
                </article>
        <?php
            };
        }; 
        ?>
        <!-- <article class="card">
            <a href="hache1.php">
                <img src="images/hache1.jpg" alt="Tomahawk">
                <div class="contenu_card">
                    <h4>Tomahawk</h4>
                    <p>Hache Tomahawk style moderne</p>
                </div>
            </a>
        </article>
        <article class="card">
            <a href="hache2.php">
                <img src="images/hache2.jpg" alt="hache viking">
                <div class="contenu_card">
                    <h4>Hache Viking</h4>
                    <p>Hache viking avec gravure sur lame</p>
                </div>
            </a>
        </article>
        <article class="card">
            <a href="hache3.php">
                <img src="images/hache3.jpg" alt="hachette">
                <div class="contenu_card">
                    <h4>Hachette</h4>
                    <p>Petite hache compact pour le bushcraft</p>
                </div>
            </a>
        </article> -->
    </section>
    <section id="epe" class="product">
        <h3>Nos épées</h3>

        <?php if (isset($epees)) {
            foreach ($epees as $epee) {
        ?>
                <article class="card">
                    <a href="epees.php?id=<?= array_search($epee, $epees); ?>">
                        <img src=<?= $epee->getPicture(); ?> alt=<?= $epee->getTitle(); ?>>
                        <div class="contenu_card">
                            <h4><?= $epee->getTitle(); ?></h4>
                            <p><?= $epee->getAccroche(); ?></p>
                        </div>
                    </a>
                </article>
        <?php
            };
        }; 
        ?>

        <!-- <article class="card">
            <a href="epe1.php">
                <img src="images/katana-1280.jpg" alt="sabre japonais">
                <div class="contenu_card">
                    <h4>Katana</h4>
                    <p>Magnifique katana avec lame forgée à la main</p>
                </div>
            </a>
        </article>
        <article class="card">
            <a href="epe2.php">
                <img src="images/poignard.jpg" alt="dague">
                <div class="contenu_card">
                    <h4>Dague</h4>
                    <p>Dague avec manche incurvé</p>
                </div>
            </a>
        </article>
        <article class="card">
            <a href="epe3.php">
                <img src="images/sabre1.jpg" alt="Collection de sabres">
                <div class="contenu_card">
                    <h4>Lot de Sabres</h4>
                    <p>Lot de trois sabres de cavalerie</p>
                </div>
            </a>

        </article> -->
    </section>
</main>


<?php include("footer.php");
?>
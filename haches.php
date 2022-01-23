<?php include("header.php");
require_once("Classes/createProduct.php");
$id = (int)$_GET["id"];
?>
<main id="content" class="container">
    <figure id="description">

        <figcaption id="description_produit" class="cadre_inset">
            <h2><?= $haches[$id]->title(); ?></h2>
            <?= $haches[$id]->info(); ?>
        </figcaption>
        <img src=<?= $haches[$id]->picture(); ?> alt=<?= $haches[$id]->picture(); ?>>
       
    </figure>
    <a href="creations.php#couteau" class="bouton_retour">Retour</a>


</main>


<?php include("footer.php");
?>



<?php include("header.php");
require_once("Classes/createProduct.php");
$id = (int)$_GET["id"];
?>
<main id="content" class="container">
    <figure id="description">

        <figcaption id="description_produit" class="cadre_inset">
            <h2><?= $couteaux[$id]->title(); ?></h2>
            <p><?= $couteaux[$id]->info(); ?></p>
        </figcaption>
        <img src=<?= $couteaux[$id]->picture(); ?> alt=<?= $couteaux[$id]->picture(); ?>>
       
    </figure>
    <a href="creations.php#couteau" class="bouton_retour">Retour</a>


</main>


<?php include("footer.php");
?>



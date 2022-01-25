<?php include("header.php");
require_once("Classes/createProduct.php");
$id = (int)$_GET["id"];
?>
<main id="content" class="container">
    <figure id="description">

        <figcaption id="description_produit" class="cadre_inset">
            <h2><?= $couteaux[$id]->getTitle(); ?></h2>
            <?= $couteaux[$id]->getInfo(); ?>
        </figcaption>
        <img src=<?= $couteaux[$id]->getPicture(); ?> alt=<?= $couteaux[$id]->getPicture(); ?>>
       
    </figure>
    <a href="creations.php#couteau" class="bouton_retour">Retour</a>


</main>


<?php include("footer.php");
?>



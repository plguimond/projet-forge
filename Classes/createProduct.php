<?php

require_once("Product.php");
require_once("Couteau.php");
require_once("Hache.php");
require_once("Epee.php");

// int $id, string $picture, string $title, string $accroche, string $info, float $price

$couteau1 = new Couteau(
    1,
    "images/couteau1.jpg",
    "Couteau artisanal",
    "Couteau avec lame forgée style damas",
    "<p>La lame de ce couteau est forgée avec deux type d'acier pour créer l'effet acier damas.</p>
        <p>Le manche du couteau est composé d'une pleine soie et ses plaquettes sont fabriquées dans de l'ivoire artificiel</p>
        <p>Le tout est assemblé avec 3 rivets.</p>
        <p>Un trou a été percé dans le bout du manche pour y accrocher une sangle ou pour faciliter son rangement.</p>",
    129.99
);
$couteau2 = new Couteau(
    2,
    "images/couteau2.jpg",
    "Couteau de chasse",
    "Petit couteau de chasse et son étui",
    "<p>La lame de ce couteau est forgée avec deux type d'acier pour créer l'effet acier damas.</p>
        <p>Le manche du couteau est fabriqué à partir de bois de noyer.</p>
        <p>La lame et le manche sont separés par une garde en acier style damas.</p>
        <p>Son etui sur mesure est fabriqué en cuir teint et est pourvu d'une sangle pour la ceinture.</p>",
    149.99
);
$couteau3 = new Couteau(
    3,
    "images/couteau3.jpg",
    "Couteau lame damas",
    "Couteau avec manche bi-matière",
    "<p>La lame de ce couteau est forgée avec deux type d'acier pour créer l'effet acier damas. Le fil de celle-ci est en acier carbonne.</p>
        <p>Le manche du couteau est fabriqué à partir de bois de noyer et de bois de cerf poli.</p>
        <p>La lame et le manche sont separés par une mitre en vieux fer.</p>",
    99.99
);
$couteaux = [$couteau1, $couteau2, $couteau3];


$hache1 = new Hache(
    1,
    "images/hache1.jpg",
    "Tomahawk",
    "Hache Tomahawk style moderne",
    "<p>Création d'un Tomahawk dans un style moderne.</p>
        <p>La tête de la hache est fabriquée en acier carbonne et est soutenu dans le manche par des rivets et un cerclage en acier.</p>
        <p>Le manche est en bois et se termine par un pommeau en acier.</p>",
    249.99
);
$hache2 = new Hache(
    2,
    "images/hache2.jpg",
    "Hache Viking",
    "Hache viking avec gravure sur lame",
    "<p>La tête et la lame de cette hache sont gravées pour rappeler les symboles de la mythologie norse.</p>
        <p>Le manche est en bois dur noirci. Il traverse le fer de la hache par son oeil et présente des gravures.</p>",
    449.99
);
$hache3 = new Hache(
    3,
    "images/hache3.jpg",
    "Hachette",
    "Petite hache compact pour le bushcraft",
    "<p>Petite hache compacte avec manche en bois de chêne et tête en acier carbonne. </p>
        <p>Son aspect compact et sa légerté sont un atout pour les sorties dans votre forêt.</p>
        <p>En plus de votre couteau, cette hache sera vous rendre service pour vos activités de bushcraft.</p>",
    119.99
);
$haches = [$hache1, $hache2, $hache3];


$epee1 = new Epee(
    1,
    "images/katana-1280.jpg",
    "Katana",
    "Magnifique katana avec lame forgée à la main",
    "<p>Ce sabre de style japonais reprend les bases du Katana avec sa longue lame incurvée.</p>
        <p>L'acier de cette épéé est noirci par un trempage dans l'acide.</p>
        <p>Le manche et la lame sont séparés par une garde arrondie.</p>",
    649.99
);
$epee2 = new Epee(
    2,
    "images/poignard.jpg",
    "Dague",
    "Dague avec manche incurvé",
    "<p>La lame et le manche de cette dague est forgés dans un seul morceau d'acier.</p>
        <p>Le manche, gravé de motif est incurvé pour lui donner un style et est orné d'un pommeau.</p>
        <p>La dague est assé large pour lui donner un aspect rustique.</p>",
    149.99
);
$epee3 = new Epee(
    3,
    "images/sabre1.jpg",
    "Lot de Sabres",
    "Lot de trois sabres de cavalerie",
    "<p>Lot de trois sabres de cavalerie en acier carbonne.</p>
        <p>Les éléments métalliques sont poncés et polis jusqu'à obtention d'un effet miroir. </p>
        <p>La garde du troisième sabre est en bronze.</p>
        <p>Ces épées sont équipées d'un foureau fabriqué sur mesure.</p>",
    1199.99
);
$epees = [$epee1, $epee2, $epee3];

// $produits = [$couteaux, $haches, $epees ];

// foreach($produits as $produit){
//       foreach($produit as $element){
//          echo $element->getTitle().PHP_EOL;
//       }  

// }
// echo $produits[0][1]->getTitle();
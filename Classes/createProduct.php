<?php

require_once ("Product.php");
require_once ("Couteau.php");
require_once ("Hache.php");
require_once ("Epe.php");

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
    129.99);
$couteau2 = new Couteau(2, "images/couteau2.jpg",
"Couteau de chasse",
"Petit couteau de chasse et son étui", 
"<p>La lame de ce couteau est forgée avec deux type d'acier pour créer l'effet acier damas.</p>
<p>Le manche du couteau est fabriqué à partir de bois de noyer.</p>
<p>La lame et le manche sont separés par une garde en acier style damas.</p>
<p>Son etui sur mesure est fabriqué en cuir teint et est pourvu d'une sangle pour la ceinture.</p>",
149.99);
$couteau3 = new Couteau(3, "images/couteau3.jpg",
"Couteau lame damas",
"Couteau avec manche bi-matière", 
"La lame de ce couteau est forgée avec deux type d'acier pour créer l'effet acier damas. Le fil de celle-ci est en acier carbonne.</p>
<p>Le manche du couteau est fabriqué à partir de bois de noyer et de bois de cerf poli.</p>
<p>La lame et le manche sont separés par une mitre en vieux fer.",
99.99);
$couteaux = [$couteau1, $couteau2, $couteau3];






// $hache1 = new Hache();
// $hache2 = new Hache();
// $hache3 = new Hache();

// $epe1 = new Epe();
// $epe2 = new Epe();
// $epe3 = new Epe();



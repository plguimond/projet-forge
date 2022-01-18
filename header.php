<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Projet Forge</title>
</head>

<body>
    <header id="banner">
        <!-- no de tel en haut à droite -->
        <div id="bandeau_tel" class="container">
            <a href="tel:+330601020304"><i class="fas fa-phone-alt"></i>  06 01 02 03 04</a>
        </div>

        <div id="contenu_header" class="container">

            <div id="menuburger">
                
                    <nav id="menuToggle">
                        <!--
              case à cocher cachée pour activer le menu burger
              -->
                        <input type="checkbox" />

                        <!--
              
                    des images pour représenter le burger et
                    la croix.
                    
              -->

                        <span id="burgerimage"><i class="fas fa-bars"></i></span>
                        <span id="crossimage"><i class="fas fa-times"></i></span>

                        <!--
                        menu qui apparaît lorsque l'on clique sur le burger
              -->
                        <ul id="menu">
                            
                                <li><a href="index.php">Accueil</a></li>
                            
                            
                                <li><a href="creations.php">Nos créations</a></li>
                            
                            
                                <li><a href="#">Stage</a></li>
                            
                                <li><a href="#">Boutique</a></li>
                            
                            
                                <li><a href="contact.php">Contact</a></li>
                            
                        </ul>
                    
                </nav>
            </div>
        <!-- bloc logo au centre, lien vers page d'accueuil -->
            <div class="logo">
                <a href="index.php"><img src="images/logo-forge.png" alt="Projet Forge"></a>
                <h1>Projet Forge <br></h1>
            </div>
        <!-- future navigation pour le e-commerce -->
            <nav id="shopmenu">
                <ul>
                    <li><a href="#"><i class="far fa-user"></i></a></li>
                    <!-- <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> -->
                </ul>
            </nav>
        <!-- Grand menu bouton qui remplace le burger en plus grande résolution -->
            <nav id="menu_grand" class="container">
                <ul>
                    
                        <li><a href="index.php">Accueil</a></li>
                    
                    
                        <li><a href="creations.php">Nos créations</a></li>
                    
                    
                        <li><a href="#">Stage</a></li>
                    
                    
                   
                        <li><a href="#">Boutique</a></li>
                    
                    
                        <li><a href="contact.php">Contact</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
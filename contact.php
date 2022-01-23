<?php include("header.php");
?>

<main id="content" class="container">
    <!--  bloc prise de contact avec un formulaire -->
    <div id="contact">
        <h2>Laissez-nous un message</h2>
        <form action="envoyerform.php" method="post">
            <!-- choix du genre -->
            <p>
                <input type="radio" name="civilite" id="civilitem" value="M" checked>
                <label for="civilitem" class="petit">M.</label>
                <input type="radio" name="civilite" id="civilitef" value="Mme">
                <label for="civilitef">Mme</label>

            </p>
            <!--  coordonnées  -->
            <p>
                <label for="nom">Votre nom *</label>
                <input type="text" name="nom" id="nom" placeholder="tapez votre nom">
            </p>
            <p>
                <label for="prenom">Votre prénom *</label>
                <input type="text" name="prenom" id="prenom" placeholder="tapez votre prénom">
            </p>
            <p>
                <label for="address">Adresse</label>
                <input type="select" name="adress" id="address" placeholder="adresse" >
                <ul id = "addressName"></ul>
                <!-- <datalist id="addressName"> </datalist> -->
            </p>
            <p>
                <label for="email">Votre Email *</label>
                <input type="email" name="email" id="email" placeholder="tapez votre Email">
            </p>
            <p>
                <label for="tel">Votre téléphone</label>
                <input type="tel" name="tel" id="tel" placeholder="06 01 02 03 04">
            </p>
            <!-- checkbox pour préciser l'objet du message  -->
            <p>Objet
                <input type="checkbox" name="objet" id="stage" value="">
                <label for="stage" class="petit">Stage</label>
                <input type="checkbox" name="objet" id="achat" value="">
                <label for="achat" class="petit">Achat</label>
                <input type="checkbox" name="objet" id="autre" value="">
                <label for="autre" class="petit">Autre</label>
            </p>
            <!-- textarea pour saisir son message -->
            <p><label for="message">Votre message</label> </p>
            <p><textarea name="message" id="message" cols="37" rows="8"></textarea></p>
            <!--  bouton envoyer et annuler  -->
            <p>
                <input type="checkbox" name="consentement" id="rgpd" value="">
                <label for="rgpd" class="petit_texte">J'accepte les conditions générales.</label>
            </p>
            <p>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Annuler">
            </p>
            <p class="petit_texte">* Les champs marqués d'une étoile sont obligatoire.</p>
        </form>


    </div>
    <!-- bloc adresse -->
    <div id="adresse">
        <h3>Adresses</h3>
        <address>
            <strong>Greta</strong><br>
            20 Rue Winston Churchill <br>
            56000 Vannes
        </address>
    </div>
    <!-- carte de localisation avec un iframe de google map -->
    <div id="localisation">
        <h3>Nous trouver</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.878632174713!2d-2.777220584368047!3d47.64792527918737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1ee660f85f%3A0x37b8927e9d6ad86b!2sGRETA%20de%20Bretagne%20Sud%20-%20Agence%20de%20Vannes!5e0!3m2!1sfr!2sfr!4v1637488471766!5m2!1sfr!2sfr"
            height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


</main>

<?php include("footer.php");
    ?>
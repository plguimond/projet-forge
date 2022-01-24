<?php

function contact(){
    extract($_POST);
    $validation = true;
    $erreur = [];
    
    if(empty($nom) || empty($prenom) || empty($email) || empty($message)){
        $validation = false;
        $erreur[] = "Tous les champs '*' sont requis!";
    }
    if(empty($rgpd)){
        $validation = false;
        $erreur[] = "Vous devez accepter les conditions générales";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validation = false;
        $erreur[] = "L'adresse email n'est pas valide!";
    }

    if($validation){
        $to = "plguimond@gmail.com";
        $sujet = "Nouveau message de " . $nom . "<" . $email . ">" . "\r\n";
        $message = "
            <h1>Nouveau message de " . $civilite . ". " . $nom . " ". $prenom ."</h1>
            <h2>Adresse email: ". $email ."</h2>
            <p>Numéro de téléphone: " . $tel . "</p>
            <p>Adresse postale: " . $address . "</p>
            <p>". nl2br($message) ."</p>
        ";
        $headers = "From " . $nom . " " . $prenom ." <" . $email . ">" . "\r\n";
        $headers .= "MIME-Version 1.0" . "\r\n";
        $headers .= "Content-type/html; charset=utf-8" . "\r\n"; 

        mail($to, $sujet, $message, $headers);
        
        unset($_POST["civilite"]);
        unset($_POST["nom"]);
        unset($_POST["prenom"]);
        unset($_POST["address"]);
        unset($_POST["email"]);
        unset($_POST["tel"]);
        unset($_POST["message"]);
    }
    

    return $erreur;
}
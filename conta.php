<?php

session_start();

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$entreprise = $_POST['entreprise'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$depa = $_POST['depa'];

echo "Voici vos Informations, '$name', '$lastname', '$mail', '$entreprise', '$phone', '$city', '$depa' .";

mail("enegetiq@outlook.com", "New Client", "Voici les Informations de votre Client, prenom : '$name', nom : '$lastname', mail : '$mail', entreprise : '$entreprise', telephone : '$phone', Ville : '$city', Departement : '$depa' ");


    


?>
<?php

session_start();

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$entreprise = $_POST['entreprise'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$depa = $_POST['depa'];

     // Plusieurs destinataires
     $to  = 'energetiq@outlook.com'; // notez la virgule

     // Sujet
     $subject = 'New Client';

     // message
     $message = '
     <html>
      <head>
       <title>Nouveau Client !</title>
      </head>
      <body>
       <p>Prenom : $name!</p>
       <p>nom : $lastname!</p>
       <p>mail : $mail!</p>
       <p>entreprise : $entreprise!</p>
       <p>Telephone : $phone!</p>
       <p>Ville : $city!</p>
       <p>departement : $depa!</p>
       <img src="https://endoriumgroup.xyz/admin/img/E-1.png">
       
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';


     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));
        

     






echo "Voici vos Informations, '$name', '$lastname', '$mail', '$entreprise', '$phone', '$city', '$depa' .";




    


?>



<html>
    <head>

    </head>
    <body>
        <p>Vos Infos Ont été prise en compte </p>
    </body>
</html>
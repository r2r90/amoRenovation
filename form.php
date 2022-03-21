<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$objet = $_POST['objet'];
$message = $_POST['message'];


$email_from = 'amorenovation@monsite.com';

$email_objet = 'Nouveau form soumettre';

$email_body = "User Name: $name.\n". 
            "User Email: $visitor_email.\n". 
            "Objet: $visitor_email.\n".
            "User Email: $visitor_email.\n";

$to = 'amorenovation@gmail.com';

$headers = "De : $email_from \r\n";

$headers = "Repondre à : $visitor_email \r\n";

mail($to, $email_objet, $email_body, $headers);

header("Location : contact.index.html");

?>
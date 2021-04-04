<?php


$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$subject = $_POST['user_subject'];
$email = $_POST['user_email'];
$phonenumber = $_POST['user_number'];
$message = $_POST['user_message'];

echo "merci $firstname $lastname de nous avoir contacté à propos de $subject.

Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phonenumber dans les plus brefs délais pour traiter votre demande :

$message"

?>
<?php
require_once ("./public/_header.php");

$firstName = $_POST["user_name"];
$surname = $_POST["user_surname"];
$email = $_POST["user_email"];
$phoneNumber = $_POST["user_phonenumber"];
$subject = $_POST["user_message_subject"];
$message = $_POST["user_message"];

$postAnswer = <<<EOL
<p>Merci $firstName $surname de nous avoir contacté à propos de “$subject ”. <br>
Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phoneNumber dans les plus brefs délais pour traiter votre demande : <br>
$message</p>
EOL;

echo $postAnswer;
require_once ("./public/_footer.php");

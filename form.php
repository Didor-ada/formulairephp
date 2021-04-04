<?php
echo  "Bienvenue dans notre entreprise";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon formulaire</title>
</head>
<body>

<h1>Formulaire</h1>
<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_lastname">
    </div>
    <div>
        <label  for="prénom">Prénom :</label>
        <input  type="text"  id="prénom"  name="user_firstname">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label  for="Numéro de téléphone">Numéro de téléphone :</label>
        <input  type="number"  id="numéro"  name="user_number">
    </div>

    <div>
        <label  for="Sujet">Le sujet de votre demande :</label>

    <select name="user_subject">
        <option value="Select">Select</option>
        <option value="Emploi">Offre d'emploi</option>
        <option value="démarches">Mes démarches</option>
        <option value="entreprise">Notre entreprise</option>
        <option value="contact">Contactez nous</option>
    </select>
    Cliquez sur le sujet qui vous concerne
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>


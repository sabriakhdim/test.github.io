<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact pour Le Monde D'Oumi</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $contact['name'] }}</li>
      <li><strong>Mail</strong> : {{ $contact['mail'] }}</li>
      <li><strong>Numéro de télephone</strong> : {{ $contact['phone'] }}</li>
      <li><strong>Message</strong> : {{ $contact['message'] }}</li>
    </ul>
  </body>
</html>
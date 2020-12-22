<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!-- GOAL:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti
"Accesso negato" -->

 <p>
    <?php

    // Imposto le variabili per nome, mail ed età come parametri GET
      $name = $_GET['name'];
      $mail = $_GET['mail'];
      $age = $_GET['age'];

      // Stampo le tre variabili
      echo "Name " . $name . "<br>";
      echo "Mail " . $mail . "<br>";
      echo "Age " . $age . "<br>";

      // Controllo la lunghezza della variabile "name"
      $namelen = strlen($name);

      // Controllo se la mail ha chiocciola e punto
      $chiocciola = strpos($mail, "@");
      $dot = strpos($mail, ".");

      // Controllo se l'età inserita è un numero
      $checkAge = is_numeric($age);


      // Scrivo le condizioni

      if ($namelen > 3 && $chiocciola !== false && $dot !== false && $checkAge !== false) {
           echo "Acesso riuscito";
         }

         else {
           echo "Accesso negato";
         }

      ?>
    </p>
  </body>
</html>

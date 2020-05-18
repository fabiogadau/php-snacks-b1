<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Snack 2</title>
</head>
<body>
   
   <?php 
      /*
      * Passare come parametri GET name, mail e age e verificare che:
      * 1. name sia più lungo di 3 caratteri,
      * 2. che mail contenga un punto e una chiocciola
      * 3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
      */

      $data = $_GET;

      // validation in case of empty values
      if ( empty($data['name']) || empty($data['mail']) || empty($data['age']) ) {
         echo 'Accesso negato. Prego, inserire valori mancanti.';
      }
      // validation if 'name' contains 3 or less characters
      elseif ( strlen($data['name']) <= 3 ) {
         echo 'Accesso negato. Prego, inserire una parola di almeno 4 caratteri.';
      }
      // validation if 'mail' doesn't contains '@' or '.'
      elseif ( !strpos($data['mail'], '@') || !strpos($data['mail'], '.') ) {
         echo 'Accesso negato. Prego, inserire email valida.';
      }
      // validation if 'age' isn't a numeric value
      elseif ( !is_numeric($data['age']) ) {
         echo 'Accesso negato. Prego, inserire valori numerici.';
      }
      // in case it's all right
      else {
         echo 'Accesso riuscito.';
      }
   ?>

</body>
</html>
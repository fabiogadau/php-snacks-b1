<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Snack 1</title>
</head>
<body>
   
   <?php 
      /*
      * Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
      * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
      * Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60.
      */

      $matches = [
         [
            'home' => 'Dinamo Sassari',
            'away' => 'Los Angeles Lakers',
            'home_points' => rand(1, 200),
            'away_points' => rand(1, 200)
         ],
         [
            'home' => 'Reyer Venezia',
            'away' => 'Chicago Bulls',
            'home_points' => rand(1, 200),
            'away_points' => rand(1, 200)
         ],
         [
            'home' => 'Vanoli Cremona',
            'away' => 'Boston Celtics',
            'home_points' => rand(1, 200),
            'away_points' => rand(1, 200)
         ]
      ];
   ?>

   <h1>Risultati giornata #1</h1>

   <ul>
      <?php for ( $i = 0; $i < count($matches); $i++ ) { ?>
         <li>
            <?php echo $matches[$i]['home'] ?> - <?php echo $matches[$i]['away'] ?> |
            <?php echo $matches[$i]['home_points'] ?> - <?php echo $matches[$i]['away_points'] ?> 
         </li>
      <?php } ?>
   </ul>

</body>
</html>
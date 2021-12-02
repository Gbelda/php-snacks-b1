<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$match1= [
    "home" => 'Olimpia Milano',
    'away' => 'Virtus Bologna',
    'homePoints' => 80,
    'awayPoints' => 78,
];

$match2= [
    "home" => 'Varese',
    'away' => 'Pall. Cantu',
    'homePoints' => 50,
    'awayPoints' => 69,
];

$match3= [
    "home" => 'V.L Pesaro',
    'away' => 'Reyer Venezia',
    'homePoints' => 94,
    'awayPoints' => 70,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="match">
    <h2>
        <?php echo $match1['home'] ?> - 
        <?php echo $match1['away'] ?> | 
        <?php echo $match1['homePoints'] ?>-
        <?php echo $match1['awayPoints'] ?>
    </h2>
    </div>

    <div class="match">
    <h2>
        <?php echo $match2['home'] ?> - 
        <?php echo $match2['away'] ?> | 
        <?php echo $match2['homePoints'] ?>-
        <?php echo $match2['awayPoints'] ?>
    </h2>
    </div>

    <div class="match">
    <h2>
        <?php echo $match3['home'] ?> - 
        <?php echo $match3['away'] ?> | 
        <?php echo $match3['homePoints'] ?>-
        <?php echo $match3['awayPoints'] ?>
    </h2>
    </div>

</body>
</html>
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
[
    "home" => 'Olimpia Milano',
    'away' => 'Virtus Bologna',
    'homePoints' => 80,
    'awayPoints' => 78,
],
[
    "home" => 'Varese',
    'away' => 'Pall. Cantu',
    'homePoints' => 50,
    'awayPoints' => 69,
],
[
    "home" => 'V.L Pesaro',
    'away' => 'Reyer Venezia',
    'homePoints' => 94,
    'awayPoints' => 70,
],
];

?>

<?php for ($i=0; $i < count($matches); $i++) { ?>
    <h2>
        <?php echo $matches[$i]['home']?> - <?php echo $matches[$i]['away']?> | <?php echo $matches[$i]['homePoints']?> - <?php echo $matches[$i]['awayPoints']?>
    </h2>
<?php } ?>



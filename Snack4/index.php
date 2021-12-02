<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$numbArray = [];

for ($i=0; count($numbArray) < 15; $i++) { 
    $randomNumber = rand(1,100);
    if(!in_array($randomNumber, $numbArray)){
        array_push($numbArray, $randomNumber);
    }
}

?>

<?php for ($i=0; $i < count($numbArray); $i++) { ?>
    <h2><?php echo $numbArray[$i]?> </h2>
<?php } ?>
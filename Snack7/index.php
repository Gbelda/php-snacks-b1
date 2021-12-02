<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

 <?php
 $students = [

    [
        'name' => 'Bart',
        'lastname' => 'Simpson',
        'grades' => [6,7,6,7,8]
    ],
    [
        'name' => 'Angelica',
        'lastname' => 'Pickles',
        'grades' => [6,8,8,7,8]
    ],
    [
        'name' => 'Johnny',
        'lastname' => 'Bravo',
        'grades' => [6,6,7,7,8]
    ],
    [
        'name' => 'Timmy',
        'lastname' => 'Turner',
        'grades' => [6,7,6,8,8]
    ],
];

?>

<?php for ($i=0; $i < count($students); $i++) { 
    $student = $students[$i]; ?>
    <h2><?php echo $student['name'].' '.$student['lastname']?></h2>
    <h3>Grade Average: <?php echo array_sum($student['grades']) / 5 ?></h3>
    
<?php } ?>

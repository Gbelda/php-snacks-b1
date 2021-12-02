<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.php">
</head>
<body>
    <div class="teachers">
        <h2>Teachers</h2> 
        <?php for ($i=0; $i < count($db['teachers']); $i++) { 
            $teacher = $db['teachers'][$i] ?>
            <h3><?php echo $teacher['name']." ".$teacher['lastname']?></h3>
            
      <?php } ?>
    </div>

    <div class="pm">
        <h2>PM</h2> 
        <?php for ($i=0; $i < count($db['pm']); $i++) { 
            $pm = $db['pm'][$i] ?>
            <h3><?php echo $pm['name']." ".$pm['lastname']?></h3>
            
      <?php } ?>
    </div>

</body>
</html>
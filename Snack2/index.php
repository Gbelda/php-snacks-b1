<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$email = $_GET['mail'];
$age = $_GET['age'];


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
    <form action="index.php" method="get">

<label for="name">NAME:</label>
<input type="text" name="name" id="name">

<label for="mail">EMAIL:</label>
<input type="text" name="mail" id="mail">

<label for="age">AGE:</label>
<input type="text" name="age" id="age">

<input type="submit" value="SUBMIT">


<?php if($name == null && $email == null && $age == null){ ?>
    <h1>Inserire i dati</h1>
    <?php } elseif (strlen($name) > 3 && strpos($email, '@') != false && is_numeric($age)){ ?>
        <h1>Accesso Riuscito</h1>
    <?php } else{ ?>
        <h1>Accesso Negato</h1>
 <?php } ?>
    

</form>
</body>
</html>


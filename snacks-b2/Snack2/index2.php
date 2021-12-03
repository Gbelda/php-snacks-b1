<?php

$invites = array(

    'batman',
    'superman',
    'wonderwoman',
    'flash',
    
);

$user = $_GET['name'];


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
    <?php if (in_array(strtolower($user), $invites)) { ?>
    
    <h1 style="color: green;"><?php echo "OK";?></h1>

<?php }else{ ?>

    <h1 style="color: red;"><?php echo "KO";?></h1>

 <?php } ?>
    <a href="./index.php">
        GO BACK
    </a>
</body>
</html>



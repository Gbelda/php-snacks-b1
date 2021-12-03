<?php

$invites = array(

    'batman',
    'superman',
    'wonderwoman',
    'flash',
    
);

$user = $_GET['name'];

if (in_array($user, $invites)) {
    
    echo "OK";

}else{
    echo 'KO';
}

?>



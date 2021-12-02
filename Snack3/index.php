<!-- Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php
$array1 = $posts['10/01/2019'];


$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];



?>

<?php for ($i=0; $i < count($posts); $i++) { 
    $postsDate = array_keys($posts)[$i]?>

    <h1><?php echo $postsDate; ?></h1>

    <?php for ($x=0; $x < count($posts[$postsDate]); $x++) { 
        $dailyPosts = $posts[$postsDate][$x] ?>
        
        <h2><?php echo $dailyPosts['title'] ?></h2>
        <p><?php echo $dailyPosts['text']?></p>
        <h6>By: <?php echo $dailyPosts['author']?></h6>

   <?php } ?>
<?php } ?>
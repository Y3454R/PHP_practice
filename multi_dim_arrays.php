<?php

    $bb = [
        ['mario party', 'mario', 'lorem', 30],
        ['mario kart cheats', 'toad', 'lorem', 25],
        ['zelda hidden chests', 'link', 'lorem', 50]
    ];

    print_r($bb);
    echo '<br>';
    print_r($bb[1]);
    echo '<br>';
    print_r($bb[1][2]);
    echo '<br>';

    $blogs = [
        ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
        ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
        ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
    ];

    echo $blogs[2]['author'];
    echo '<br>';
    echo count($blogs);
    echo '<br>';

    $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
    print_r($blogs);
    echo '<br>';

    $popped = array_pop($blogs);
    print_r($popped);
    echo '<br>';

    print_r($blogs);
    echo '<br>';
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>My first PHP file</title>
</head>
<body>

</body>
</html>

<?php

    $peopleOne = ['shaun', 'crystal', 'ryu'];
    $peopleTwo = array('ken','chun-li');

    

    $peopleTwo[2] = 'third';
    $peopleTwo[1] = 'test';
    array_push($peopleTwo, 'abir');

    print_r($peopleTwo);
    echo '<br>';

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    print_r($peopleThree);
    echo '<br>';

    // associative arrays

    $nn = ['shaun' => 'black', 'mario' => 'orange', 'luigee' => 'brown'];
    echo $nn['mario'].'<br>';
    echo count($nn).'<br>';


?>

<!DOCTYPE html>
<html>
<head>
    <title>My first PHP file</title>
</head>
<body>

</body>
</html>

<?php

    class User {
        public $username = 'abir';
        public $email = 'omuk@gmail.com';

        public function addFriend() {
            
            return "$this->username added a new friend<br>";
        }
    }

    $userOne = new User();
    $userTwo = new User();
    
    echo $userOne->username . '<br>';
    echo $userOne->addFriend();

    $userTwo->username = 'yeasar';
    echo $userTwo->username . '<br>';
    echo $userTwo->addFriend();

?>

<!DOCTYPE html>
<html>
<head>
    <title>OOP</title>
</head>
<body>



</body>
</html>

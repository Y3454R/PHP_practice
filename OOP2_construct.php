<?php

    class User {
        public $username;
        public $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            
            return "$this->username added a new friend<br>";
        }
    }

    $name1 = 'abir';
    $email1 = 'abir@gmail.com';
    $userOne = new User($name1, $email1);
    $userTwo = new User('yeasar', 'yeasar@gmail.com');
    
    echo $userOne->username . '<br>';
    echo $userOne->addFriend();

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

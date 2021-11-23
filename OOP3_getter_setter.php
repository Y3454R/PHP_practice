<?php

    class User {
        public $username;
        private $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            
            return "$this->username added a new friend<br>";
        }

       public function getEmail() {
           return $this->email;
       }

       public function setEmail($email) {
           if(strpos($email, '@') > -1) {
               $this->email = $email;
           }
       }

    }

    $user1 = new User('abir', 'abir@mail.com');

    $user1->setEmail('yeasarabir@gmail.com');

    echo $user1->getEmail().'<br>';

    $user1->setEmail('yeasarabirgmail.com');

    echo $user1->getEmail().'<br>';

   

?>

<!DOCTYPE html>
<html>
<head>
    <title>OOP</title>
</head>
<body>



</body>
</html>

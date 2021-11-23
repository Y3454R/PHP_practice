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

    class AdminUser extends User {
        public $level;
        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email); //call parent's construct
        }   
    }

    $user1 = new User('abir', 'abir@mail.com');

    $adminuser1 = new AdminUser('yeasar', 'yeasarabir@gmail.com', 5);

    echo $adminuser1->username.'<br>';
    echo $adminuser1->getEmail().'<br>';
    echo $adminuser1->level.'<br>';

?>

<!DOCTYPE html>
<html>
<head>
    <title>OOP</title>
</head>
<body>



</body>
</html>

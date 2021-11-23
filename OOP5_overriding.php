<?php

    class User {
        public $username;
        protected $email; // protected to access in child class

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

       public function message() {
           return "$this->email sent a message <br>";
       }

    }

    class AdminUser extends User {
        public $level;
        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email); //call parent's construct
        }
        public function message() {
            return "$this->email, an admin sent a message <br>";
        }
    }

    $user1 = new User('abir', 'abir@mail.com');

    $adminuser1 = new AdminUser('yeasar', 'yeasarabir@gmail.com', 5);

    echo $user1->message().'<br>';
    echo $adminuser1->message().'<br>';

?>

<!DOCTYPE html>
<html>
<head>
    <title>OOP</title>
</head>
<body>



</body>
</html>

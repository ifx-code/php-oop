<?php

// Access Modifiers

class User{

    public $name = 'FX';

    private $password = 'passwd';

    protected $email = 'fadil@xcoder.developer';

    public function getPassword(){
        return $this->password;
    }
}

class Admin extends User{
    function __construct(){
        return $this->email;
    }
}

$user = new User;
# echo $user->name; // FX
# echo $user->password; // Error
# echo $user->getPassword(); // passwd
# echo $user->email(); // Error

$admin = new Admin;
echo $admin->__construct(); // fadil@xcoder.developer
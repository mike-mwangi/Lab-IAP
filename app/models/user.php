<?php

require_once '../util/config.php';
require_once '../models/account.php';



class User extends DbConnect {
    // private $name;
    // private $email;
    // private $city;
    // private $photo;
    // private $password;



    public function register($name, $email, $city, $password)
    {
        $sql = "INSERT INTO users(full_name, email, city, password) VALUES (:full_name, :email, :city, :password)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['full_name'=>$name, 'email'=>$email, 'city'=>$city, 'password'=>$password]);
        return true;

    }



    // Register user
    // public function register($pdo)
    // {
    //     //
    // }

    // public function login($pdo)
    // {
    //     //
    // }

    public function changePassword($pdo)
    {
        //
    }

    public function logout($pdo)
    {
        //
    }



    // Check if user is registered

    public function user_exists($email)
    {
        $sql = "SELECT email FROM users WHERE email = :email";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['email'=>$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);


    }

    // Login a user
    public function login($email)
    {
        $sql = "SELECT email, password FROM users WHERE email = :email ";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['email'=>$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    // Current user in session

    public function currentUser($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['email'=>$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

}
?>
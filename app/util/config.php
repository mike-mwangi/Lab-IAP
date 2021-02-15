<?php
require_once("../database/connect.php");
error_reporting(E_ALL);
ini_set('display_errors', true);

  class DbConnect{
    public $connection;
    private $dsn = "mysql:host=localhost;dbname=iap_lab";
    private $db_user = "root";
    private $db_password = "";


    public function __construct()
    {
        try {
            $this->connection = new PDO($this->dsn,$this->db_user,$this->db_password);

            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo 'Error :'.$e->getMessage();
        }

        return $this->connection;


    }


    // Check the input
    public function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Error messages
    public function displayAlert($type, $message)
    {
        return '<div class="alert alert-'.$type.' alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong class="text-center">'.$message.'</strong>
                </div>';
    }

}


?>
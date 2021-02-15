<?php
abstract class Connect{
    public static $db_name = "iap_lab";
    public static $db_host = "localhost";
    public static $db_user = "root";
    public static $db_password = "";
    public static $CHARSET = "utf8mb4";

    public static $db_options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
}
?>
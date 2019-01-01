<?php
// Connection details
$db_host = "localhost";
$db_name = "earn"; // Database name
$db_user = "root"; // Datebase user
$db_pass = ""; // Database password
$connstr = "mysql:host=$db_host;dbname=$db_name";
try 
{
    $con = new PDO($connstr, $db_user, $db_pass);   
}
catch (exception $e) 
{
    echo "error";
    exit();
}

?>
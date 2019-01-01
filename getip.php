<?php
include 'db.php';
//don't chanage anything.

    $IP = $_GET['IP'];
    $Time = $_GET['Time'];
    $stmt = $con->prepare("INSERT INTO earn(IP, Time) VALUES(:IP, :Time)");
    $stmt->bindValue(':IP', $IP, PDO::PARAM_STR);
    $stmt->bindValue(':Time', $Time, PDO::PARAM_STR);
        if ($stmt->execute())
    {
        echo "Not Found";
    }
    else
    {
        echo "Found";
    }
    $con = null; 
?>
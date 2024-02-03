<?php
$servername="localhost";
$username="root";
$password="";

$dbh=new PDO("mysql:host=$servername;dbname=crud", $username, $password);
try{
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed" .$e->getMessage();
}

?>



<?php
include_once 'db_connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    try{
        $sql="INSERT INTO `crud_operation` (`name`, `email`, `phone`, `password`) VALUES ( :name, :email, :phone, :password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':phone', $phone);
        $query->bindParam(':password', $password);
        
        $result = $query->execute();

        if ($result) {
            // echo "Data is inserted successfully";
            header("Location: home.php");
            exit();
        
        } else {
            echo "Failed to insert data";

        }
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
    }
}else{
        header("Location: users.php");
        exit();
}
 ?>


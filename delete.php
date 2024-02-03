<?php
include_once 'db_connect.php';
if(isset($_GET['deleteId'])){
    $id=$_GET['deleteId'];

    $sql="DELETE FROM `crud_operation` WHERE id=$id";
    $query=$dbh->prepare($sql);
    $result = $query->execute();
    if($result){
        // echo "Deleted Successfully";
        header("Location: home.php");
        exit();
    }else{
        echo "Failed ";
    }
}
?>
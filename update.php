<?php
include_once 'db_connect.php';
$id=$_GET['updateId'];
$sql="SELECT * FROM `crud_operation` WHERE id=$id";
$query=$dbh->prepare($sql);
$result=$query->execute();
$row=$query->fetch(PDO::FETCH_ASSOC);
          $name=$row['name'];
          $email=$row['email'];
          $phone=$row['phone'];
          $password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

  
        $sql="UPDATE  `crud_operation` SET name=:name, email=:email, phone=:phone, password=:password  WHERE id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':phone', $phone);
        $query->bindParam(':password', $password);
        
        $result = $query->execute();

        if ($result) {
            // echo "Data is updated successfully";
            header("Location: home.php");
            exit();
        
        } else {
            echo "Failed to insert data";

        }
    } 

 ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <form method="post">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="Enter your name" class="form-control" name="name" autocapitalize="none" value=<?php echo $name?>>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="Enter your email" class="form-control" name="email" value=<?php echo $email?>>
            </div>
            <div class="form-group mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text"  placeholder="Enter your phone number" class="form-control" name="phone" value=<?php echo $phone?>>
            </div>
            <div class="form-group mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password"   placeholder="Enter your password" class="form-control" name="password" value=<?php echo $password?>>
            </div>
            <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit"> -->

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>


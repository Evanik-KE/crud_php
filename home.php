<?php
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Crud</title>
</head>

<body>
  <div class="container my-5">
    <button class="btn btn-primary"><a href="users.php"   class="text-light">Add User</a>
    </button>
    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">S/No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php
       $sql = "SELECT * FROM `crud_operation`";
       $query = $dbh->prepare($sql);
       if ($query->execute()) { // Execute the query
        while($row=$query->fetch(PDO::FETCH_ASSOC)){
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $phone=$row['phone'];

          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$phone.'</td>
          <td>
          <button class="btn btn-primary"><a href="update.php?updateId='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteId='.$id.'" class="text-light">Delete</a></button>
          </td>
        </tr>';
        }
           
       } else {
           echo "Query execution failed"; // Handle query execution failure
       }
       
        ?>
       
      </tbody>
    </table>
  </div>
</body>

</html>


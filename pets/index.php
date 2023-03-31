<?php
session_start();
require_once '../components/db_connect.php' ;

if (isset($_SESSION['user']) != "" ) {
  header("Location: ../home.php");
  exit;
}

if (! isset($_SESSION['adm']) && !isset($_SESSION['user' ])) {
  header("Location: ../login.php");
  exit;
}

// $sql = "SELECT * FROM `animals` ORDER BY `name` ASC";
$sql = "SELECT * FROM animals";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {    
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
    $tbody .= "<tr>

      <td><img class='img-thumbnail' src='../pictures/" .$row['picture']."'</td>
      <td>" .$row['name']."</td>
      <td>" . $row['age'] . "</td> 
      <td>" .$row['location']."</td>
      <td><a href='details.php?id=" .$row['id']."'><button class='btn btn-warning btn-sm' type='button'>Details</button></a>
      <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-tertiary btn-sm' type='button'>Update</button></a>
      <a href='delete.php?id=" .$row['id']."'><button class='btn btn-secondary btn-sm' type='button'>Delete</button></a></td>

      </tr>";
  };
} else {
  $tbody =  "<tr><td colspan='6'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt A Pet</title>
  <?php  require_once '../components/boot.php' ?>
  <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div class="manageProduct w-75 mt-3">
  <h2 class="text-center m-4">Our Pets</h2>
  <div class="text-center w-25 mx-auto d-flex justify-content-evenly">
    <a href="create.php"><button class="btn btn-warning btn-gradient text-dark mb-4">Add Pet</button></a>
    <a href ="../dashboard.php"><button class='btn btn-tertiary' type="button">Dashboard</button></a>

  </div>
  <table class='table table-responsive'>
    <thead class='table-secondary'>
      <tr>
        <th>Picture</th>
        <th>Name</th>
        <th>Age</th>
        <th>Location</th>
        <th>Details</th>
        <th>Action</th>
      </tr>
    </thead>
    
<tbody>
  <?= $tbody;?>
</tbody>
  </table>
</div>
  
</body>
</html>
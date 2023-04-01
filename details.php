<?php

session_start();
require_once 'components/db_connect.php' ;

if (isset($_SESSION['adm'])) {
  header("Location: dashboard.php");
  exit;
}

if (! isset($_SESSION['adm']) && !isset($_SESSION['user' ])) {
  header("Location: login.php");
  exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM animals WHERE id = $id";
$result = mysqli_query($connect ,$sql);
$tbody = "";

if(mysqli_num_rows($result)  > 0) {    
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $tbody = "<tr>

    <td><img class='img-bigger shadow-lg rotate m-4' src='./pictures/" .$row['picture']. "'</td></tr>

    <tr><td class='text-muted fs-4'>" .$row['descr']."</td>
    <tr><td><h3>Hard Facts:</h3></td>
    <tr><td class='fs-5'>Breed: " .$row['breed']."</td>
    <tr><td class='fs-5'>Size: " .$row['size']." cm</td>
    <tr><td class='fs-5'>Age: " . $row['age'] . " years</td> 
    <tr><td class='fs-5'>Location: " .$row['location']."</td>
    <tr><td class='fs-5'>Vaccinated: " .$row['vaccinated']."</td>
    <tr><td class='fs-5'>Status: " .$row['status']."</td>

    </tr>";
  } else {
  $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <?php require_once 'components/boot.php'?>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <div class="manageProduct mt-3 mx-auto">
    <h2 class="text-center m-4">Details for <?= $row['name']?></h2>
    <table class='table details mx-auto'>
      <thead class='table-secondary'></thead>
      <tbody>
        <?= $tbody;?>
      </tbody>
    </table>
  </div>
  <div class="text-center mb-5 mx-auto d-flex justify-content-center align-items-center">
    <a href="home.php"><button class="btn btn-secondary">Back to Start</button></a>
    <a href="adopt.php?id="><button class="btn btn-tertiary" type="button">Adopt</button></a>
  </div>
  
</body>
</html>